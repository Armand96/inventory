@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Rekap Barang</h1>

        <a href="{{ route('barang_trxes.index') }}" class="btn btn-secondary mb-3">← Kembali ke Daftar</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Total Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($summary as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_barang }}</td>
                        <td>{{ $item->satuan }}</td>
                        <td>{{ number_format($item->total_jumlah, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
