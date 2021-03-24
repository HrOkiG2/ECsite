@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <main>
        <div class="p-5">
            <h2 class="" style="text-align: center;">The Promontroy<br>３つのこだわり</h2><br>

            <div class="row">
                <div class="col-sm-6 col-xs-12 col-sm-offset-3 col-md-6 col-md-offset-3">
                    <img src="image/pickup.png" class="pickup img-thumbnail">
                </div>
                <div class="element col-sm-6 col-xs-12 col-sm-offset-3 col-md-6 col-md-offset-3">
                    <p class="elment-child">①「Simple Is Fashionable」をテーマに大人の為のおしゃれをお届けします！</p>
                    <p class="elment-child">②京都発！熟練の職人さんによるこだわりの刺繍を全ての商品に！</p>
                    <p class="elment-child">③全品送料無料！もちろん沖縄も</p>
                </div>
                
            </div>
        </div>
        
        <!--ピックアップ商品-->
        <div class="container box">
            <div>
                <h2 class="mt-3 mb-3" style="text-align: center;">ピックアップ商品</h2>
                
                @foreach($pickups as $pickup)
                <div class="row" style="height:500px; border-bottom: medium solid #ff00ff;">
                    <div class="col-lg-6 col-xs-12 col-sm-12">
                        <p class="mt-3 mb-3">
                            <img src="{{asset('image/'.$pickup->imgpath)}}" class="img-thumbnail" style="width: 100%; height:100%;">
                        </p>
                    </div>
                    <div class="col-lg-6 col-xs-12 col-sm-12" style="height: 100%;">
                        <h3 class="mt-3 mb-3">{{$pickup->product_name}}</h3>
                        <p>{{$pickup->detail}}</p>
                        <p>{{$pickup->price}}</p>
                        <p>ダミー</p>
                        <p>ダミー</p>
                        <p>ダミー</p>
                        <p>ダミー</p>
                        <p>ダミー</p>
                        <p>ダミー</p>

                        <!--カートに追加-->
                        <form action="mycart" method="POST">
                            @csrf
                            <input type="hidden" name="product" value="{{$pickup->product_id}}">
                            <input type="submit" class="btn btn-secondary btn-lg btn-block" value="カートに追加">
                        </form>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>

        <div class="conteinar">
        <!--商品一覧-->
        <h2 class="mt-3 mb-3" style="text-align: center;">商品一覧</h2>
            <div class="d-flex justify-content-center  row col-xs-12 col-sm-12 p-5">
                @foreach($datas as $data)
                <div class="card center-block" style="width: 25rem; margin:10px; text-align: center;">
                    <div class="card-img-top">
                        <img src="{{asset('image/'.$data->imgpath)}}" class="img-thumbnail"  width="100%" height="250">
                        
                    </div>
                    <div class="card-body">
                        <h3>{{$data->product_name}}</h3>
                        <h4>{{$data->price}}円</h4>
                        <br>
                        <!--商品詳細-->
                        <div class="">
                            <form action="product" method="POST" style="margin-bottom: 5px;">
                                @csrf
                                <input type="hidden" name="product" value="{{$data->product_id}}">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="詳細を見る">
                            </form>
                            
                            <!--カートに追加-->
                            <form action="mycart" method="POST">
                                @csrf
                                <input type="hidden" name="product" value="{{$data->product_id}}">
                                <input type="submit" class="btn btn-secondary btn-lg btn-block" value="カートに追加">
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                {{$datas->links()}}
            </div>
        </div>
    </main>
</div>
@endsection