<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Merchant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\MerchantRequest;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $merchants = Merchant::get();

        return view('admin.merchants.index', compact('merchants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.merchants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MerchantRequest $request)
    {
        $input = $request->all();
        if (request()->file('logo')) {
            $logo = request()->file('logo');
            $logoUrl = $logo->storeAs("public/logo", time().".{$logo->extension()}");
        } else{
            $logoUrl = null;
        }
        $input['logo'] = "$logoUrl";
        $merchant = Merchant::create($input);
        return redirect()->route('admin.merchants.index')->with([
            'message' => 'berhasil di buat',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Merchant $merchant)
    {
       return view('admin.merchants.show', compact('merchant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Merchant $merchant)
    {
        return view('admin.merchants.edit', compact('merchant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MerchantRequest $request, Merchant $merchant)
    {
        $input = $request->all();
        if (request()->file('logo')) {
            if ($merchant->logo && Storage::exists($merchant->logo)) {
                Storage::delete($merchant->logo);
            }
            $logo = request()->file('logo');
            $imageUrl = $logo->storeAs("public/logo", time() . ".{$logo->extension()}");
        } else {
            $imageUrl = $merchant->logo;
        }
        $input['logo'] = "$imageUrl";
        $merchant->update($input);
        return redirect()->route('admin.merchants.index')->with([
            'message' => 'berhasil di edit',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Merchant $merchant)
    {
        {
            if($merchant->logo && Storage::exists($merchant->logo)){
                Storage::delete($merchant->logo);
            }
    
            $merchant->delete();
      
            return redirect()->route('admin.merchants.index')
                ->with('success','Merchant berhasil dihapus!');
        }
    }
}
