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
            'pickup'=>1,
            'price'=>3500,
            'detail'=>'京都の老舗発！熟練の職人さんによるこだわりの刺繍が施されたオリジナルTシャツです',
            'imgpath'=>'shirt.JPG'
        ]);
        DB::table('products')->insert([
            'product_name' => 'only cap',
            'pickup'=>1,
            'price'=>2700,
            'detail'=>'こだわりは生地の手触り！どんなときでも身につけたくなるアイテムに仕上げました',
            'imgpath'=>'cap.JPG'
        ]);
        DB::table('products')->insert([
            'product_name' => 'the promontroy',
            'pickup'=>1,
            'price'=>100000,
            'detail'=>'日常におしゃれを',
            'imgpath'=>'towl.jpg'
        ]);
        DB::table('products')->insert([
            'product_name' => 'paperBag',
            'price'=>100,
            'detail'=>'いろいろな物が入ります',
            'imgpath'=>'bag.png'
        ]);
        DB::table('products')->insert([
            'product_name' => '大人の革靴',
            'price'=>1000,
            'detail'=>'大人の男なら必須のアイテム',
            'imgpath'=>'boot.png'
        ]);
        DB::table('products')->insert([
            'product_name' => 'シンプルな腕時計',
            'price'=>15000,
            'detail'=>'小さな主張でさりげないおしゃれを',
            'imgpath'=>'watche.png'
        ]);
        DB::table('products')->insert([
            'product_name' => 'のび太のメガネ',
            'price'=>200000,
            'detail'=>'あののび太が愛用していたモデルのメガネです',
            'imgpath'=>'glass.png'
        ]);
        DB::table('products')->insert([
            'product_name' => '思い出のカメラ',
            'price'=>40000,
            'detail'=>'高画質！思い出の瞬間を切り抜きます',
            'imgpath'=>'camera.jpg'
        ]);
        DB::table('products')->insert([
            'product_name' => '果物の詰め合わせ',
            'price'=>300,
            'detail'=>'現代人に足りていないビタミン類を摂取できます',
            'imgpath'=>'fulit.png'
        ]);
        DB::table('products')->insert([
            'product_name' => 'switch',
            'price'=>2000,
            'detail'=>'大人も子供も仲良く遊べる伝説のゲーム',
            'imgpath'=>'switch.png'
        ]);
        DB::table('products')->insert([
            'product_name' => 'となりのトトロ',
            'price'=>4000,
            'detail'=>'日本人に愛されて30年！永久不滅の愛されモンスター',
            'imgpath'=>'totoro.jpg'
        ]);
    }
}
