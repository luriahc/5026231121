@extends('tugas_crud.layout')

@section('content')
    <h2>Edit Data Sepeda Motor</h2>

    {{-- Ganti $motor dengan variabel yang Anda kirim dari controller --}}
    <form action="{{ route('sepedamotor.update', $motor->ID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <strong>Merk Sepeda Motor:</strong>
                    <input type="text" name="merksepedamotor" value="{{ $motor->merksepedamotor }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <strong>Harga Sepeda Motor:</strong>
                    <input type="number" name="hargasepedamotor" value="{{ $motor->hargasepedamotor }}" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <strong>Tersedia:</strong>
                    <select name="tersedia" class="form-control">
                        <option value="1" {{ $motor->tersedia ? 'selected' : '' }}>Ya</option>
                        <option value="0" {{ !$motor->tersedia ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <strong>Berat (kg):</strong>
                    <input type="number" step="0.01" name="berat" value="{{ $motor->berat }}" class="form-control">
                </div>
                <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </form>
@endsection