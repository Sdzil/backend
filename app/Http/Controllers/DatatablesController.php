<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Sample_data;


use Yajra\DataTables\DataTables;

class DatatablesController extends Controller
{
    //稍後修改，看一下SampleController的resource範例
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex(Request $request)
    {
        // if ($request->ajax()) {
        //     dd('5566');
        //     $data = Sample_data::latest()->get();
        //     return DataTables::of($data)
        //         ->addColumn('action', function ($data) {
        //             $button = '<button type="button" name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm">Edit</button>';
        //             $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="' . $data->id . '" class="delete btn btn-danger btn-sm">Delete</button>';
        //             return $button;
        //         })
        //         ->rawColumns(['action'])
        //         ->make(true);
        // }

        return view('datatables.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        // $data = Sample_data::latest()->get();
            return DataTables::of(Sample_data::query())
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="' . $data->id . '" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        // return Datatables::of(Sample_data::query())->make(true);
    }
}
