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
                'image' => '../public/images/products/strawberry.jpg',
                'name'  => 'Strawberries',
                'category_id' => 5,
                'weight' => 1,
                'price' => 201
            ],
            // [
            //     'image' => 'https://www.thespruce.com/thmb/kFaENoz7H7wEK-Ivc2OmPTGCWUs=/434x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/grow-vegetables-without-full-sun-4150681-06-4fcbc9e0f7694fbd96ff02cd231a5033.jpg',
            //     'name'  => 'Cabbage',
            //     'category_id' => 6,
            //     'weight' => 1,
            //     'price' => 21
            // ]
        ]);
    }
}
