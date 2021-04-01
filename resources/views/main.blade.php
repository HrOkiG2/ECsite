@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="commitment">
        <h2 class="pt-5 pb-5" style="text-align: center;">The Promontroy<br>３つのこだわり</h2><br>
        <div class="contents">
            <div class="row">
                <div class="element col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
                    <img src="{{asset('image/pickup.png')}}" class="img-thumbnail">
                </div>
                <div class="element　col-xs-12 col-sm-12 col-md-12 col-lg-6 ml-2">
                    <p class="elment-child">①「Simple Is Fashionable」をテーマに大人の為のおしゃれをお届けします！</p>
                    <p class="elment-child">②京都発！熟練の職人さんによるこだわりの刺繍を全ての商品に！</p>
                    <p class="elment-child">③全品送料無料！もちろん沖縄も</p>
                </div>

            </div>
        </div>
    </div>
</div>
<!--ピックアップ商品-->
<div class="container-fulid">
    <div class="pickup">
        <h2 class="pt-5 pb-5" style="text-align: center;">ピックアップ商品</h2>
        @foreach($pickups as $pickup)
        <li class="contents">
            <div class="row a　d-flex">
                <div class="col-lg-6 col-xs-12 col-sm-12 mt-3 mb-3">
                    <img src="{{asset('image/'.$pickup->imgpath)}}" class="img-thumbnail" style="width: 80%; margin:0 auto;">
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <h3 class="mt-3 mb-3">{{$pickup->product_name}}</h3>
                    <p>{{$pickup->detail}}</p>
                    <p>{{$pickup->price}}</p>

                    <!--カートに追加-->
                    <form action="mycart" method="POST" class="pb-5">
                        @csrf
                        <input type="hidden" name="product" value="{{$pickup->product_id}}">
                        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="カートに追加">
                    </form>
                </div>
            </div>
        </li>
        @endforeach
    </div>
</div>

<!--商品一覧-->
<div class="conteinar-fulid list">
    
        <h2 class="pt-5 pb-5" style="text-align: center;">商品一覧</h2>
        <div class="d-flex justify-content-center">
            {{$datas->links()}}
        </div>
    
</div>

<script src="{{ asset('/js/sample.js') }}"></script>
@endsection