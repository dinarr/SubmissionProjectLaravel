<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
     private function dataMahasiswa()
    {
        return [
            [
                'nim' => '2301001',
                'nama' => 'Andi Saputra',
                'prodi' => 'Teknik Informatika',
                'ipk' => 3.80,
            ],
            [
                'nim' => '2301002',
                'nama' => 'Budi Santoso',
                'prodi' => 'Sistem Informasi',
                'ipk' => 3.50,
            ],
            [
                'nim' => '2301003',
                'nama' => 'Citra Lestari',
                'prodi' => 'Teknik Informatika',
                'ipk' => 3.20,
            ],
            [
                'nim' => '2301004',
                'nama' => 'Dedi Kurniawan',
                'prodi' => 'Manajemen Informatika',
                'ipk' => 1.80,
            ],
            [
                'nim' => '2301005',
                'nama' => 'Eka Pratama',
                'prodi' => 'Sistem Informasi',
                'ipk' => 2.90,
            ],
        ];
    }

    public function profil()
    {
        $mahasiswa = [
            'nama' => 'Andi Saputra',
            'nim' => '2301001',
            'prodi' => 'Teknik Informatika',
        ];

        return view('mahasiswa.profil', compact('mahasiswa'));
    }

    public function index()
    {
        $mahasiswa = $this->dataMahasiswa();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function show($nim)
    {
        $mahasiswa = collect($this->dataMahasiswa())
            ->firstWhere('nim', $nim);

        abort_if(!$mahasiswa, 404);

        return view('mahasiswa.detail', compact('mahasiswa'));
    }
}
