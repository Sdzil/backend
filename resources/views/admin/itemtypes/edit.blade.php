@extends('layouts.app');

@section('css')

@endsection

@section('content')


    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後臺</a></li>
            <li class="breadcrumb-item"><a href="/admin/itemtypes">產品類別管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">產品類別編輯</li>
            </ol>
        </nav>
    <form method="POST" action="/admin/item_types/update/{{$edit_item_types->id}}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="type_name">產品類別名稱</label>
                <input name="type_name" type="text" class="form-control" id="type_name" value="{{$edit_item_types->type_name}}" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="sort">權重</label>
                <input name="sort" type="text" class="form-control" id="sort" value="{{$edit_item_types->sort}}" aria-describedby="emailHelp" required>
            </div>
            <button type="submit" class="btn btn-primary">送出編輯</button>
        </form>
    </div>
@endsection

@section('js')

@endsection
