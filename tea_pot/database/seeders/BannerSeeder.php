<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Banner::create([
            'image_banner' => 'Sparkling Steps 1.png',
        ]);
        Banner::create([
            'image_banner' => 'Secretum Secretorum 1.png',
        ]);
        Banner::create([
            'image_banner' => 'Epitome Invocation 5.png',
        ]);
    }
}
