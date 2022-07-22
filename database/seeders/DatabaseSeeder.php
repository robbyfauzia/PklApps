<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PostTableSeeder::class,
        ]);
        $this->call([
            SiswaTableSeeder::class,
        ]);
        $this->call([
            PesertaTableSeeder::class,
        ]);
        $this->call([
            MapelTableSeeder::class,
        ]);
        $this->call([
            KaryawanTableSeeder::class,
        ]);
        $this->call([
            PengunjungTableSeeder::class,
        ]);
        $this->call([
            TransaksiTableSeeder::class,
        ]);
        $this->call([
            Detail_transaksiTableSeeder::class,
        ]);
        $this->call([
            KamarTableSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
