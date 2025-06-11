<?php

namespace App\Http\Controllers;

use App\Models\SepedaMotor; // Import model SepedaMotor
use Illuminate\Http\Request;

class SepedaMotorController extends Controller
{
    /**
     * Menampilkan daftar semua sepedamotor.
     */
    public function index()
    {
        $sepedamotors = SepedaMotor::latest()->paginate(5); // Mengambil data terbaru dengan paginasi
        return view('tugas_crud.index', compact('sepedamotors'));
    }

    /**
     * Menampilkan form untuk membuat sepedamotor baru.
     */
    public function create()
    {
        return view('tugas_crud.create');
    }

    /**
     * Menyimpan sepedamotor baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'merksepedamotor' => 'required|string|max:25',
            'hargasepedamotor' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric',
        ]);

        SepedaMotor::create($request->all());

        return redirect()->route('sepedamotor.index')
                         ->with('success', 'Sepeda motor berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit sepedamotor.
     */
    public function edit(SepedaMotor $sepedamotor)
    {
        // Laravel otomatis akan mencari sepedamotor berdasarkan ID
        return view('tugas_crud.edit', ['motor' => $sepedamotor]);
    }

    /**
     * Mengupdate data sepedamotor di database.
     */
    public function update(Request $request, SepedaMotor $sepedamotor)
    {
        $request->validate([
            'merksepedamotor' => 'required|string|max:25',
            'hargasepedamotor' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric',
        ]);

        $sepedamotor->update($request->all());

        return redirect()->route('sepedamotor.index')
                         ->with('success', 'Data sepeda motor berhasil diperbarui.');
    }

    /**
     * Menghapus sepedamotor dari database.
     */
    public function destroy(SepedaMotor $sepedamotor)
    {
        $sepedamotor->delete();

        return redirect()->route('sepedamotor.index')
                         ->with('success', 'Sepeda motor berhasil dihapus.');
    }
}