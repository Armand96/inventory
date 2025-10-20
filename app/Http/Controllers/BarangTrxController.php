<?php

namespace App\Http\Controllers;

use App\Models\BarangTrx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangTrxController extends Controller
{
    public function index()
    {
        $barangTrxes = BarangTrx::all();
        return view('barang.index', compact('barangTrxes'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        BarangTrx::create($request->all());
        return redirect()->route('barang_trxes.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit(BarangTrx $barangTrx)
    {
        return view('barang.edit', ['barang' => $barangTrx]);
    }

    public function update(Request $request, BarangTrx $barangTrx)
    {
        $barangTrx->update($request->all());
        return redirect()->route('barang_trxes.index')->with('success', 'Barang berhasil diperbarui');
    }

    public function destroy(BarangTrx $barangTrx)
    {
        $barangTrx->delete();
        return redirect()->route('barang_trxes.index')->with('success', 'Barang berhasil dihapus');
    }

    public function summary()
    {
        $summary = DB::table('barang_trxes')
            ->select('nama_barang', 'satuan', DB::raw('SUM(jumlah) as total_jumlah'))
            ->groupBy('nama_barang', 'satuan')
            ->get();

        return view('barang.summary', compact('summary'));
    }
}
