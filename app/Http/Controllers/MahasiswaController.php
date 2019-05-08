<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Mahasiswa_Matakuliah;

class MahasiswaController extends Controller
{
    public function index()
    {
        // $data['mahasiswa'] = Mahasiswa::all();
        $data['mahasiswa'] = Mahasiswa_Matakuliah::all();
        // $data['mahasiswa'] = Mahasiswa::where('nama', 'ersad@gmail.com')->get();
        return view('mahasiswa', $data);
    }
    //
}
