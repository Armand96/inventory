<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangTrx extends Model
{
    //
    protected $fillable = [
        'tanggal',
        'nama_importir',
        'kode_importir',
        'no_po',
        'no_surat_jalan',
        'nama_barang',
        'penyebutan',
        'satuan',
        'packaging',
        'isi_packaging',
        'jumlah',
        'jumlah_dalam_satuan',
    ];
}
