@extends('layouts/template_group')

@section('css')
    <link rel="stylesheet" href="/css/index sass.css">
    <!-- <link rel="stylesheet" href="/js/nav.js">
    <link rel="stylesheet" href="/css/rwd.css"> -->

    {{-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"> --}}

@endsection



    @section('content')
    <video autoplay loop width="100%" controls preload>
        <source src="/images/banners/db59b3e035499a23544b7835.mp4" type="video/mp4">
    </video>
    <div id="section1">

        <div id="sectionmaue">

            <div id="leftmaue" data-aos="fade-right">

            </div>
            <div id="rightmaue">
                <div id="top_maue" data-aos="fade-left">
                    <div id="lasthover" class="mauebox textbox">
                        <p class="title">
                            流行服飾
                        </p>

                        <hr class="bottomline">
                        <p>
                            最時尚潮流的穿搭
                        </p>
                    </div>
                    <div class="mauebox flow">
                        <img class="photobox" src="https://img.notorious-2019.com/cf55db08199a4e3199456319.jpg" alt=""
                            width="100%" height="100%">

                    </div>
                </div>
                <div id="middle_maue" data-aos="fade-right">

                    <div class="mauebox textbox">
                        <p class="title">
                            流行服飾
                        </p>

                        <hr class="bottomline">
                        <p>
                            最時尚潮流的穿搭
                        </p>
                    </div>
                    <div class="mauebox flow">
                        <img class="photobox" src="https://img.notorious-2019.com/7a0ac87b43823c34384eee43.jpg" alt=""
                            width="100%" height="100%">
                    </div>
                </div>
                <div id="bottom_maue" data-aos="fade-left">
                    <div class="mauebox textbox">
                        <p class="title">
                            流行服飾
                        </p>

                        <hr class="bottomline">
                        <p>
                            最時尚潮流的穿搭
                        </p>
                    </div>
                    <div class="mauebox flow">
                        <img class="photobox" src="https://img.notorious-2019.com/c555c00a5312436531405153.jpg" alt=""
                            width="100%" height="100%">
                    </div>
                </div>

            </div>
        </div>



    </div>


    <div id="section2">

        <div id="sectioncard">
            <div class="leftbox" data-aos="zoom-in">
                <div class="card" style="width: 18rem;">
                    <img src="https://img.notorious-2019.com/519c8827544f91154448f754.jpg"
                        class="card-img-top width=100% height=100%" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>

                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://img.notorious-2019.com/519c8827544f91154448f754.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>

                </div>
                <div class="card" style="width: 18rem;">
                    <img src="https://img.notorious-2019.com/519c8827544f91154448f754.jpg" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>

                </div>
            </div>
            <div class="parallax"></div>

            <div class="rightbox" data-aos="zoom-out-up">

                <p class="boxtitle">運動保健</p>
                <p class="boxtext">專業的營養補給</p>
                <div class="photoicon">

                    <div class="icon"></div>
                    <p>強身健體</p>

                </div>


            </div>





        </div>



    </div>



    <div id="section3">

        <div id="bigcard_section">


            <div id="bigcard_title">
                最新消息
            </div>

            <div class="black_decoration"></div>

            <div id="bigcard">
                <div class="card" style="width: 30rem; height: 80%;" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://i.ytimg.com/vi/5ziJAIcdAFs/maxresdefault.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <div class="bottom_text">
                            <div class="card_date">張貼日期</div>
                            <a href="#" class="btn btn-primary">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 30rem; height: 80%;" data-aos="fade-up" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://i.ytimg.com/vi/5ziJAIcdAFs/maxresdefault.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <div class="bottom_text">
                            <div class="card_date">張貼日期</div>
                            <a href="#" class="btn btn-primary">MORE</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 30rem; height: 80%;" data-aos="fade-left" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://i.ytimg.com/vi/5ziJAIcdAFs/maxresdefault.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <div class="bottom_text">
                            <div class="card_date">張貼日期</div>
                            <a href="#" class="btn btn-primary">MORE</a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="black_decoration"></div>
        </div>






    </div>


    <div id="section4">
        <div id="paralax_photo">
            <div class="smoke">
                <div class="container ">
                    <div class="row no-gutters">
                        <div class="col-xs-12 col-md-10 col-lg-6 text-md-left">
                            <div class="white-text">
                                <div class=" ani wow animated fadeIn " data-wow-delay="0.3s" data-wow-duration="2s">
                                    <h1 class="h1-responsive">館長 ‒ 陳之憾</h1>
                                    <div class="h5  mt-sm-5">
                                        <p style="text-align: left;">以品牌創始人 館長 ‒
                                            陳之漢的勇敢、堅毅、不服輸且拒絕向逆境低頭的個性為品牌宗旨，使得穿搭者只要穿上Notorious，也能深刻感受到本品牌所傳遞的信念。</p>
                                        <p style="text-align: left;">
                                            有夢想的人，總是招人妒忌的<br />當全世界的人不看好你，不斷對你冷嘲熱諷時，你還能毫不猶豫的相信自己，憑藉著最初的信念持續往夢想前進嗎？<br />不懼任何目光、持續往目標前進，哪怕肉體燃燒殆盡，無法撼動的
                                        </p>
                                        <p style="text-align: left;">&nbsp;- 唯有 . 信念</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>



    <div id="section5">
        <div id="index_aboutus">
            <div id="about_title">
                <p id="us_title" class="offset-2">關於我們</p>
                <p id="sub_title" class="offset-2">Notorious致力於打造高品質的運動休閒服飾，以卓越機能性、耐洗不易變形、極致的親膚感為設計前提<br>
                    ，並加入時尚潮流因子的平價服飾品牌。</p>


            </div>


            <div id="top_aboutus">
                <div class="container p-0 display-flex flex-wrap">
                    <div class="row">

                        <div class="col-lg-8 col-12 m-auto">
                            <div id="top_photo" data-aos="fade-right">

                            </div>
                        </div>
                        <div class="col-lg-4 col-12 m-auto">
                            <div class="top_title">
                                <p id="aboutus_title1">最新消息A</p>
                                <p id="aboutus_subtitle">《鬼滅之刃劇場版：無限列車篇》電影優惠券，10月10日現貨買就送！</p>

                                <div id="read_more">
                                    <a href="">
                                        <div id="plus"></div>
                                    </a>
                                    <a href="">了解更多</a>


                                </div>


                            </div>
                        </div>



                    </div>






                </div>


            </div>
            <div id="bottom_aboutus">
                <div class="container p-0 display-flex flex-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-12 m-auto order-1 order-lg-0">
                            <div class="bottom_title">
                                <p id="aboutus_title2">最新消息B</p>
                                <p id="aboutus_subtitle2">《鬼滅之刃劇場版：無限列車篇》電影優惠券，10月10日現貨買就送！</p>

                                <div id="read_more">
                                    <a href="">
                                        <div id="plus"></div>
                                    </a>
                                    <a href="">了解更多</a>


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-8 col-12 m-auto ">
                            <div id="bottom_photo" data-aos="fade-left">

                            </div>
                        </div>
                    </div>

                </div>







            </div>


        </div>


@endsection
    {{-- <footer>
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





    </footer> --}}









    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script> --}}

    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    @section('js')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> -->

    <script src="./js/nav.js"></script>










    <script>
        var botnav = document.querySelector("#bottom_nav");
        var topnav = document.querySelector('#top_nav')

        window.onresize = function() {
            console.log(botnav.offsetTop);
            // console.log("123");
        }
        // console.log(botnav.offsetTop);

        scroll = window.scroll

        function scroll() {
            alert("检测到页面滚动事件:" + window.pageXOffset + " " + window.pageYOffset);
        }


        function wheelDeltaFunc(topnav) {
            topnav = topnav || window.event;
            console.log(topnav)
            if (topnav.wheelDelta > 0) {
                //滾輪向上滾動
            }
            if (topnav.wheelDelta < 0) {
                //滾輪向下捲動
                topnav.innerHTML = "<style:background-color:black>"
            }
        }


        AOS.init();

    </script>
 @endsection

