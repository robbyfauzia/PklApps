<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            ['no_transaksi' => '1034', 'id_pengunjung' => '2001', 'id_karyawan' => '1001', 'jmlh_kamar' =>'4', 'tgl_masuk' => '2022-07-17', 'tgl_keluar' => '2022-07-18', 'lama_nginap' => '1', 'total_harga' => '100000'],
            ['no_transaksi' => '1035', 'id_pengunjung' => '2002', 'id_karyawan' => '1002', 'jmlh_kamar' =>'2', 'tgl_masuk' => '2022-07-13', 'tgl_keluar' => '2022-07-15', 'lama_nginap' => '2', 'total_harga' => '200000'],
            ['no_transaksi' => '1036', 'id_pengunjung' => '2003', 'id_karyawan' => '1003', 'jmlh_kamar' =>'2', 'tgl_masuk' => '2022-07-13', 'tgl_keluar' => '2022-07-16', 'lama_nginap' => '3', 'total_harga' => '300000'],
            ['no_transaksi' => '1037', 'id_pengunjung' => '2004', 'id_karyawan' => '1004', 'jmlh_kamar' =>'5', 'tgl_masuk' => '2022-07-10', 'tgl_keluar' => '2022-07-15', 'lama_nginap' => '5', 'total_harga' => '500000'],
            ['no_transaksi' => '1038', 'id_pengunjung' => '2005', 'id_karyawan' => '1005', 'jmlh_kamar' =>'1', 'tgl_masuk' => '2022-07-09', 'tgl_keluar' => '2022-07-11', 'lama_nginap' => '2', 'total_harga' => '200000'],
        ];
        //
        DB::table('transaksis')->insert($transaksi);
    }
}
