<?php

namespace App\Http\Controllers;

use App\Models\NewKaryawan;
use Illuminate\Http\Request;

class NewKaryawanController extends Controller
{
    // Menampilkan semua data karyawan
    public function index()
    {
        $newkaryawan = NewKaryawan::all();
        return view('newkaryawan.index', compact('newkaryawan'));
    }
    
    // Menampilkan form untuk menambah data baru
    public function create()
    {
        return view('newkaryawan.create');
    }

    // Menyimpan data
    public function store(Request $request)
    {
        // Validasi input dengan perbaikan
        $request->validate([
            'NIP' => 'required|string|size:9|unique:newkaryawan,NIP',
            'nama' => 'required|string|max:50',
            'pangkat' => 'required|string|max:15',
            #max gaji 12 digit
            'gaji' => 'required|integer|max:1000000000000',
        ]);

        NewKaryawan::create($request->all());

        return redirect()->route('newkaryawan.index')
                        ->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    // Menghapus data newkaryawan
    public function destroy(NewKaryawan $newkaryawan)
    {
        $newkaryawan->delete();

        // Redirect ke halaman index setelah berhasil menghapus
        return redirect()->route('newkaryawan.index')
                         ->with('success', 'Data karyawan berhasil dihapus.');
    }
}
