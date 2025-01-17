@extends('layouts.app')

@section('css')
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">帳號管理 - Index</div>

                <div class="card-body">
                    <a class="btn btn-success" href="/admin/accounts/create">新增帳號</a>
                    <hr>

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>使用者名稱(name)</th>
                                <th>Email</th>
                                <th>權限(role)</th>
                                <th width="120">功能</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->role}}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="#" data-itemid="{{$item->id}}">刪除</a>

                                    <form class="destroy-form" data-itemid="{{$item->id}}"
                                        action="/admin/news/destroy/{{$item->id}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "order": [1,"desc"]
        });

        $('.btn').on('click','.btn-danger',function(){
            event.preventDefault();
            var r = confirm("你確定要刪除此項目嗎?");
            if (r == true) {
                var itemid = $(this).data("itemid");
                $(`.destroy-form[data-itemid="${itemid}"]`).submit();
            }
        });
    });
</script>
@endsection
