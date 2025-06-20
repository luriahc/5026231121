{{-- resources/views/newkaryawan/create.blade.php --}}
@extends('newkaryawan.layout')

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

<form action="{{ route('newkaryawan.store') }}" method="POST">
    @csrf
     <div class="row">
        {{-- Layout Horizontal Form --}}
        <div class="col-md-8">
            <div class="row mb-3">
                <label for="NIP" class="col-sm-3 col-form-label">NIP</label>
                <div class="col-sm-9">
                    <input type="text" name="NIP" class="form-control" id="NIP" placeholder="Contoh: 123456789">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nama" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="row mb-3">
                <label for="pangkat" class="col-sm-3 col-form-label">Pangkat</label>
                <div class="col-sm-9">
                    <input type="text" name="pangkat" class="form-control" id="pangkat" placeholder="Contoh: HRD01">
                </div>
            </div>
            <div class="row mb-3">
                <label for="gaji" class="col-sm-3 col-form-label">Gaji</label>
                <div class="col-sm-9">
                    <input type="text" name="gaji" class="form-control" id="gaji" placeholder="Contoh: 5000000">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </div>
    </div>
</form>
@endsection