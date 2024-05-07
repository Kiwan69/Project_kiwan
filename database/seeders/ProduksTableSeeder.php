<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk'=>'Mobil','merek'=>'Porsche','jumlah'=>'249'],
            ['nama_produk'=>'Mobil','merek'=>'BMW','jumlah'=>'660'],
            ['nama_produk'=>'Mobil','merek'=>'Mercedes benz','jumlah'=>'430'],
            ['nama_produk'=>'Mobil','merek'=>'Volkswagen','jumlah'=>'469'],
            ['nama_produk'=>'Mobil','merek'=>'Toyota','jumlah'=>'1505'],
            ['nama_produk'=>'Mobil','merek'=>'Nissan','jumlah'=>'1540'],
            ['nama_produk'=>'Mobil','merek'=>'Mazda','jumlah'=>'1130'],
            ['nama_produk'=>'Mobil','merek'=>'Wuling','jumlah'=>'1000'],
            ['nama_produk'=>'Mobil','merek'=>'Ferrari','jumlah'=>'550'],
            ['nama_produk'=>'Mobil','merek'=>'Dodge','jumlah'=>'769'],
        ];
        // masukkan ke database
        DB::table('produks')->insert($produks);
    }
}
