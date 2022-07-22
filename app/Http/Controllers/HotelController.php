<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\karyawan;
use App\Models\pengunjung;
use App\Models\transaksi;
use App\Models\detail_transaksi;
use App\Models\kamar;
class HotelController extends Controller
{
    public function hotel () {
        $karyawan = Karyawan::all();
        $pengunjung= Pengunjung::all();
        $transaksi= Transaksi::all();
        $detail_transaksi= Detail_transaksi::all();
        $kamar= Kamar::all();
        return view('post.hotel', compact('karyawan','pengunjung','transaksi','detail_transaksi','kamar'));
    }
}
