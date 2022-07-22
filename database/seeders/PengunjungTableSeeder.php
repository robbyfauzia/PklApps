<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PengunjungTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung = [
            ['id_pengunjung' => '2001', 'nm_pengunjung' => 'Giyang', 'alamat'=>'Sayati', 'jk' =>'Pria', 'no_tlp' => '089674783912', 'no_ktp' => '112345'],
            ['id_pengunjung' => '2002', 'nm_pengunjung' => 'Ihsan', 'alamat'=>'Saluyu', 'jk' =>'Pria', 'no_tlp' => '08958999532', 'no_ktp' => '122346'],
            ['id_pengunjung' => '2003', 'nm_pengunjung' => 'Rahma', 'alamat'=>'Saluyu', 'jk' =>'Wanita', 'no_tlp' => '089511228990', 'no_ktp' => '132347'],
            ['id_pengunjung' => '2004', 'nm_pengunjung' => 'Alya', 'alamat'=>'Kopo', 'jk' =>'Wanita', 'no_tlp' => '089667789988', 'no_ktp' => '142348'],
            ['id_pengunjung' => '2005', 'nm_pengunjung' => 'Rama', 'alamat'=>'Sayati', 'jk' =>'Pria', 'no_tlp' => '089655532321', 'no_ktp' => '152349'],
        ];
        //
        DB::table('pengunjungs')->insert($pengunjung);
    }
}
