<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peserta = [
            ['no' => '2001', 'kode_MP' => 'MP01'],
            ['no' => '2002', 'kode_MP' => 'MP02'],
            ['no' => '2003', 'kode_MP' => 'MP03'],
            ['no' => '2004', 'kode_MP' => 'MP04'],
            ['no' => '2005', 'kode_MP' => 'MP05'],
            ['no' => '2006', 'kode_MP' => 'MP06'],
        ];
        DB::table('pesertas')->insert($peserta);
    }
}
