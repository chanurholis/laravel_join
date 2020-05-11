<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Memanggil pengguna
use App\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        // Mengambil semua data pengguna
        $pengguna = Pengguna::all();

        // Return data ke view
        return view('pengguna', ['pengguna' => $pengguna]);
    }
}
