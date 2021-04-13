<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \App\Models\Cart;
use \App\Models\Product;
use Illuminate\Support\ViewErrorBag;

class ShopController extends Controller
{
    public function ShowProduct(Product $product){
        $datas=$product->Product_list();
        // dd($datas);

        $pickups=$product->pickup_Product();
        // dd($pickups);
        return view('main',compact('datas','pickups'));
    }

    public function ShowCart(Request $request){

        $product_id=$request->product_detail;
        // dd($product_id);

        $details=DB::select('SELECT * FROM products WHERE product_id=:product_id',[$product_id]);
        // dd($details);

        return view('detail',compact('details'));
    }

    public function CartDisplay(Cart $cart){        
        $user_id=Auth::id();

        //カート内の商品情報
        $infoCart=$cart->infoCart();

        //合計金額
        $sum=$infoCart->sum('price');

        //合計個数
        $quantity=$infoCart->count('product_id');

        if($infoCart->isNotEmpty()){
            $message="購入する場合は購入ボタンでお買い物を進めてください";
        }else{
            $message="カートには商品がありません";
        }

        //ログイン者の名前
        $user_name=Auth::user()->name;

        return view('display',compact('user_name','infoCart','message','sum','quantity'));
    }

    public function AddCart(Request $request,Cart $cart){
        $product_id=$request->product;
        $user_id=Auth::id();

        //formから送られてきたデータをproduct_idカラムに挿入
        $cart->product_id=$product_id;
        //ログイン者のIDをuser_idカラムに挿入
        $cart->user_id=$user_id;
        //実行
        $cart->save();

        $a=$cart->AddCart($request);
        if($a){
            $message="こちらの商品がカートに追加されました";
        }
        
        return view('cart',compact('a','message'));
    }

    public function deleteCart(Request $request){
        $user_id=Auth::id();
        $delete=$request->delete;

        $message="一つの商品がカートから削除されました";
        
        DB::table('carts')->where('id','=',$delete)->delete();
        //もしカート内に複数ある同一商品をdeleteしたい場合はFORMからproduct_idを持ってきてwhere句で比較する
        return view('/deletecart',compact('message'));
    }

    public function Purchase(Request $request){
        //ログイン者の名前
        $user_name=Auth::user()->name;

        //cartsテーブルから購入した商品を削除する
        $purchase=$request->purchase;
        //dd($purchase);
        DB::table('carts')->where('id','=',$purchase)->delete();
        return view('/purchase',compact('user_name'));
    }
}
