@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>IPK</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs['nim'] }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['prodi'] }}</td>
                    <td>{{ number_format($mhs['ipk'], 2) }}</td>
                    <td>
                        @if ($mhs['ipk'] >= 3.5)
                            Cum Laude
                        @elseif ($mhs['ipk'] >= 3.0)
                            Baik
                        @elseif ($mhs['ipk'] >= 2.0)
                            Perlu Ditingkatkan
                        @else
                            Perlu Perhatian
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mhs['nim']) }}">
                            Detail
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <x-alert tipe="info">
        Total mahasiswa: {{ count($mahasiswa) }}
    </x-alert>

    @foreach ($mahasiswa as $mhs)
        @if ($mhs['ipk'] < 2.0)
            <x-alert tipe="bahaya">
                Perhatian: {{ $mhs['nama'] }} memiliki IPK di bawah 2,0.
            </x-alert>
        @endif
    @endforeach
@endsection  