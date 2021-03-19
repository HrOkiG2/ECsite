@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @guest
                        <!--Authがある時-->
                        <p>ログアウトしました</p>
                        <br>
                        <p>ご来店いただきありがとうございました</p>
                    @else
                        <!--Authがない時-->
                        <p>ログインに成功しました!</p>
                        <p>ようこそ！ThePromontroyへ！</p>
                        <br>
                        <a href="/">商品一覧を見に行く</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
