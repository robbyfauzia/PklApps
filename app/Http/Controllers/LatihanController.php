<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu()
    {
        $menu = [
            [
                'nama' => 'Beranda',
            ],
            [
                'nama' => 'Berita',
                'kategori' => [
                    [
                        'nama_kategori' => 'Olahraga',
                        'menu' => [
                            'Sepak Bola',
                            'Bulu Tangkis'
                        ]
                    ],
                    [
                        'nama_kategori' => 'Politik'
                    ],
                    [
                        'nama_kategori' => 'Manca Negara'
                    ]
                ]
            ],
            [
                'nama' => 'Tentang'
            ]
            ];


        // dd($menu);
        return view('pages.menu', ['menu' => $menu]);
    }

    public function dosen() {
        $dosen = [
            [
                'nama' => 'Yusuf Bachtiar','mata_kuliah' => 'Pemrograman Mobile','mahasiswa' => [
                    ['nama' => 'Muhammad Soleh','nilai' => 78],
                    ['nama' => 'Jujun Junaedi','nilai' => 85],
                    ['nama' => 'Mamat Alkatiri','nilai' => 90],
                    ['nama' => 'Ubay Holin','nilai' => 87],
                    ['nama' => 'Fadillah','nilai' => 95]
                ]
            ],
            [
                'nama' => 'Yaris Riyadi Yusuf','mata_kuliah' => 'Pemrograman Web','mahasiswa' => [
                    ['nama' => 'Alfred McTomminay','nilai' => 67],
                    ['nama' => 'Bruno Kasmir','nilai' => 90],
                    ['nama' => 'Akid Hendra','nilai' => 50],
                    ['nama' => 'Dany Irawan','nilai' => 70],
                    ['nama' => 'Chandra Mega Putra','nilai' => 60],
                ]
            ]
        ];
        return view('pages.dosen', ['dosen' => $dosen]);
    }

    public function tv() {
        $tv = [
            [
                'nama' => 'Net TV',
                'jadwal_mulai' => [
                    ['judul_program' => 'Fakta +62','jam' => '07.00 WIB','tanggal_tayang' => '14 juli 2022'],
                    ['judul_program' => 'Ini Talk Show','jam' => '20.00 WIB','tanggal_tayang' => '14 juli 2022'],
                    ['judul_program' => '86','jam' => '22.00 WIB','tanggal_tayang' => '14 juli 2022'],
                ]
            ],
            [
                'nama' => 'TVRI',
                'jadwal_mulai' =>[
                    ['judul_program' => 'Jejak Islam','jam' => '04.00 WIB','tanggal_tayang' => '13 juli 2022'],
                    ['judul_program' => 'Tayo','jam' => '18.00 WIB','tanggal_tayang' => '13 juli 2022'],
                    ['judul_program' => 'Zazie','jam' => '09.00 WIB','tanggal_tayang' => '13 juli 2022'],
                ]
            ],
            [
                'nama' => 'BEINSPORT',
                'jadwal_mulai' => [
                    ['judul_program' => 'Liga Premier Inggris','jam' => '10.00 WIB','tanggal_tayang' => '11 juli 2022'],
                    ['judul_program' => 'Liga Prancis','jam' => '12.00 WIB','tanggal_tayang' => '11 juli 2022'],
                    ['judul_program' => 'Piala FA','jam' => '15.00 WIB','tanggal_tayang' => '11 juli 2022'],
                ]
            ],
            [
                'nama' => 'Ochannel',
                'jadwal_mulai' => [
                    ['judul_program' => 'Sport Update','jam' => '06.30 WIB','tanggal_tayang' => '9 juli 2022'],
                    ['judul_program' => 'Berita Terkini','jam' => '08.20 WIB','tanggal_tayang' => '9 juli 2022'],
                    ['judul_program' => 'OShop','jam' => '10.10 WIB','tanggal_tayang' => '9 juli 2022'],
                ]
            ],
            [
                'nama' => 'Indosiar',
                'jadwal_mulai' => [
                    ['judul_program' => 'Suara Hati Istri','jam' => '15.30 WIB','tanggal_tayang' => '10 juli 2022'],
                    ['judul_program' => 'Pintu Berkah','jam' => '09.30 WIB','tanggal_tayang' => '10 juli 2022'],
                    ['judul_program' => 'Mamah Dan Aa Beraksi','jam' => '03.30 WIB','tanggal_tayang' => '10 juli 2022'],
                ]
            ]
        ];

        return view('pages.tv', ['tv' => $tv]);
    }
}
