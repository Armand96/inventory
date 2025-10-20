@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Barang Transaksi</h1>

        <form action="{{ route('barang_trxes.update', $barang->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('barang._form', ['barang' => $barang])
            <button type="submit" class="btn btn-success mt-3">Update</button>
            <a href="{{ route('barang_trxes.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>
@endsection
