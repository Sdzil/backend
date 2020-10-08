@extends('layouts.app');

@section('css')

@endsection

@section('content')


    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後臺</a></li>
            <li class="breadcrumb-item"><a href="/admin/news">最新消息管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">新增最新消息</li>
            </ol>
        </nav>

        <form method="POST" action="store" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="title">標題</label>
                <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="sub_title">副標題</label>
                <input name="sub_title" type="text" class="form-control" id="sub_title" aria-describedby="emailHelp" required>
            </div>

              <div class="form-group">
                <label for="image_url">上傳照片</label>
                <input name="image_url" type="file" class="form-control-file" id="image_url" required>
              </div>

              <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" class="form-control" id="content" rows="3" required></textarea>
              </div>
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </div>
@endsection

@section('js')

@endsection
