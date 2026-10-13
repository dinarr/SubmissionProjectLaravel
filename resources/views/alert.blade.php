@props(['tipe' => 'info'])
<div class="alert alert-{{ $tipe }}">
    {{ $slot }}
</div>
<x-alert tipe="sukses">Data berhasil disimpan.</x-alert>
<x-harga-produk :nilai="$p['harga']" :diskon="true" />
Named slot, components/kartu.blade.php:

<div class="kartu">
    @isset($judul) <h3>{{ $judul }}</h3> @endisset
    {{ $slot }}
</div>

<x-kartu>
    <x-slot:judul>Keyboard</x-slot:judul>
    Harga Rp 150.000
</x-kartu>