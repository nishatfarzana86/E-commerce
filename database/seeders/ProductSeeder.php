<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'The Outsider',
                'price'=>'$200',
                'description'=>'The Outsider- A Stephen King\'s Classic Book',
                'category'=>'Classic',
                'gallery'=>'https://bit.ly/3s3908C',
            ],

            [
                'name'=>'Misery',
                'price'=>'$150.99',
                'description'=>'Misery- A Stephen King\'s Classic Book',
                'category'=>'Classic',
                'gallery'=>'https://bit.ly/3g1Ip9L',
            ],

            [
                'name'=>'The Institute',
                'price'=>'$189.99',
                'description'=>'The Institute- A Stephen King\'s Classic Book',
                'category'=>'Classic',
                'gallery'=>'https://bit.ly/3dI1XwY',
            ],

            [
                'name'=>'IT',
                'price'=>'$189.99',
                'description'=>'IT- A Stephen King\'s Classic Book',
                'category'=>'Classic',
                'gallery'=>'https://bit.ly/3fW9evW',
            ]
            
        ]); 
    }
}
