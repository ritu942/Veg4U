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
                'image' => '../public/images/products/anar_fruit.jpg',
                'name'  => 'Pomegranate',
                'category_id' => 1,
                'weight' => 1,
                'price' => 101
            ],

            [
                'image' => '../public/images/products/mangos_fruit.jpg',
                'name'  => 'Mangoes',
                'category_id' => 1,
                'weight' => 1,
                'price' => 60
            ],

            [
                'image' => '../public/images/products/oranges_fruit.jpg',
                'name'  => 'Oranges',
                'category_id' => 1,
                'weight' => 1,
                'price' => 40
            ],

            [
                'image' => '../public/images/products/pineapples_fruit.jpg',
                'name'  => 'Pineapples',
                'category_id' => 1,
                'weight' => 1,
                'price' => 85
            ],

            [
                'image' => '../public/images/products/strawberry_fruit.jpg',
                'name'  => 'Strawberry',
                'category_id' => 1,
                'weight' => 1,
                'price' => 201
            ],

            [
                'image' => '../public/images/products/beans_vege.jpg',
                'name'  => 'Beans',
                'category_id' => 2,
                'weight' => 1,
                'price' => 40
            ],

            [
                'image' => '../public/images/products/cabbage_vege.jpg',
                'name'  => 'Cabbage',
                'category_id' => 2,
                'weight' => 1,
                'price' => 21
            ],

            [
                'image' => '../public/images/products/potatos_vege.jpg',
                'name'  => 'Potatoes',
                'category_id' => 2,
                'weight' => 1,
                'price' => 21
            ],

            [
                'image' => '../public/images/products/spnich_vege.jpg',
                'name'  => 'Spnich',
                'category_id' => 2,
                'weight' => 1,
                'price' => 21
            ],

            [
                'image' => '../public/images/products/tomatos_vege.jpg',
                'name'  => 'Tomatoes',
                'category_id' => 2,
                'weight' => 1,
                'price' => 40
            ],

        ]);
    }
}
