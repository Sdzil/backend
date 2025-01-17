<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')



</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        {{-- @auth --}}
                            @if (Auth::user() && (Auth::user()->role == 'admin' || Auth::user()->role == 'super_admin'))


                            <li class="nav-item m-1">
                                <a class="nav-link" href="#">SEO管理(有時間再說)</a>
                            </li>
                            <li class="nav-item dropdown m-1">
                                {{-- <a class="nav-link" href="#">首頁形象管理</a> --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="caret">首頁形象管理</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        Banner
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        有需要改動的頁面的Content
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        總之不知道哪邊的內文
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" href="/admin/news">最新消息管理</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" href="/admin/events">活動管理</a>
                            </li>

                            <li class="nav-item dropdown m-1">
                                {{-- <a class="nav-link" href="/admin/item_types">產品類型管理</a> --}}
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span class="caret">產品類別管理</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/admin/productTypes/1">
                                        第一層
                                    </a>
                                    <a class="dropdown-item" href="/admin/productTypes/2">
                                        第二層
                                    </a>
                                    <a class="dropdown-item" href="/admin/productTypes/3">
                                        第三層
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" href="/admin/items">產品管理</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" href="/admin/contacts">聯絡表單管理</a>
                            </li>
                            <li class="nav-item m-1">
                                <a class="nav-link" href="/admin/orders">訂單管理</a>
                            </li>
                            @if (Auth::user() && Auth::user()->role == 'super_admin')

                                <li class="nav-item m-1">
                                    <a class="nav-link" href="/admin/accounts">帳號管理</a>
                                </li>

                            @endif
                            @endif
                        {{-- @endauth --}}

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>

</html>
