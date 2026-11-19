<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Andi Saputra',
            'Budi Santoso',
            'Citra Lestari'
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}
