@extends('layouts.app')

@section('content')
    <div class="container text-center py-5">
        <h1>Selamat Datang di Aplikasi Barang Transaksi</h1>
        <p class="mt-3">
            <a href="{{ route('barang_trxes.index') }}" class="btn btn-primary">Lihat Daftar Barang</a>
        </p>
    </div>
@endsection
