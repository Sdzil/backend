@extends('layouts/nav_footer')


@section('css')
<link rel="stylesheet" href="./css/contact_us.css">
<link rel="stylesheet" href="/contact_us js.html">
@endsection



@section('content')

<nav>


    <div id="banner">

        <div id="contact_nav">
            <div id="contact_banner">
                <div class="left_banner offset-3">
                </div>
                <div class="right_banner">
                    <h1>聯絡我們</h1>
                    <p>提供任何有關產品服務與常見問題的解答</p>
                </div>

            </div>
        </div>
    </div id="banner">

</nav>

<div id="content">


    <div id="contact_us">
        <div id="about_us">
           <h2>惡名昭彰股份有限公司<br>
               Notorious Taiwan</h2>
            <p>總公司:台灣新北市林口區文化二路二段177號</p>
            <p>電話:02 2601 3998</p>
            <P></P>


        </div>


        <div id="contact_card">
            <div class="container-fluid">

                <div id="contact_title">
                    <h2>
                        聯絡表單
                    </h2>
                    <small>
                        如果您有任何疑問，請隨時與我們聯繫，謝謝。
                    </small>

                </div>

                {{-- 表單開始表單開始表單開始表單開始表單開始表單開始表單開始表單開始 --}}
                <form id="contact_detail" action="/send_form" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div id="name_input" class="contact_box col-lg-6 ">
                            <div id="name_id">●姓名
                                <small>
                                    請輸入您的姓名
                                </small>
                            </div>
                            {{-- <input id="yourname" type="text" name="" value=""> --}}
                            <input id="yourname" type="text" name="name" value="" required>

                        </div>
                        <div id="contact_input" class="contact_box col-lg-6 ">
                            <div id="phone_id">●電話號碼
                                <small>
                                    請輸入您的電話號碼
                                </small>
                            </div>
                            <input id="yourphone" type="text" name="phoneNumber" value="" required>

                        </div>
                    </div>

                    <div id="address_input" class="contact_box">
                        <div id="phone_id">●地址
                            <small>
                                請輸入正確的聯繫地址
                            </small>
                        </div>
                        <input id="youraddress" type="text" name="address" value="">

                    </div>
                    <div id="email_input" class="contact_box">
                        <div id="phone_id">●信箱
                            <small>
                                請輸入您的電子郵件
                            </small>
                        </div>
                        <input id="youremail" type="email" name="email" value="" required>

                    </div>
                    <div id="problem_input" class="contact_box">
                        <div id="phone_id">●主旨
                            <small>
                                請輸入您的聯繫方式
                            </small>
                        </div>
                        <!-- <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             您的問題
                            </a> -->

                        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">保固與服務</a>
                              <a class="dropdown-item" href="#">退換貨相關</a>
                              <a class="dropdown-item" href="#">尋找或購買商品</a>
                              <a class="dropdown-item" href="#">其他</a>
                            </div>
                          </div> -->
                        <select id="yourproblem" name="subject">

                            <optgroup label="您的問題">
                                <option value="service">保固與服務</option>
                                <option value="cargo">退換貨相關</option>
                                <option value="findProduct">尋找或購買商品</option>
                                <option value="other">其他</option>
                            </optgroup>
                        </select>

                    </div>


                    <div id="talk_input" class="contact_box">
                        <div id="problemtalk">●問題描述
                            <small>
                                請詳細說明您在使用該產品時遇到的問題。
                            </small>
                        </div>
                        <input id="yourtalk" type="text" name="content" value="" required>

                    </div>

                    <div class="row  m-4" style="display: block">
                        <button type="reset" class="btn btn-primary btn-lg active offset-4 ">重新填寫</a>
                        <button type="submit" class="btn btn-secondary btn-lg active offset-1">送出</button>
                        {{-- <a href="#" class="btn btn-secondary btn-lg active offset-1" role="button"
                            aria-pressed="true">送出</a> --}}
                    </div>

            </div>

            </form>
            {{-- 表單結束表單結束表單結束表單結束表單結束表單結束表單結束表單結束表單結束 --}}
        </div>
    </div>

    </div>
</div>

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


@endsection

@section('js')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script> --}}



    <!-- <div class="formBtn">
            <button class="reset" type="reset" form="maintance">重新填寫</button>
            <button class="submit" type="button" form="maintance">送出</button>
        </div> -->




