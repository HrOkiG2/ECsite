<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Null_;

class Product extends Model
{
    //テーブル名の指定
    protected $table='products';

    //主キーの設定
    protected $primarykye='product_id';

    public function Product_list(){
        //pickupアイテム以外を取得。
        $lists= DB::table('products')
        ->where('pickup',Null)
        ->paginate(6);
        //$lists=DB::select('SELECT * FROM products WHERE pickup IS NULL');
        return $lists;
    }

    public function pickup_Product(){
        //pickupアイテムを取得
        $pickups=DB::select('SELECT * FROM products where pickup IS NOT NULL');
        return $pickups;
    }
}
