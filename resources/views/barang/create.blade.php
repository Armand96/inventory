@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Tambah Barang Transaksi</h1>

        <form action="{{ route('barang_trxes.store') }}" method="POST">
            @csrf
            @include('barang._form', ['barang' => null])
            <button type="submit" class="btn btn-success mt-3">Simpan</button>
            <a href="{{ route('barang_trxes.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>
@endsection
