
    <!-- page css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/contact.css">



<main role="main">
    <section class="contact">
        <div class="container">
            <h2>後台系統-最新消息
            </h2>
            <div class="contact_description">
                說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字說明文字
                <ol>
                    <li>注意事項</li>
                    <li>注意事項</li>
                    <li>注意事項</li>
                    <li>注意事項</li>
                    <li>注意事項</li>
                </ol>
            </div>
            <form method="POST" action="/news_manage">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">標題</label>
                    <input name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">副標題</label>
                    <input name="sub_title" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput">內文</label>
                    <input name="content" class="form-control" id="exampleInput" aria-describedby="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">圖片網址</label>
                    <input name="image_url" class="form-control" id="exampleInput" aria-describedby="title">
                  </div>

                <button type="submit" class="btn btn-primary">送出審查</button>
            </form>
        </div>
    </section>

    <hr>
</main>
