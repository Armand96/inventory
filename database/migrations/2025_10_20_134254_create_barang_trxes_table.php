<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang_trxes', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('nama_importir')->nullable();
            $table->string('kode_importir')->nullable();
            $table->string('no_po')->nullable();
            $table->string('no_surat_jalan')->nullable();
            $table->string('nama_barang')->nullable();
            $table->string('penyebutan')->nullable();
            $table->string('satuan')->nullable();
            $table->string('packaging')->nullable();
            $table->string('isi_packaging')->nullable();
            $table->float('jumlah')->nullable();
            $table->float('jumlah_dalam_satuan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
