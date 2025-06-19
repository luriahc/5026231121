@extends('keranjang.layout')

@section('content')
<h3>Daftar Keranjang Belanja</h3>

<a href="{{ route('keranjang.create') }}" class="btn btn-primary mb-3">+ Beli</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->KodeBarang }}</td>
            <td>{{ $item->Jumlah }}</td>
            <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
            <td>
                <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin batal?')">Batal</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
