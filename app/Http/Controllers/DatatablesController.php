<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


use Yajra\DataTables\DataTables;

class DatatablesController extends Controller
{
    //稍後修改，看一下SampleController的resource範例
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }
}
