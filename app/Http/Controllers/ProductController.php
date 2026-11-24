<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function addProduct()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|min:4|max:20',
            'stok'        => 'required|integer|min:0',
            'harga'       => 'required|integer|min:0',
            'deskripsi'   => 'required',
        ]);

        Product::create([
            'nama_produk' => $request->nama_produk,
            'stok'        => $request->stok,
            'harga'       => $request->harga,
            'deskripsi'   => $request->deskripsi,
        ]);

        return redirect('/product')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.detail', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|min:4|max:20',
            'stok'        => 'required|integer|min:0',
            'harga'       => 'required|integer|min:0',
            'deskripsi'   => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'nama_produk' => $request->nama_produk,
            'stok'        => $request->stok,
            'harga'       => $request->harga,
            'deskripsi'   => $request->deskripsi,
        ]);

        return redirect('/product')->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/product')->with('success', 'Data Berhasil Dihapus');
    }
}