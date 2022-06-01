<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id' =>1,
            'brand_id' => '1',
            'product_category_id' => '1',
            'name' => 'Hoa Hồng Trắng',
            'description' => 'Là một loại hoa có màu trắng',
            'content' => '',
            'price' =>299000,
            'qty' => 20,
            'discount' =>19,
            'tag' => 'Clothing',
            'status' =>'1',
            'status_delete' => '1',


        ]);
        Product::create([
            'id' =>2,
            'brand_id' => '1',
            'product_category_id' => '1',
            'name' => 'Hoa Hồng Đen',
            'description' => 'Là một loại hoa có màu đen',
            'content' => '',
            'price' =>259000,
            'qty' => 15,
            'discount' =>12,
            'tag' => 'Clothing',   
            'status' =>'1',
            'status_delete' => '1',


        ]);
        Product::create([
            'id' =>3,
            'brand_id' => '2',
            'product_category_id' => '1',
            'name' => 'Hoa TuLip',
            'description' => 'Là một loại hoa đẹp',
            'content' => '',
            'price' =>1099000,
            'qty' => 15,
            'discount' =>22,
            'tag' => 'Clothing',   
            'status' =>'1',
            'status_delete' => '1',


        ]);
        Product::create([
            'id' =>4,
            'brand_id' => '3',
            'product_category_id' => '1',
            'name' => 'Hoa Anh Đào',
            'description' => 'Là một loại hoa đẹp',
            'content' => '',
            'price' =>1599000,
            'qty' => 15,
            'discount' =>15,
            'tag' => 'Clothing',  
            'status' =>'1',
            'status_delete' => '1',


        ]);
        Product::create([
            'id' =>5,
            'brand_id' => '4',
            'product_category_id' => '1',
            'name' => 'Hoa Hồng Vàng',
            'description' => 'Là một loại hoa đẹp',
            'content' => '',
            'price' =>149000,
            'qty' => 20,
            'discount' =>13,
            'tag' => 'Clothing',
            'status' =>'1',
            'status_delete' => '1',


        ]);
        Product::create([
            'id' =>6,
            'brand_id' => '1',
            'product_category_id' => '2',
            'name' => 'Hoa Giấy',
            'description' => 'Là một loại hoa đẹp',
            'content' => '',
            'price' =>499000,
            'qty' => 15,
            'discount' =>12,
            'tag' => 'Clothing',  
            'status' =>'1',
            'status_delete' => '1',


        ]);
        Product::create([
            'id' =>7,
            'brand_id' => '2',
            'product_category_id' => '1',
            'name' => 'Hoa Cẩm Tú Cầu',
            'description' => 'Là một loại hoa đẹp',
            'content' => '',
            'price' =>599000,
            'qty' => 15,
            'discount' =>12,
            'tag' => 'Clothing',  
            'status' =>'1',
            'status_delete' => '1',


        ]);
        Product::create([
            'id' =>8,
            'brand_id' => '4',
            'product_category_id' => '1',
            'name' => 'Hoa Trà',
            'description' => 'Là một loại hoa đẹp',
            'content' => '',
            'price' =>899000,
            'qty' => 15,
            'discount' =>15,
            'tag' => 'Clothing',  
            'status' =>'1',
            'status_delete' => '1',

        ]);
    }
}


     
