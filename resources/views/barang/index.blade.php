@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="mb-4">Daftar Barang Transaksi</h1>

        <a href="{{ route('barang_trxes.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Importir</th>
                    <th>Kode Importir</th>
                    <th>No PO</th>
                    <th>No Surat Jalan</th>
                    <th>Nama Barang</th>
                    <th>Penyebutan</th>
                    <th>Satuan</th>
                    <th>Packaging</th>
                    <th>Isi Packaging</th>
                    <th>Jumlah</th>
                    <th>Jumlah Dalam Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangTrxes as $barang)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $barang->tanggal }}</td>
                        <td>{{ $barang->nama_importir }}</td>
                        <td>{{ $barang->kode_importir }}</td>
                        <td>{{ $barang->no_po }}</td>
                        <td>{{ $barang->no_surat_jalan }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->penyebutan }}</td>
                        <td>{{ $barang->satuan }}</td>
                        <td>{{ $barang->packaging }}</td>
                        <td>{{ $barang->isi_packaging }}</td>
                        <td>{{ $barang->jumlah }}</td>
                        <td>{{ $barang->jumlah_dalam_satuan }}</td>
                        <td>
                            <a href="{{ route('barang_trxes.edit', $barang->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('barang_trxes.destroy', $barang->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
