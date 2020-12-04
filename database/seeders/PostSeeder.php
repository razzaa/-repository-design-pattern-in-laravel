<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class PostSeeder extends Seeder
{

    public function run()
    {
        DB::table('posts')->insert([
            [
               'name'       =>      'Ali Raza',
               'email'      =>      'ali@gmail.com',
               'address'    =>      'Sadiq Abad'
            ],
            [
                'name'      =>      'Rizwan',
                'email'     =>      'rizwan@gmail.com',
                'address'   =>      'pusrur'
            ],
            [
                'name'      =>       'Anish',
                'email'     =>       'anish@gmail.com',
                'address'   =>       'Lahore'
            ],
            [
                'name'      =>       'Shahzad',
                'email'     =>       'shahzad@gmail.com',
                'address'   =>       'swat'
            ],
            [
                'name'      =>       'Muzamil Ikram',
                'email'     =>       'muzamil@gmail.com',
                'address'   =>       'Faisal Abad'
            ],
            [
                'name'      =>        'Salman',
                'email'     =>        'salman@gmail.com',
                'address'   =>        'Lahore'
            ]
        ]);
    }
}
