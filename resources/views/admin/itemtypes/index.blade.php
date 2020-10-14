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
                <li class="breadcrumb-item active" aria-current="page">產品類別管理</li>
            </ol>
        </nav>

        <a href="/admin/itemtypes/create" class="btn btn-success sm-3 mb-3">新增產品類別</a>

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>產品類別名稱</th>
                    <th>權重</th>
                    <th width="100">功能</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($item_types as $item_type)
                        <tr>
                            <td>{{ $item_type->type_name }}</td>
                            <td>{{ $item_type->sort }}</td>


                            <td>
                                <a href="item_types/edit/{{ $item_type->id }}" class="btn btn-sm btn-primary">編輯</a>
                                {{-- <a href="items/destory/{{ $item->id }}"
                                    class="btn btn-sm btn-danger">刪除</a> --}}
                                <button class="btn btn-sm btn-danger btn-delete" data-item_type_id="{{ $item_type->id }}">刪除</button>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>產品類別名稱</th>
                    <th>權重</th>
                    <th>功能</th>
                </tr>
            </tfoot> --}}
        </table>
    </div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable(
                {
                    "order": [2,"desc"]
                }
            );

            //刪除按鈕套用sweetAlert2
            $("#example").on("click", ".btn-delete", function() {
                var item_id = this.dataset.item_type_id;

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
                        window.location.href = `/admin/itemtypes/destroy/${item_type_id}`;

                    }
                })
            })
        });

    </script>
@endsection
