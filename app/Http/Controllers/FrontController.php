<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

use App\Attraction;



class FrontController extends Controller
{


    //這邊是不行的  要宣告到dunction內
    // $news_list = DB::table('news')
    //         ->orderBy('id', 'desc')
    //         ->take(3)
    //         ->get();

    // dd($news_list);

    public function index1()
    {
        $news_list = DB::table('news')
            ->orderBy('id', 'desc')
            ->take(3)
            ->get();

        // dd($news_list);

        return view('front/index1', compact('news_list'));
    }

    public function news()
    {
        $news_list_all = DB::table('news')
            ->orderBy('id', 'desc')
            ->paginate(6);

        return view('front/news', compact('news_list_all'));
    }

    public function news_info($abc)
    {
        //$abc = title6
        $news_list_all = DB::table('news')
            ->where('id', '=', $abc)
            ->first();
        // dd($news_list_all);
        return view('front/news_info', compact('news_list_all'));
    }

    public function contact_us()
    {
        return view('front/contact_us');
    }

    public function get_form(Request $request)
    {
        // dd($request->all());

        // DB::table('attractions')->insert(
        //     ['email' => $request->email,
        //      'location' => $request->location,
        //      'image_src' => '',
        //      'location_name' => $request->location_name,
        //      'info' => $request->info
        //      ]
        // );

        Attraction::create($request->all());

    }

    public function send(Request $request)
    {

        Attraction::create($request->all());
    }

    public function success()
    {
        return view('front/success');
    }

    // public function testfunciotn1()
    // {
    //     return view("datatables.index");
    // }

}
