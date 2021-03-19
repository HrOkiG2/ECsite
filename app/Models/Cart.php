<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $guarded = ['id'];

    public function AddCart(Request $request){
        $product_id=$request->product;
        $subjects=DB::table('products')->where('product_id','=',$product_id)->get(['product_id','product_name','price','detail','imgpath']);
        //dd($subjects);
        return $subjects;
    }

    public function infoCart(){
        $user_id=Auth::id();

        $infoCart=DB::table('carts')
        ->join('products','carts.product_id','=','products.product_id')
        ->where('user_id',$user_id)
        ->get();

        return $infoCart;
    }

    public function a(Request $request){
        $user_id=Auth::id();
        $delete=$request->delete;
        dd($delete);
        return $delete;
    }
}

