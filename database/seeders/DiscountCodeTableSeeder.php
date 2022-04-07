<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\DiscountCode;
class DiscountCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiscountCode::create([
            'id'=> 1,
            'name' => 'Giảm 10%',
            'description' => 'Giảm 10% cho mọi đơn hàng',
            'discount' => '10',
            'code' => 'ABCDEF',
            'start_day' => '2022-03-29 13:38:48',
            'end_day' => '2022-03-30 13:38:48'
        ]);
    }
}
