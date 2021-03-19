@extends('layouts.app')
@section('cart')
<div class="container">
    <h2 style="margin-top: 50px;">
        {{$message}}
    </h2>
    <div class="card mb-3" style="max-width: 1000px;">
        <div class="row no-gutters">
            @foreach($a as $c)
                <div class="col-md-4 img-thumbnail">
                    <img class="bd-placeholder-img" width="100%" height="300"src="/image/{{$c->imgpath}}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title" style="text-align: center;">{{$c->product_name}}</h3>
                        <p class="card-text">{{$c->detail}}</p>
                        <p class="card-text" style="text-align: right;">{{$c->price}}円</p>
            @endforeach
                    <h2>
                        <a href="/display" class="btn btn-primary btn-lg btn-block">カートを見に行く</a>
                    </h2>

                    <h2>
                        <a href="{{ url('/') }}" class="btn btn-secondary btn-lg btn-block">商品一覧を見に行く</a>
                    </h2>
                    </div>
                </div>
        </div>
    </div>
</div>
<!--
このページは「この商品がカートに入ったよ」と伝えるためのページ。
このECサイトに商品の数が多くなると連続でカートに入れたい人もいると想うので、一つの商品をカートに入れるたびにこのページに飛ぶのはストレスが溜まる可能性もあるので、もしかするとこのページはいらないかもしれない。
その際はcontrollerでcartsテーブルに保存するだけでいい。
-->
@endsection