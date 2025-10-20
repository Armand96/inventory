<div class="row">
    @php
        $fields = [
            'tanggal' => 'Tanggal',
            'nama_importir' => 'Nama Importir',
            'kode_importir' => 'Kode Importir',
            'no_po' => 'No PO',
            'no_surat_jalan' => 'No Surat Jalan',
            'nama_barang' => 'Nama Barang',
            'penyebutan' => 'Penyebutan',
            'satuan' => 'Satuan',
            'packaging' => 'Packaging',
            'isi_packaging' => 'Isi Packaging',
            'jumlah' => 'Jumlah',
            'jumlah_dalam_satuan' => 'Jumlah Dalam Satuan',
        ];
    @endphp

    @foreach ($fields as $name => $label)
        <div class="col-md-6 mb-3">
            <label for="{{ $name }}" class="form-label">{{ $label }}</label>

            @if ($name === 'tanggal')
                <input type="date" name="{{ $name }}" id="{{ $name }}" class="form-control"
                    value="{{ old($name, $barang?->$name) }}">
            @elseif (in_array($name, ['jumlah', 'isi_packaging']))
                <input type="number" step="0.01" name="{{ $name }}" id="{{ $name }}"
                    class="form-control" value="{{ old($name, $barang?->$name) }}">
            @elseif ($name === 'jumlah_dalam_satuan')
                <input type="number" step="0.01" name="{{ $name }}" id="{{ $name }}"
                    class="form-control" readonly value="{{ old($name, $barang?->$name) }}">
            @else
                <input type="text" name="{{ $name }}" id="{{ $name }}" class="form-control"
                    value="{{ old($name, $barang?->$name) }}">
            @endif
        </div>
    @endforeach
</div>

{{-- Auto-calculation script --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const isiPackagingInput = document.getElementById('isi_packaging');
        const jumlahInput = document.getElementById('jumlah');
        const jumlahDalamSatuanInput = document.getElementById('jumlah_dalam_satuan');

        function calculateJumlahDalamSatuan() {
            const isi = parseFloat(isiPackagingInput.value) || 0;
            const jumlah = parseFloat(jumlahInput.value) || 0;
            const total = isi * jumlah;
            jumlahDalamSatuanInput.value = total.toFixed(2);
        }

        isiPackagingInput.addEventListener('input', calculateJumlahDalamSatuan);
        jumlahInput.addEventListener('input', calculateJumlahDalamSatuan);
    });
</script>
