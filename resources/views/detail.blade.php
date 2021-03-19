@extends('layouts.app')

@section('cart')
<div class="conteinar-flluid">
<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
        @foreach($details as $detail)
    <img src="{{asset('image/'.$detail->imgpath)}}" class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$detail->product_name}}</h5>
        <p class="card-text">{{$detail->detail}}</p>
        <p class="card-text">{{$detail->price}}</p>
        @endforeach
        <!--カートに追加-->
        <form action="mycart" method="POST">
            @csrf
            <input type="hidden" name="product" value="{{$detail->product_id}}">
            <input type="submit" class="btn btn-secondary btn-lg btn-block" value="カートに追加">
        </form>
        <a href="{{ url('/') }}" class="btn btn-info btn-lg btn-block">商品一覧を見に行く</a>
      </div>
    </div>
  </div>
</div>
</div>
fasfdjlaf;a
<!--
ここに商品の詳細を書いていく。
このページとcartページは似ているが、顧客が商品に食いつくような情報を記載。
どこで作られたのか。この商品の最大の利点。訴求ページ、LPのようなイメージ。
-->
@endsection