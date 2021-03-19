@extends('layouts.app')
@section('cart')
<h2>{{$user_name}}さん、ご購入ありがとうございます</h2>
<p>ご登録いただいているメールアドレスに決算情報をお送り致します。</p>

<h2>
    <a href="{{ url('/') }}">商品一覧を見に行く</a>
</h2>
@endsection