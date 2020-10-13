@extends('layouts/nav_footer')


@section('css')
<link rel="stylesheet" href="/css/news.css">
@endsection

@section('content')
<main role="main">
    <section class="news">
        <div class="container">
            <h2 class="news_title">商品清單</h2>
            <div class="row news_lists">

                @foreach ($product_types as $product_type)
                <br>

                {{-- <h2><td>{{ $product_types->type_name }}</td></h2> --}}
                <br>
                    @foreach ($product_type->items as $item)
                    {{$item}}

                    <div class="col-md-4">
                        <div class="news_list">
                        <h3>{{$item->itemsName}}</h3>
                            <h4>{{$item->sub_title}}</h4>
                            <img width="100%" src="{{$item->image_url}}" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">{{$item->content}}</p>
                        <a class="btn btn-success" href="./news_info/{{$item->id}}" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    @endforeach
                @endforeach

            </div>
            {{-- {{ $news_list_all->links() }} --}}
        </div>
    </section>
    <hr>
</main>
@endsection
