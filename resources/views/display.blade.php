@extends('layouts.app')
@section('cart')
<div class="conteinar-fluid">
    
{{$message}}
    <h2>{{$user_name}}さんのカート</h2>
    @foreach($infoCart as $deploy)
    <div class="card" style="width: 18rem; margin:10px;">
        <div class="card-image-top">
            <img src="/image/{{$deploy->imgpath}}" width="100%" height="180">
        </div>
        <div class="card-body">
            {{$deploy->product_name}}
            {{$deploy->detail}}
            {{$deploy->price}}
        </div>
        <!--削除ボタン-->
        <form action="/mycart" method="GET">
            @csrf
            <input type="hidden" name="delete" value="{{$deploy->id}}">
            <input type="submit" value="削除">
        </form>
        <!--購入ボタン-->
        <form action="/purchase" method="POST">
            @csrf
            <input type="hidden" name="purchase" value="{{$deploy->id}}">
            <input type="submit" value="購入">
        </form>
    </div>
    @endforeach

    <p>合計個数：{{$quantity}}</p>
    <p>合計金額：{{$sum}}円</p>
    <h2>
        <a href="{{ url('/') }}">商品一覧を見に行く</a>
    </h2>
</div>
@endsection