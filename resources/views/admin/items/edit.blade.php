@extends('layouts.app');

@section('css')

@endsection

@section('content')


    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後臺</a></li>
            <li class="breadcrumb-item"><a href="/admin/items">產品管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯產品</li>
            </ol>
        </nav>
    <form method="POST" action="/admin/items/update/{{$edit_items->id}}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="itemName">商品名稱</label>
                <input name="itemName" type="text" class="form-control" id="itemName" value="{{$edit_items->itemName}}" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="price">價格</label>
                <input name="price" type="text" class="form-control" id="price" value="{{$edit_items->price}}" aria-describedby="emailHelp" required>
            </div>

                <div class="form-group">
                目前圖片<br>
                <img width="200" src="{{$edit_items->image_url}}" alt="">
                <br>
                <label for="image_url">上傳照片</label>
                <input name="image_url" type="file" class="form-control-file" id="image_url" value="{{$edit_items->image_url}}">
              </div>

              <div class="form-group row">
                <label for="img" class="col-sm-2 col-form-label">現有產品組圖片</label>
                @foreach ($item_imgs as $item_img)
                {{-- {{$product_img}} --}}
                <div class="col-sm-2 product_imgs" data-productimgid="{{$item_img->id}}">
                    <img class="img-fluid" src="{{$item_img->img_url}}" alt="">
                <button class="btn btn-danger btn-sm" data-productimgid="{{$item_img->id}}" type="button">X</button>
                    {{-- <div class="sort">
                        <label for="imgs">Sort</label>
                        <input class="form-control" type="text">
                    </div> --}}
                </div>
                @endforeach
            </div>
            <div class="form-group row">
                <label for="img" class="col-sm-2 col-form-label">重新上傳產品組圖片 <br><small
                        class="text-danger">*建議圖片尺寸500px(寬)*700px(高)</small></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="imgs" name="imgs[]" multiple>
                </div>
            </div>
              {{-- <div class="form-group">
                <label for="image_url">上傳照片</label>
                <input name="image_url" type="file" class="form-control-file" id="image_url" value="{{$edit_items->image_url}}" required>
              </div> --}}

              <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" class="form-control" id="content" rows="3" required>{{$edit_items->content}}</textarea>
              </div>
            <button type="submit" class="btn btn-primary">送出編輯</button>
        </form>
    </div>
@endsection

@section('js')

@endsection
