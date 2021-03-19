<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    //テーブル名の指定
    protected $table='products';

    //主キーの設定
    protected $primarykye='product_id';
}
