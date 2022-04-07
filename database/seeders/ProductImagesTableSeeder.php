<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;
class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductImage::create([
            'id' =>1,
            'product_id' =>'1',
            'img' => 'hoahongtrang.jpg',
        ]);
        ProductImage::create([
            'id' =>2,
            'product_id' =>'1',
            'img' => 'hoahongtrang1.jpg',
        ]);
        ProductImage::create([
            'id' =>3,
            'product_id' =>'1',
            'img' => 'hoahongtrang2.jpg',
        ]);
        ProductImage::create([
            'id' =>4,
            'product_id' =>'1',
            'img' => 'hoahongtrang3.jpg',
        ]);
        ProductImage::create([
            'id' =>5,
            'product_id' =>'1',
            'img' => 'hoahongtrang4.jpg',
        ]);
        ProductImage::create([
            'id' =>6,
            'product_id' =>'1',
            'img' => 'hoahongtrang5.jpg',
        ]);
        ProductImage::create([
            'id' =>7,
            'product_id' =>'1',
            'img' => 'hoahongtrang6.jpg',
        ]);
        ProductImage::create([
            'id' =>8,
            'product_id' =>'2',
            'img' => 'hoahongden.jpg',
        ]);
        ProductImage::create([
            'id' =>9,
            'product_id' =>'2',
            'img' => 'hoahongden1.jpg',
        ]);
        ProductImage::create([
            'id' =>10,
            'product_id' =>'2',
            'img' => 'hoahongden2.jpg',
        ]);
        ProductImage::create([
            'id' =>11,
            'product_id' =>'2',
            'img' => 'hoahongden3.jpg',
        ]);
        ProductImage::create([
            'id' =>12,
            'product_id' =>'2',
            'img' => 'hoahongden4.jpg',
        ]);
        
        ProductImage::create([
            'id' =>13,
            'product_id' =>'2',
             'img' => 'hoahongden5.jpg',
        ]);
        

        ProductImage::create([
            'id' =>14,
            'product_id' =>'3',
             'img' => 'hoatuliptrang.jpg',
        ]);

        ProductImage::create([
            'id' =>15,
            'product_id' =>'4',
             'img' => 'hoaanhdao.jpg',
        ]);
        ProductImage::create([
            'id' =>16,
            'product_id' =>'5',
             'img' => 'hoahongvang.jpg',
        ]);
        ProductImage::create([
            'id' =>17,
            'product_id' =>'6',
             'img' => 'hoagiay.jpg',
        ]);
        ProductImage::create([
            'id' =>18,
            'product_id' =>'7',
             'img' => 'hoacamtucau.jpg',
        ]);
        ProductImage::create([
            'id' =>19,
            'product_id' =>'8',
             'img' => 'hoatra.jpg',
        ]);
        ProductImage::create([
            'id' =>20,
            'product_id' =>'2',
             'img' => '',
        ]);



        ProductImage::create([
            'id' =>21,
            'product_id' =>'3',
             'img' => 'hoatuliptrang1.jpg',
        ]);
        ProductImage::create([
            'id' =>22,
            'product_id' =>'3',
             'img' => 'hoatuliptrang2.jpg',
        ]);
        ProductImage::create([
            'id' =>23,
            'product_id' =>'3',
             'img' => 'hoatuliptrang3.jpg',
        ]);
        ProductImage::create([
            'id' =>24,
            'product_id' =>'3',
             'img' => 'hoatuliptrang4.jpg',
        ]);
        ProductImage::create([
            'id' =>25,
            'product_id' =>'3',
             'img' => 'hoatuliptrang5.jpg',
        ]);
        ProductImage::create([
            'id' =>26,
            'product_id' =>'3',
             'img' => 'hoatuliptrang6.png',
        ]);
    }
}
