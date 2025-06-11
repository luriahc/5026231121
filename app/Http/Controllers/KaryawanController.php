<?php

// app/Http/Controllers/KaryawanController.php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // Menampilkan semua data karyawan
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    // Menampilkan form untuk menambah data baru
    public function create()
    {
        return view('karyawan.create');
    }

    // Menyimpan data
    public function store(Request $request)
    {
        // Validasi input dengan perbaikan
        $request->validate([
            'kodepegawai' => 'required|string|size:5|unique:karyawan,kodepegawai',
            'namalengkap' => 'required|string|max:50',
            'divisi'      => 'required|string|size:5',
            // PERUBAHAN: dari integer menjadi string
            'departemen'  => 'required|string|max:50',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index')
                        ->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    // Menghapus data karyawan
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        // Redirect ke halaman index setelah berhasil menghapus
        return redirect()->route('karyawan.index')
                         ->with('success', 'Data karyawan berhasil dihapus.');
    }
}