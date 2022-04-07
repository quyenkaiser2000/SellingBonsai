<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'id' =>1,
            'name' => 'Iceland',
        ]);
        Brand::create([
            'id' =>2,
            'name' => 'VietNam',
        ]);
        Brand::create([
            'id' =>3,
            'name' => 'Japan',
        ]);
        Brand::create([
            'id' =>4,
            'name' => 'France',
        ]);
    }
}
