@extends('tugas_crud.layout')

@section('content')
    <h2>Tambah Sepeda Motor Baru</h2>

    <form action="{{ route('sepedamotor.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <strong>Merk Sepeda Motor:</strong>
                    <input type="text" name="merksepedamotor" class="form-control" placeholder="Contoh: Honda Vario 160">
                </div>
                <div class="form-group mb-3">
                    <strong>Harga Sepeda Motor:</strong>
                    <input type="number" name="hargasepedamotor" class="form-control" placeholder="Contoh: 27000000">
                </div>
                <div class="form-group mb-3">
                    <strong>Tersedia:</strong>
                    <select name="tersedia" class="form-control">
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <strong>Berat (kg):</strong>
                    <input type="number" step="0.01" name="berat" class="form-control" placeholder="Contoh: 112.5">
                </div>
                <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@endsection