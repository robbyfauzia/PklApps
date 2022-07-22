<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class siswaController extends Controller
{
    public function siswa () 
    {
        $siswa = Siswa::all();
        return view('post.siswa', compact('siswa'));
    }
}
