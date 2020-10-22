@extends('layouts/nav_footer')

@section('css')
    <link rel="stylesheet" href="/css/news_info.css">
@endsection

@section('content')

    {{-- ('product_types', 'products') --}}
    <main role="main">
        <section class="news_info">
            {{-- {{ $news_list_all }} --}}
            <div class="container">
                <h2 class="info_title">商品名稱：{{ $products->itemName }}</h2>
                <div class="row">
                    <div class="col-12 my-3 my-md-0 col-md-6">
                        <div class="image_box h-100">
                            <a href="{{ $products->image_url }}" data-lightbox="image-1" data-title="My caption">
                                <img width="100%" src="{{ $products->image_url }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row col-12 my-3 my-md-0 col-md-6">
                        <div class="info_content col-12">
                            <h3>價格：{{ $products->price }}</h3>
                            {{ $products->content }}
                        </div>
                        <div class="col-12">

                            <button class="btn btn-danger addcart" data-productid="{{ $products->id }}">加入購物車</button>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <hr>
    </main>

@endsection

@section('js')
    <!-- lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script>
        $('.addcart').click(function() {
            var product_id = $(this).data('productid');
            console.log(product_id);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/addcart',
                data: {
                    product_id: product_id
                },
                success: function(res) {
                    $('#cartTotalQuantity').text(res);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        });

    </script>



@endsection
