@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <h1>Profil Mahasiswa</h1>

    <p><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
    <p><strong>Program Studi:</strong> {{ $mahasiswa['prodi'] }}</p>

    <x-alert tipe="info">
        Selamat datang di halaman profil mahasiswa.
    </x-alert>
@endsection    