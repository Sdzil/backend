@extends('layouts.app');

@section('css')

@endsection

@section('content')


    <div class="container">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">後臺</a></li>
            <li class="breadcrumb-item"><a href="/admin/itemtypes">產品類別管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">產品類別新增</li>
            </ol>
        </nav>

        <form method="POST" action="store" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label for="type_name">產品類別名稱</label>
                <input name="type_name" type="text" class="form-control" id="type_name" aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="sort">價錢</label>
                <input name="sort" type="number" class="form-control" id="sort" aria-describedby="emailHelp" required>
            </div>
            
            <button type="submit" class="btn btn-primary">送出</button>
        </form>
    </div>
@endsection

@section('js')

@endsection
