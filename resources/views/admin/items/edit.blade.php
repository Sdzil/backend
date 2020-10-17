@extends('layouts.app');

@section('css')
<style>
.hidden{
    display: none;
}

</style>

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
        <form method="POST" action="/admin/items/update/{{ $edit_items->id }}" enctype="multipart/form-data"
            data-productid="{{ $edit_items->id }}">

            @csrf

            <div class="form-group">
                <label for="itemName">商品名稱</label>
                <input name="itemName" type="text" class="form-control" id="itemName" value="{{ $edit_items->itemName }}"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="price">價格</label>
                <input name="price" type="text" class="form-control" id="price" value="{{ $edit_items->price }}"
                    aria-describedby="emailHelp" required>
            </div>

            <div class="form-group">
                <label for="image">目前圖片</label>
                <br>
                <img name="image" width="200" src="{{ $edit_items->image_url }}" alt="">
                <br>
                <label for="image_url">上傳照片</label>
                <input name="image_url" type="file" class="form-control-file" id="image_url"
                    value="{{ $edit_items->image_url }}">
            </div>

            <label for="img" class="col-sm-2 col-form-label">現有產品組圖片</label>
            <div name="img" id="img_group" class="form-group row">
                <br>
                @foreach ($item_imgs as $item_img)
                    {{-- {{ $product_img }} --}}
                    <div class="col-sm-2 product_imgs m-2 position-relative img-thumbnail">
                        <img class="img-fluid" width="200" height="200" src="{{ $item_img->img_url }}" alt="">
                        <button class="btn btn-danger btn-sm btn-delete position-absolute" style="right:5px; top:5px"
                            data-productimgid="{{ $item_img->id }}" data-productid="{{ $edit_items->id }}"
                            data-src="{{ $item_img->img_url }}" type="button">X</button>
                        {{-- <div class="sort">
                            <label for="imgs">Sort</label>
                            <input class="form-control" type="text">
                        </div> --}}
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="img" class="col-12 col-form-label">重新上傳產品組圖片<small
                        class="text-danger">*建議圖片尺寸640px(寬)*360px(高)</small></label>
                <br>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="imgs" name="imgs[]" multiple>
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="image_url">上傳照片</label>
                <input name="image_url" type="file" class="form-control-file" id="image_url"
                    value="{{ $edit_items->image_url }}" required>
            </div> --}}

            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" class="form-control" id="content" rows="3"
                    required>{{ $edit_items->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">送出編輯</button>
        </form>
    </div>
@endsection

@section('js')


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        //刪除按鈕套用sweetAlert2
        $("#img_group").on("click", ".btn-delete", function() {
            var image_id = this.dataset.productimgid;
            var id = this.dataset.productid;
            var src = this.dataset.src;
            console.log(id);
            console.log(src);

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
                    // window.location.href = `/admin/items/destroy/${id}/${image_id}`;
                    // deleteImg(src);
                    // deleteImgInDB(image_id);
                    console.log(this.parentNode);
                    // console.log($("#img_group"));
                    // $("#img_group").addClass("hidden");
                    // console.log($("#img_group"));
                    $(this.parentNode).addClass("hidden");
                    console.log(this.parentNode);

                }
            })
        })

        function deleteImg(imgSrc) {

            // let out = new FormData();
            //     out.append('file', file, file.name);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_delete_img',
                data: {
                    file_link: imgSrc
                },
                success: function(imgSrc) {
                    console.log("delete:", imgSrc);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };

        function deleteImgInDB(image_id){
            // let out = new FormData();
            //     out.append('file', file, file.name);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                method: 'POST',
                url: '/admin/ajax_delete_img_in_DB',
                data: {
                    file_id: image_id
                },
                success: function(image_id) {
                    console.log("delete:", image_id);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });

        }

    </script>
@endsection
