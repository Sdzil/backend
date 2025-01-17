<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>全端班資料串接範例</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- page css -->
    @yield('css')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />


</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">台灣秘境</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">首頁</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news">最新消息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">商品</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact_us">來信推薦</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact_us_group">聯絡表單</a>
                </li>


                {{-- <li class="nav-item">
                    <a class="nav-link" href="/news.html">最新消息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact_us.html">來信推薦</a>
                </li> --}}
            </ul>

            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i></a>
                </li>
                <i class="icon-shopping-cart">
                    <span id="cartTotalQuantity" class="text-white">
                        {{-- {{ \Cart::getTotalQuantity() }} 沒指定人的寫法 --}}
                        {{-- 指定對象的PHP原生寫法 --}}
                        @guest
                            0
                        @else
                        <?php
                            $userId = auth()->user()->id;
                            $cartTotalQuantity = \Cart::session($userId)->getTotalQuantity();
                            echo $cartTotalQuantity;
                        ?>
                        @endguest
                    </span>
                </i>



                <li>
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> --}}
        </div>
    </nav>

    <main role="main">
        <!-- 內容放此 -->
        @yield('content')
        <hr>
    </main>

    <footer class="container">
        <p>&copy; 此頁面僅用於 全端班資料串接</p>
    </footer>


    <!-- bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"
        integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ=="
        crossorigin="anonymous"></script>


    @yield('js')
    {{--
    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- page js -->
    <script src="./js/index.js"></script> --}}
</body>

</html>
