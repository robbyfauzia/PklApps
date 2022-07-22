<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Detail_transaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_transaksi = [
            ['id_dtl_transaksi' => '12345', 'no_transaksi' => '1034', 'no_kamar' =>'115'],
            ['id_dtl_transaksi' => '12346', 'no_transaksi' => '1035', 'no_kamar' =>'205'],
            ['id_dtl_transaksi' => '12347', 'no_transaksi' => '1036', 'no_kamar' =>'217'],
            ['id_dtl_transaksi' => '12348', 'no_transaksi' => '1037', 'no_kamar' =>'305'],
            ['id_dtl_transaksi' => '12349', 'no_transaksi' => '1038', 'no_kamar' =>'120'],
        ];
        //
        DB::table('detail_transaksis')->insert($detail_transaksi);
    }
}
