@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <p><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
    <p><strong>Program Studi:</strong> {{ $mahasiswa['prodi'] }}</p>
    <p><strong>IPK:</strong> {{ number_format($mahasiswa['ipk'], 2) }}</p>

    @if ($mahasiswa['ipk'] < 2.0)
        <x-alert tipe="bahaya">
            IPK mahasiswa di bawah 2,0. Perlu perhatian khusus.
        </x-alert>
    @else
        <x-alert tipe="sukses">
            Data mahasiswa berhasil ditemukan.
        </x-alert>
    @endif

    <p>
        <a href="{{ route('mahasiswa.index') }}">
            Kembali ke daftar mahasiswa
        </a>
    </p>
@endsection  