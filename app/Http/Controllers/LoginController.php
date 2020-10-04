<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\News;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function admin()
    {
        return view('backend/admin');
    }

    public function news_manage(Request $request)
    {
        News::create($request->all());
        //插入個輸入成功的畫面
        //10/01 暫時OK
        return redirect('/success');
    }

    public function data()
    {
        $news_list_all = DB::table('news')
            ->orderBy('id', 'desc')
            ->get();

        return view('backend/datatable', compact('news_list_all'));
    }

}

//一笈壽司
//壽司郎-鮭魚
//台中魚市場-進去右轉第一家 鮭魚 100元
//鵝房宮

//鈴木幸介 Sushi Suzuki
//https://www.facebook.com/shin.cakery/
