<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\MenuRequest;

class MenuController extends Controller
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
        
        $menus = Menu::get();

        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        
        $input = $request->all();
        if (request()->file('foto')) {
            $foto = request()->file('foto');
            $fotoUrl = $foto->storeAs("public/foto", time().".{$foto->extension()}");
        } else{
            $fotoUrl = null;
        }
        $input['foto'] = "$fotoUrl";
        $menu = Menu::create($input);
        return redirect()->route('admin.menus.index')->with([
            'message' => 'berhasil di buat',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        $input = $request->all();
        if (request()->file('foto')) {
            if ($menu->foto && Storage::exists($menu->foto)) {
                Storage::delete($menu->foto);
            }
            $foto = request()->file('foto');
            $imageUrl = $foto->storeAs("public/foto", time() . ".{$foto->extension()}");
        } else {
            $imageUrl = $menu->foto;
        }
        $input['foto'] = "$imageUrl";
        $menu->update($input);
        return redirect()->route('admin.menus.index')->with([
            'message' => 'berhasil di edit',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        {
            if($menu->foto && Storage::exists($menu->foto)){
                Storage::delete($menu->foto);
            }
    
            $menu->delete();
      
            return redirect()->route('admin.menus.index')
                ->with('success','Menu berhasil dihapus!');
        }
    }
}
