<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news_list = DB::table('news')->get();
        return view('admin.news.index', compact('news_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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

        News::create($requestData);
        return redirect('admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("035566");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_news = News::find($id);
        // dd($edit_news);
        return view('admin.news.edit', compact('edit_news'));
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
        $item = News::find($id);

        $requestData = $request->all();

        if ($request->hasFile('image_url')) {

            $old_image = $item->image_url;
            $file = $request->file('image_url');
            $path = $this->fileUpload($file, 'news');
            $requestData['image_url'] = $path;
            File::delete(public_path() . $old_image);

        }

        $item->update($requestData);

        return redirect('admin/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = News::find($id);
        //  dd($item);
        if ($item->image_url != '') {

            $old_image = $item->image_url;
            // $file = $request->file('image_url');
            // $path = $this->fileUpload($file, 'news');
            // $requestData['image_url'] = $path;
            File::delete(public_path() . $old_image);

        }

        $item->delete();

        return redirect('/admin/news');

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
