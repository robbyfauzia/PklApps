<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = [
            ['no_kamar' => '115', 'jenis_kamar' => 'mini', 'harga' =>'50000'],
            ['no_kamar' => '205', 'jenis_kamar' => 'deluxe', 'harga' =>'60000'],
            ['no_kamar' => '217', 'jenis_kamar' => 'medium', 'harga' =>'70000'],
            ['no_kamar' => '305', 'jenis_kamar' => 'deluxe', 'harga' =>'60000'],
            ['no_kamar' => '120', 'jenis_kamar' => 'medium', 'harga' =>'70000'],
        ];
        //
        DB::table('kamars')->insert($kamar);
    }
}
