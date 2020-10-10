@extends('layouts\app')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
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
        <li class="breadcrumb-item active" aria-current="page">產品管理</li>
        </ol>
    </nav>

<a href="/admin/items/create" class="btn btn-success sm-3 mb-3">新增產品</a>

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>產品名稱</th>
            <th>價格</th>
            <th>圖片</th>
            <th>內文</th>
            <th width="100">功能</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items_list as $item)
        <tr>
            <td>{{$item->itemName}}</td>
            <td>{{$item->price}}</td>
            <td>
                <img width="200" src="{{$item->image_url}}" alt="">
            </td>
            <td>{{$item->content}}</td>
            <td>
                <a href="items/edit/{{$item->id}}" class="btn btn-sm btn-primary">編輯</a>
                {{-- <a href="items/destory/{{$item->id}}" class="btn btn-sm btn-danger">刪除</a> --}}
                <button class="btn btn-sm btn-danger btn-delete" data-itemid="{{$item->id}}">刪除</button>
            </td>
        </tr>
        @endforeach

    </tbody>
    <tfoot>
        <tr>
            <th>產品名稱</th>
            <th>價格</th>
            <th>圖片</th>
            <th>內文</th>
            <th>功能</th>
        </tr>
    </tfoot>
</table>
</div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
    $(document).ready(function() {
        $('#example').DataTable();

        //刪除按鈕套用sweetAlert2
        $("#example").on("click", ".btn-delete", function(){
            var item_id = this.dataset.itemid;

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire(
                    // 'Deleted!',
                    // 'Your file has been deleted.',
                    // 'success'
                    // )
                    window.location.href = `/admin/items/destroy/${item_id}`;

                    }
                })



        })
    } );
    </script>
@endsection
