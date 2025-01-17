@extends('layouts/nav_footer')


@section('css')
    <link rel="stylesheet" href="/css/news.css">
@endsection

@section('content')
    <main role="main">
        <section class="news">
            <div class="container">
                <h2 class="news_title">商品清單</h2>
                    @foreach ($product_types as $product_type)
                        <a href="/product_type/{{$product_type->id}}">{{$product_type->type_name}}</a>
                    @endforeach

                    @foreach ($product_types as $product_type)
                    <div class="row news_lists">
                        <h2>{{$product_type->type_name}}</h2>
                    </div>

                        {{-- <h2>
                            <td>{{ $product_types->type_name }}</td>
                        </h2> --}}
                        <div class="row news_lists">
                        @foreach ($product_type->items as $item)
                            {{-- {{ $item }} --}}

                            <div class="col-md-3">
                                <div class="news_list">
                                    {{-- 5566 --}}
                                    <h3>產品名稱：{{ $item->itemName }}</h3>

                                    <img width="100%" src="{{ $item->image_url }}" alt="圖片建議尺寸: 1000 x 567">
                                    <h4>價格：{{ $item->price }}</h4>
                                    <p class="news_content">{{ $item->content }}</p>
                                    <a class="btn btn-success" href="/product_info/{{ $item->id }}" role="button">點擊查看更多
                                        &raquo;</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endforeach


                {{-- {{ $news_list_all->links() }} --}}
            </div>
        </section>
        <hr>
    </main>
@endsection
