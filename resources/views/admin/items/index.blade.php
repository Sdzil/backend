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



    <table border="0" cellspacing="5" cellpadding="5">
            <tbody>
                <tr>

                    <td>
                     <select name="item_types" id="item_types" name="item_types">
                            @foreach ($items_type as $type)
                                <option class="item_type_id" value="{{ $type->id }}">{{ $type->type_name }}</option>

                            @endforeach

                        </select>
                       </td>
                </tr>
                <tr>
                    <td>Maximum age:</td>
                    <td><input type="text" id="max" name="max"></td>
                </tr>

            </tbody>

        </table>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>產品名稱</th>
                    <th>價格</th>
                    <th>圖片</th>
                    <th>內文</th>
                    <th>產品類別</th>
                    <th width="100">功能</th>
                </tr>
            </thead>
            <tbody>
                {{-- <br> --}}
                @foreach ($items_type as $type)
                    {{-- {{ $type }} --}}

                    @foreach ($type->items as $item)
                        <tr>
                            <td>{{ $item->itemName }}</td>
                            <td>{{ $item->price }}</td>
                            <td>
                                <img width="200" src="{{ $item->image_url }}" alt="">
                            </td>
                            <td>{{ $item->content }}</td>

                            {{-- 兩種方式都可以顯示商品類別名稱 --}}
                            {{-- <td>{{ $type->type_name }}</td>
                            --}}
                            <td>{{ $item->itemsType->type_name }}</td>

                            <td>
                                <a href="items/edit/{{ $item->id }}" class="btn btn-sm btn-primary">編輯</a>
                                {{-- <a href="items/destory/{{ $item->id }}"
                                    class="btn btn-sm btn-danger">刪除</a> --}}
                                <button class="btn btn-sm btn-danger btn-delete" data-itemid="{{ $item->id }}">刪除</button>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>產品名稱</th>
                    <th>價格</th>
                    <th>圖片</th>
                    <th>內文</th>
                    <th>產品類別</th>
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
        // $.fn.dataTable.ext.search.push(
        //     function(settings, data, dataIndex) {
        //         var type = parseInt($('.item_type_id').val(), 10);
        //         console.log(type);
        //         // var max = parseInt($('#max').val(), 10);
        //         var typeName = parseFloat(data[4]) || 0; // use data for the typename column
        //         console.log(typeName);
        //         // if ((isNaN(min) && isNaN(max)) ||
        //         //     (isNaN(min) && age <= max) ||
        //         //     (min <= age && isNaN(max)) ||
        //         //     (min <= age && age <= max)) {
        //         if (typeName == 0) {
        //             return true;
        //         }
        //         return false;
        //     }
        // );
        // 當我們要不斷的更換.fn.dataTable.ext.search.push()中的方法的時候，需要在上一次篩選結束後使用.fn.dataTable.ext.search.push()中的方法的時候，需要在上一次篩選結束後使用.fn.dataTable.ext.search.pop()彈出之前的搜索方法。
        $(document).ready(function() {
            // var table = $('#example').DataTable();

            // $('.item_type_id').on('keyup', function() {
            //     //觸發篩選
            //     table.draw();
            // });


            $('#example').DataTable({
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = $('#item_types');
                        var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d +
                                '</option>')
                        });
                    });
                }
            });


            //刪除按鈕套用sweetAlert2
            $("#example").on("click", ".btn-delete", function() {
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
        });

    </script>
@endsection
