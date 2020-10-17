<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemType;
use App\ProductImg;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items_list = DB::table('items')->get();
        $items_type = ItemType::with('items')->get();//這邊的items是在model內部設定的函式名稱，不是資料表名稱


        // $abc = Item::with('itemsType_5566')->get();

        // dd($items_type[0]->items[0]->itemName);

        return view('.admin.items.index', compact('items_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productTypes = ItemType::get();


        return view('admin.items.create', compact('productTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //取得表單內所有資料
        $requestData = $request->all();

        //如果表單內有單張圖上傳
        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $this->fileUpload($file, 'items');
            $requestData['image_url'] = $path;
        }

        //新增之後順便取得ID
        //這時候資料庫內的Item資料表已經填好新內容了
        $id =  Item::create($requestData)->id;

        //這邊是再繼續做如果有多圖，填入ProductImg資料表的部分
        if($request->hasFile('imgs'))
        {
            $files = $request->file('imgs');
            //多張圖片作為陣列處理
            foreach ($files as $file) {
                //圖片路徑處理
                $path = $this->fileUpload($file,'product_imgs');
                //新增資料進DB
                $product_img = new ProductImg;
                $product_img->product_id = $id;
                $product_img->img_url = $path;
                $product_img->save();

            }
        }



        return redirect('admin/items');
    }

//SummerNote上船及刪除圖片方法
    public function ajax_upload_img(){
         // A list of permitted file extensions
    $allowed = array('png', 'jpg', 'gif','zip');
    if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
        $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        if(!in_array(strtolower($extension), $allowed)){
            echo '{"status":"error"}';
            exit;
        }
        $name = strval(time().md5(rand(100, 200)));
        $ext = explode('.', $_FILES['file']['name']);
        $filename = $name . '.' . $ext[1];
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if( ! is_dir('upload/')){
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if ( ! is_dir('upload/img')) {
            mkdir('upload/img');
        }
        $destination = public_path().'/upload/img/'. $filename; //change this directory
        $location = $_FILES["file"]["tmp_name"];
        move_uploaded_file($location, $destination);
        echo "/upload/img/".$filename;//change this URL
    }
    exit;


    }


    public function ajax_delete_img(Request $request){

        if(file_exists(public_path().$request->file_link)){
            File::delete(public_path().$request->file_link);
        }

    }

    public function ajax_delete_img_in_DB(Request $request){

        $item = ProductImg::find($request->file_id);
        //   dd($item);
        // if ($item->image_url != '') {

        //     $old_image = $item->image_url;
        //     // $file = $request->file('image_url');
        //     // $path = $this->fileUpload($file, 'news');
        //     // $requestData['image_url'] = $path;
        //     File::delete(public_path() . $old_image);

        // }

        $item->delete();

        // return redirect('/admin/items');
            exit;

        // if(file_exists(public_path().$request->file_id)){
        //     File::delete(public_path().$request->file_id);
        // }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("3345678");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $edit_items = Item::find($id);
        $item_imgs = $edit_items->productImg;
        // dd($edit_items);
        return view('admin.items.edit', compact('edit_items', 'item_imgs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id);

        $requestData = $request->all();

        if ($request->hasFile('image_url')) {

            $old_image = $item->image_url;
            $file = $request->file('image_url');
            $path = $this->fileUpload($file, 'items');
            $requestData['image_url'] = $path;
            File::delete(public_path() . $old_image);

        }

        $item->update($requestData);

        return redirect('/admin/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $img_id = null)
    {
        dd($id,$img_id);
        $item = Item::find($id);
        //  dd($item);
        if ($item->image_url != '') {

            $old_image = $item->image_url;
            // $file = $request->file('image_url');
            // $path = $this->fileUpload($file, 'news');
            // $requestData['image_url'] = $path;
            File::delete(public_path() . $old_image);

        }

        // $item->delete();

        return redirect('/admin/items');
    }

    private function fileUpload($file, $dir)
    {
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }
        //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }
        //取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        //檔案名稱會被重新命名
        $filename = strval(time() . md5(rand(100, 200))) . '.' . $extension;
        //移動到指定路徑
        move_uploaded_file($file, public_path() . '/upload/' . $dir . '/' . $filename);
        //回傳 資料庫儲存用的路徑格式
        return '/upload/' . $dir . '/' . $filename;
    }
}
