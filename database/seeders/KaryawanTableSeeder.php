<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
            ['id_karyawan' => '1001', 'nm_karyawan' => 'Hadad', 'jk' =>'Pria'],
            ['id_karyawan' => '1002', 'nm_karyawan' => 'Arif', 'jk' =>'Pria'],
            ['id_karyawan' => '1003', 'nm_karyawan' => 'Nabila', 'jk' =>'Wanita'],
            ['id_karyawan' => '1004', 'nm_karyawan' => 'Isna', 'jk' =>'Wanita'],
            ['id_karyawan' => '1005', 'nm_karyawan' => 'Olla', 'jk' =>'Wanita'],
        ];
        //
        DB::table('karyawans')->insert($karyawan);
    }
}
