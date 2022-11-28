<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kriteria;
//use Faker\Factory as Faker;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //$faker = Faker::create('id_ID');
 
            Kriteria::create([
                'kode_kriteria' => 'C1',
                'nama_kriteria' => 'Rarity',
                'bobot' =>  '1',
                'ask' =>  'Seberapa penting Rarity(Tingkat Kelangkaan Karakter) bagimu dalam memilih karakter?',
            ]);
            Kriteria::create([
                'kode_kriteria' => 'C2',
                'nama_kriteria' => 'Role',
                'bobot' =>  '1',
                'ask' =>  'Seberapa penting Role atau peran Karakter (seperti DPS, Sub, Utility) dalam membentuk tim mu?',
            ]);
            Kriteria::create([
                'kode_kriteria' => 'C3',
                'nama_kriteria' => 'Weapon',
                'bobot' => '1',
                'ask' =>  'Seberapa penting Weapon atau senjata yang digunakan Karakter bagimu?',
            ]);
            Kriteria::create([
                'kode_kriteria' => 'C4',
                'nama_kriteria' => 'Element',
                'bobot' =>  '1',
                'ask' =>  'Seberapa penting Element atau Vision yang dimiliki Karakter dalam memilih Karakter tersebut?',
            ]);
    }
}
