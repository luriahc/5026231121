@extends('tugas_crud.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>CRUD Sepeda Motor</h2>
            <a class="btn btn-success mb-3" href="{{ route('sepedamotor.create') }}"> Tambah Sepeda Motor</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Merk</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th width="280px">Aksi</th>
        </tr>
        {{-- Ganti $sepedamotors dengan variabel yang Anda kirim dari controller --}}
        @foreach ($sepedamotors as $motor)
        <tr>
            <td>{{ $motor->ID }}</td>
            <td>{{ $motor->merksepedamotor }}</td>
            <td>Rp {{ number_format($motor->hargasepedamotor, 0, ',', '.') }}</td>
            <td>{{ $motor->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $motor->berat }} kg</td>
            <td>
                <form action="{{ route('sepedamotor.destroy', $motor->ID) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('sepedamotor.edit', $motor->ID) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection