{{-- resources/views/karyawan/index.blade.php --}}
@extends('karyawan.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Data Karyawan</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th width="150px">Aksi</th>
        </tr>
        @foreach ($karyawan as $key => $k)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ $k->namalengkap }}</td> {{-- Otomatis Uppercase dari accessor --}}
            <td>{{ $k->divisi }}</td>
            <td>{{ $k->departemen }}</td> {{-- Otomatis Lowercase dari accessor --}}
            <td>
                <form action="{{ route('karyawan.destroy',$k->kodepegawai) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus Data</button> {{-- Tombol Hapus Data --}}
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('karyawan.create') }}"> Tambah Data</a> {{-- Tombol Tambah Data --}}
    </div>
@endsection