<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>惡名昭彰</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- AoS-->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- page css -->
    @yield('css')
    {{--
    <link rel="stylesheet" href="/css/index.css"> --}}
    <link rel="stylesheet" href="/js/nav.js">
    <link rel="stylesheet" href="/css/rwd.css">


</head>


<body>
    <nav>
        <div id="index_banner">
        
            <div id="top_nav">
                <div class="container-fluid">
                    <div id="member" class="col-1 col-1">會員登入</div>
                    <div id="nav_logo" class="col-2 offset-xl-4 offset-lg-2"></div>
                    <div id="buycar" class="col-1 offset-1"></div>
                    <div id="nav_contact" class="col-md-2 col-xl-1 .text-nowrap">聯絡我們</div>
                    <div id="live" class="col-2">
                        <h1 class="ml2">直播間</h1>
                    </div>
                </div>
            </div>
            <div id="bottom_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-3 middle">
                            最新消息
                        </div>
                        <div class="col-3 middle">
                            鬼滅之刃
                        </div>
                        <div class="col-3 middle">
                            流行服飾
                        </div>
                        <div class="col-3 middle">
                            運動保健
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main role="main">
        <!-- 內容放此 -->
        @yield('content')
        <hr>
    </main>

    {{-- <footer class="container">
        <p>&copy; 此頁面僅用於 全端班資料串接</p>
    </footer> --}}
    <footer>
        <div id="all_footer">
            <div id="top_footer">
            </div>
            <div id="left_footer">
                <div id="leftfooter_content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-2 whitecolor offset-1">保固與服務</div>
                            <div class="col-2 whitecolor">退換貨相關</div>
                            <div class="col-3 whitecolor">尋找或購買商品</div>
                            <div class="col-2 whitecolor">其他</div>
                            <div class="col-2 whitecolor">聯絡我們</div>
                        </div>
                    </div>
                    <div id="footer_logo" class="offset-1"></div>
                    <div id="copyright">
                        <p>©練習使用</p>
                    </div>
                </div>
            </div>
            <div id="right_footer">
                <a href="#">
                    <div id="gototop" class="">跳至置頂
                        <div id="gototop_photo">
                        </div>
                    </div>
                </a>
                <div id="rightfooter_content">
                    <h3>追蹤我們</h3>
                    <div class="continer">
                        <div id="row_height" class="row">
                            <div class="icon col-1">

                            </div>
                            <div class="icon image1 col-1"></div>
                            <div class="icon col-1"></div>
                            <div class="icon col-1"></div>
                        </div>
                        <div class="row">
                            <div class="phone ">電話 (02) 2601-3998 </div>
                            <div class="serve offset-1">服務時間：12:00~21:00</div>
                            <div class="ig">IG:https://www.instagram.com/Notorious_Taiwan/</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    @yield('js')
    {{--
    <!-- swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- page js -->
    <script src="./js/index.js"></script> --}}
</body>

</html>
