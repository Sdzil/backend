@extends('layouts/nav_footer')

@section('css')
    <link rel="stylesheet" href="./css/news_info.css">
@endsection

@section('content')

<main role="main">
    <section class="news_info">
    {{-- {{$news_list_all}} --}}
        <div class="container" style="margin-top: 20px">
            <h2 class="info_title">{{$news_list_all->title}}</h2>
            <div class="row">
                <div class="col-12 my-3 my-md-0 col-md-6">
                    <div class="image_box h-100">
                        <a href="{{$news_list_all->image_url}}" data-lightbox="image-1" data-title="My caption">
                            <img width="100%" src="{{$news_list_all->image_url}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-12 my-3 my-md-0 col-md-6">
                    <div class="info_content">
                        <h3>{{$news_list_all->sub_title}}</h3>
                        {{$news_list_all->content}}
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

@endsection
