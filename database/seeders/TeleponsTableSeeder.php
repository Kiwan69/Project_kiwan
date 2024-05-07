<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon'=>'081221400609','pengguna_id'=>1],
            ['nomor_telepon'=>'081221290384','pengguna_id'=>2],
            ['nomor_telepon'=>'081840059887','pengguna_id'=>3],
            ['nomor_telepon'=>'087582097850','pengguna_id'=>4],
            ['nomor_telepon'=>'080928736763','pengguna_id'=>5],
        ];
        // masukkan ke database
        DB::table('telepons')->insert($telepons);
    }
}
