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
            'status_delete' => '1',
        ]);
        Brand::create([
            'id' =>2,
            'name' => 'VietNam',
            'status_delete' => '1',

        ]);
        Brand::create([
            'id' =>3,
            'name' => 'Japan',
            'status_delete' => '1',

        ]);
        Brand::create([
            'id' =>4,
            'name' => 'France',
            'status_delete' => '1',

        ]);
    }
}
