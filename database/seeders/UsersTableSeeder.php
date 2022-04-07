<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([ 
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123123123'),
                'avatar' => null,
                'role_id' => 1,
                'address' => null,
                'phone' =>null,
                'birthday' => null,
                'gender' => null,
            
        ]); 
        User::create([ 
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123123123'),
            'avatar' => null,
            'role_id' => 2,
            'address' => null,
            'phone' =>null,
            'birthday' => null,
            'gender' => null,
        
    ]); 
    }
}
