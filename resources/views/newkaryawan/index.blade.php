{{-- resources/views/newkaryawan/index.blade.php --}}
@extends('newkaryawan.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Data New Karyawan</h2>
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
            <th>NIP</th>
            <th>Nama Lengkap</th>
            <th>Pangkat</th>
            <th>Gaji</th>
            <th width="150px">Aksi</th>
        </tr>
        @foreach ($newkaryawan as $key => $k)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $k->NIP }}</td>
            <td>{{ $k->nama }}</td> {{-- Otomatis Uppercase dari accessor --}}
            <td>{{ $k->pangkat }}</td>
            <td>{{ $k->gaji }}</td> {{-- Otomatis Lowercase dari accessor --}}
            <td>
                <form action="{{ route('newkaryawan.destroy',$k->NIP) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus Data</button> {{-- Tombol Hapus Data --}}
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('newkaryawan.create') }}"> Tambah Data</a> {{-- Tombol Tambah Data --}}
    </div>
@endsection