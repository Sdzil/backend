@extends('layouts\app')

@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <style>
        /* .btn-success{
            font-size: 30px;
        } */
    </style>
@endsection

@section('content')

<div class="container">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin">後臺</a></li>
        <li class="breadcrumb-item active" aria-current="page">最新消息管理</li>
        </ol>
    </nav>

<a href="/admin/news/create" class="btn btn-success sm-3 mb-3">新增最新消息</a>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            {{-- <th>發表時間</th> --}}
            <th>標題</th>
            <th>副標題</th>
            <th>圖片</th>
            <th>內文</th>
            <th>權重</th>
            <th width="100">功能</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news_list as $item)
        <tr>
            {{-- <td>{{$item->updated_at}}</td> --}}
            <td>{{$item->title}}</td>
            <td>{{$item->sub_title}}</td>
            <td>
                <img width="200" src="{{$item->image_url}}" alt="">
            </td>
            <td>{{$item->content}}</td>
            <td>{{$item->sort}}</td>
            <td>
                <a href="news/edit/{{$item->id}}" class="btn btn-sm btn-primary">編輯</a>
                <a href="news/destroy/{{$item->id}}" class="btn btn-sm btn-danger">刪除</a>
                {{-- <button class="btn btn-sm btn-danger">刪除</button> --}}
            </td>
        </tr>
        @endforeach

    </tbody>
    <tfoot>
        <tr>
            {{-- <th>發表時間</th> --}}
            <th>標題</th>
            <th>副標題</th>
            <th>圖片</th>
            <th>內文</th>
            <th>權重</th>
            <th>功能</th>
        </tr>
    </tfoot>
</table>
</div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [4,"desc"]
        });
    } );
    </script>
@endsection
