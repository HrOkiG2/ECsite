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
        <div class="fixed-top">
        <!--右寄せ-->
                
            <nav class="navbar  navbar-light bg-light">
                <button class="navbar-toggler" type="button"
                    data-toggle="collapse"
                    data-target="#navmenu1"
                    aria-controls="navmenu1"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button><p class="ml-auto">{{ Auth::user()->name }}さん,ようこそ！</p>
                <div class="collapse navbar-collapse" id="navmenu1">
                    @if(Auth::check())
                        <div class="navbar-nav d-flex">
                            <!--左寄せ-->
                            <div class="">
                                <li>
                                    <a href="/display">
                                        <img src="image/cart.png" class="navf"> 
                                        <span>カートを見る</span>
                                    </a>
                                </li>
                                <br>
                                <li>
                                    <a class="" href="{{ route('logout') }}">
                                        <img src="image/logouto.png" class="navf">
                                        <span>ログアウト</span>
                                    </a>
                                </li>
                                
                            </div>
                            
                    @else
                            <a href="{{ route('login') }}">
                                <img src="image/login.png" class="navf">
                                <span>ログイン</span>
                            </a>
                            <br>
                            <a href="{{ route('register') }}">
                                <img src="image/register.png" class="navf">
                                <span>新規会員登録</span>
                            </a>
                        </div>
                    @endif
                </div>
                    
            </nav>
        </div>
        <header class="header">
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