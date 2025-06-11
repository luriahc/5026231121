{{-- resources/views/karyawan/create.blade.php --}}
@extends('karyawan.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Tambah Karyawan Baru</h2>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('karyawan.store') }}" method="POST">
    @csrf
     <div class="row">
        {{-- Layout Horizontal Form --}}
        <div class="col-md-8">
            <div class="row mb-3">
                <label for="kodepegawai" class="col-sm-3 col-form-label">Kode Pegawai</label>
                <div class="col-sm-9">
                    <input type="text" name="kodepegawai" class="form-control" id="kodepegawai" placeholder="Contoh: PG001">
                </div>
            </div>
            <div class="row mb-3">
                <label for="namalengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" name="namalengkap" class="form-control" id="namalengkap" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="row mb-3">
                <label for="divisi" class="col-sm-3 col-form-label">Divisi</label>
                <div class="col-sm-9">
                    <input type="text" name="divisi" class="form-control" id="divisi" placeholder="Contoh: HRD01">
                </div>
            </div>
            <div class="row mb-3">
                <label for="departemen" class="col-sm-3 col-form-label">Departemen</label>
                <div class="col-sm-9">
                    <input type="text" name="departemen" class="form-control" id="departemen" placeholder="Departemen">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
@endsection