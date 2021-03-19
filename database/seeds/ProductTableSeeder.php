<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'product_name' => 'originalTシャツ',
            'price'=>3500,
            'detail'=>'京都の老舗発！熟練の職人さんによるこだわりの刺繍が施されたオリジナルTシャツです',
            'imgpath'=>'shirt.JPG'
        ]);
        DB::table('products')->insert([
            'product_name' => 'only cap',
            'price'=>2700,
            'detail'=>'こだわりは生地の手触り！どんなときでも身につけたくなるアイテムに仕上げました',
            'imgpath'=>'cap.JPG'
        ]);
        DB::table('products')->insert([
            'product_name' => 'the promontroy',
            'price'=>100000,
            'detail'=>'日常におしゃれを',
            'imgpath'=>'towl.jpg'
        ]);
    }
}
