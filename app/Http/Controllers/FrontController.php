<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;

use App\Attraction;
use App\Item;
use App\ItemType;
use App\Contact;

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

    public function news_info($abc)
    {
        //$abc = title6
        $news_list_all = DB::table('news')
            ->where('id', '=', $abc)
            ->first();
        // dd($news_list_all);
        return view('front/news_info', compact('news_list_all'));
    }

    public function products()
    {
        // $news_list_all = DB::table('news')
        //     ->orderBy('id', 'desc')
        //     ->paginate(6);

        $product_types = ItemType::with('items')->get();

        return view('front/products', compact('product_types'));
    }

    public function product_info($product_id)
    {
        //$abc = title6
        // $news_list_all = DB::table('news')
        //     ->where('id', '=', $abc)
        //     ->first();
        // dd($news_list_all);

        // $product_types = ItemType::with('items')->get();

        $products = Item::find($product_id);
        // dd($products);


        return view('front/product_info', compact('products'));
    }


    public function product_types($product_type_id)
    {
        // $news_list_all = DB::table('news')
        //     ->orderBy('id', 'desc')
        //     ->paginate(6);

        $product_type = ItemType::find($product_type_id);

        $products = $product_type->items;
        // dd($product_types, $products);


        return view('front/product_type', compact('product_type', 'products'));
    }



    public function contact_us()
    {
        return view('front/contact_us');
    }

    public function contact_us_group()
    {
        return view('front/contact_us_group');
    }

    public function get_form(Request $request)
    {

        Attraction::create($request->all());
        return redirect('contact_us');
    }

    public function get_form_group(Request $request)
    {

        Contact::create($request->all());
        return redirect('contact_us_group');
    }

    public function index_group()
    {
        return view('front/index html');
    }
    // public function send(Request $request)
    // {

    //     Attraction::create($request->all());
    // }



    // public function testfunciotn1()
    // {
    //     return view("datatables.index");
    // }

}
