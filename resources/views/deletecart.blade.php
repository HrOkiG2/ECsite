@extends('layouts.app')
@section('cart')
    
    
{{$message}}

<h2>
    <a href="/display">カートを見に行く</a>
</h2>
<h2>
    <a href="{{ url('/') }}">商品一覧を見に行く</a>
</h2>
@endsection