<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceRequest;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::get(['id','nama_makanan','harga']);
        return view('user.invoice.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InvoiceRequest $request)
    {
        $input = $request->all();
        $invoice = Invoice::create($input);
        return redirect()->route('daftar-makanan')->with([
            'message' => 'berhasil di buat',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
