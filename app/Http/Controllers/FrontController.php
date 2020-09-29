<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;



class FrontController extends Controller
{


    //這邊是不行的  要宣告到dunction內
    // $news_list = DB::table('news')
    //         ->orderBy('id', 'desc')
    //         ->take(3)
    //         ->get();

    // dd($news_list);

    public function index()
    {
        $news_list = DB::table('news')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        // dd($news_list);

        return view('front/index', compact('news_list'));
    }

    public function news()
    {
        $news_list_all = DB::table('news')
            ->orderBy('id', 'desc')
            ->paginate(6);

        return view('front/news', compact('news_list_all'));
    }

    public function news_info($news_id)
    {

        $news_list_all = DB::table('news')
            ->where('id', '=', $news_id)
            ->first();
        // dd($news_list_all);
        return view('front/news_info', compact('news_list_all'));
    }

    public function contact_us()
    {
        return view('front/contact_us');
    }

}
