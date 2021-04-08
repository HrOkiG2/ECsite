@extends('layouts.app')
@section('content')
<div class="policy">
            <h2>ThePromontroy<br>3つのこだわり</h2>
            <div class="commit">
                <div class="plan">
                    <img src="image/pickup.png" alt="pickup" class="policy_img">
                </div>
                <div class="policy_content">
                    <p>
                        ①「Simple Is Fashionable」をテーマに大人の為のおしゃれをお届けします！
                    </p>
                    <p>
                        ②京都発！熟練の職人さんによるこだわりの刺繍を全ての商品に！
                    </p>
                    <p>
                        ③全品送料無料！もちろん沖縄も!
                    </p>
                </div>
            </div>
        </div>
<!--ピックアップ商品-->
<div class="pickup">
            <h2>おすすめアイテム</h2>
            @foreach($pickups as $pickup)
                <div class="pickup_item">
                    <div class="pick">
                        <img src="{{asset('image/'.$pickup->imgpath)}}" alt="" class="pickup_img">
                    </div>
                    
                    <div class="pickup_cotent_box">
                        <div class="pickup_content">
                            <p>{{$pickup->detail}}</p>
                            <div class="product_parts">
                                <h3>{{$pickup->product_name}}</h3>
                                <p class="price">{{$pickup->price}}</p>
                            </div>
                        </div>
                        <div class="pickup_button">
                            <form action="mycart" method="POST">
                                @csrf
                                <button type="submit" value="{{$pickup->product_id}}" name="product" class="in_cart">
                                    カートに入れる
                                </button>
                                
                                <button type="submit" value="" name="product_detail" class="product_detail">
                                    商品の詳細を見る
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>

<!--商品一覧-->
<div class="product">
            <h2>商品一覧</h2>
            <div class="card_box">
                @foreach($datas as $data)
                <div class="product_card">
                    <img src="{{asset('image/'.$data->imgpath)}}" alt="" class="product_img">
    
                    <div class="product_parts">
                        <h3>{{$data->product_name}}</h3>
                        <p class="price">{{$data->price}}</p>
                    </div>
    
                    
                    <form action="" method="POST">
                        <div class="product_button_box">
                            <button type="submit" value="" name="product_button" class="product_button">
                                商品の詳細を見る
                            </button>
                        </div>
                    </form>
                
                </div>
                @endforeach
                {{$datas->links()}}
            </div>
        </div>

<script src="{{ asset('/js/sample.js') }}"></script>
@endsection