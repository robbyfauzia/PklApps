<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\peserta;
use App\Models\mapel;

class MapelController extends Controller
{
    public function mapel () {
        $siswa = Siswa::all();
        $peserta = Peserta::all();
        $mapel = Mapel::all();
        return view('post.mapel', compact('siswa','peserta','mapel'));
    }
}
