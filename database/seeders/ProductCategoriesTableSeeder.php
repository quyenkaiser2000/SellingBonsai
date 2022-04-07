<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;
class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'id' =>1,
            'name' => 'Các loại hoa',
            'img' => 'hoa.jpg'
        ]);
        ProductCategory::create([
            'id' =>2,
            'name' => 'Bonsai',
            'img' => 'bonsai.jpg'

        ]);
        ProductCategory::create([
            'id' =>3,
            'name' => 'Cây lâu năm',
            'img' => 'caylaunam.jpg'

        ]);
        ProductCategory::create([
            'id' =>4,
            'name' => 'Cây trong nhà',
            'img' => 'caytrongnha.jpg'

        ]);
        
        
    }
}
