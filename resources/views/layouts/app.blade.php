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
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">

    <!-- <link href=" https://unpkg.com/sanitize.css " rel="stylesheet " /> -->
    <title>The Promontroy</title>
</head>

<body>
    <header>
        <div class="humberger">
            <div class="menu">
                <input type="checkbox" name="" id="input">
                <div class="label_line">
                    <!-- divタグで囲み、サイズ指定できるようにする -->
                    <label for="input" class="line_box">
                        <!-- 三本線の為のdivタグ -->
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </label>
                </div>

                <label for="input" class="back">
                    <div></div>
                </label>

                <div class="nav_content">
                    <nav>
                        <ul>
                            @if(Auth::check())
                            <li class="ist">{{ Auth::user()->name }}さん,ようこそ！</li>

                            <li class="list">
                                <a href="/display">
                                    <img src="image/cart.png" class="nav_img">
                                    <span>カートを見る</span>
                                </a>
                            </li>
                            <li class="list">
                                <a class="" href="{{ route('logout') }}">
                                    <img src="image/logouto.png" class="nav_img">
                                    <span>ログアウト</span>
                                </a>
                            </li>
                            @else
                            <li class="list">
                                <a href="{{ route('login') }}">
                                    <img src="image/login.png" alt="login" class="nav_img">
                                    <span>ログイン</span>
                                </a>
                            </li>
                            <li class="list">
                                <a href="{{ route('register') }}">
                                    <img src="image/register.png" class="nav_img">
                                    <span>新規会員登録</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>

            <h1>
                <a class="top_back text-monospace d-flex" href="{{ url('/') }}">
                    {{ config('app.name', 'The　Promontroy') }}
                </a>
            </h1>
        </div>
    </header>
    ```

    <!--content-->
    @yield('content')
    @yield('cart')

    <div class="conteinar-fulid" style="background-color: skyblue; height:150px;">

    </div>
</body>

</html>