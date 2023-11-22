<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();

        return View('product', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_bunga' => 'required',
            'stock' => 'required',
            'harga' => 'required'
        ]);
        Product::create([
            'nama_bunga' => $request->nama_bunga,
            'stock' => $request->stock,
            'harga' => $request->harga
        ]);
        return redirect()->route('product')->with(['succes' => 'Data Berhasil Disimpan!']);
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
    public function edit($id)
    {
        //get sant$product by ID
        $product = Product::findOrFail($id);

        //render view with product
        return view('productEdit', compact('product'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama_bunga' => 'required',
            'stock' => 'required',
            'harga' => 'required'
        ]);
        $product = Product::findOrFail($id);
        $product->update([
            'nama_bunga' => $request->nama_bunga,
            'stock' => $request->stock,
            'harga' => $request->harga,
        ]);
        return redirect()->route('product')->with(['succes' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) 
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product')->with(['succes' => 'Data Berhasil Disimpan!']);
    }
}
