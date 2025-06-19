@extends('keranjang.layout')

@section('content')
<h3>Tambah Barang ke Keranjang</h3>

<form action="{{ route('keranjang.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Kode Barang</label>
        <input type="number" name="KodeBarang" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="Jumlah" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="Harga" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
