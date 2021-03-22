<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>The Promontroy</title>
</head>
<body>
    <div class="container-fulid">
        <header class="header">
            <nav class="navbar navbar-expand-xl navbar-light bg-light">
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navmenu1"
                    aria-controls="navmenu1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu1">
                    @if(Auth::check())
                        <div class="navbar-nav">
                            <!--左寄せ-->
                            <div class="navbar-left">
                                    <a href="/display">
                                        <img src="image/cart.png" class="navf"> 
                                        <p>カートを見る</p>
                                    </a>
                                <a class="" href="{{ route('logout') }}">
                                    <img><!--写真を入れるｆヵｊｆ；あｊはｇ；あｇ；おくぇｒじょｇｐｑひどあほ；ｇ-->
                                    <p>ログアウト</p>
                                </a>
                            </div>
                            <!--右寄せ-->
                            <div class="navbar-right">
                                {{ Auth::user()->name }}さん,ようこそ！
                            </div>
                    @else
                            <a href="{{ route('login') }}">
                                <img src="image/login.png" class="navf">
                                <p>ログイン</p>
                            </a>

                            <a href="{{ route('register') }}">
                                <img src="image/register.png" class="navf">
                                <p>新規会員登録</p>
                            </a>
                        </div>
                    @endif
                </div>
                    
            </nav>

            <h1 class="title">
                <a class="top_back" href="{{ url('/') }}">
                        {{ config('app.name', 'The　Promontroy') }}
                </a>
            </h1>
        </header>
    </div>
    <!--content-->
    @yield('content')
    @yield('cart')
    
    <div class="conteinar-fulid" style="background-color: skyblue; height:150px;">
        
    </div>
</body>
</html>