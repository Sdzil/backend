<?php

namespace App\Http\Controllers;


use App\Item;
use App\ItemType;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item_types = ItemType::get();
        // dd($item_types);
        return view('admin.itemtypes.index', compact('item_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.itemtypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $path = $this->fileUpload($file, 'news');
            $requestData['image_url'] = $path;
        }

        ItemType::create($requestData);
        return redirect('admin/itemtypes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("0355665566183");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_item_types = ItemType::find($id);
        // dd($edit_news);
        return view('admin.itemtypes.edit', compact('edit_item_types'));
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
        $item = ItemType::find($id);

        // $requestData = $request->all();

        // if ($request->hasFile('image_url')) {

        //     $old_image = $item->image_url;
        //     $file = $request->file('image_url');
        //     $path = $this->fileUpload($file, 'news');
        //     $requestData['image_url'] = $path;
        //     File::delete(public_path() . $old_image);

        // }

        $item->update($request->all());

        return redirect('admin/item_types');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ItemType::find($id);
        //  dd($item);
        if ($item->image_url != '') {

            $old_image = $item->image_url;
            // $file = $request->file('image_url');
            // $path = $this->fileUpload($file, 'news');
            // $requestData['image_url'] = $path;
            File::delete(public_path() . $old_image);

        }

        $item->delete();

        return redirect('admin/itemtypes');
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
