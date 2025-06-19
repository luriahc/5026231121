<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index()
    {
        $data = Keranjang::all();
        return view('keranjang.index', compact('data'));
    }

    public function create()
    {
        return view('keranjang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah' => 'required|integer',
            'Harga' => 'required|integer',
        ]);

        Keranjang::create($request->all());

        return redirect()->route('keranjang.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        Keranjang::destroy($id);
        return redirect()->route('keranjang.index')->with('success', 'Data berhasil dihapus');
    }

    // Optional: kosongkan edit/update/show agar tidak error saat routing resource
    public function show($id) {}
    public function edit($id) {}
    public function update(Request $request, $id) {}
}
