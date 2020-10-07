<?php

namespace App\Http\Controllers;

use App\Sample_data;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

// use Datatables;
// use Yajra\DataTables\Facades\DataTables as FacadesDataTables;

// use Yajra\DataTables\Contracts\DataTable;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $data = Sample_data::latest()->get();
            dd($data);
            return DataTables::of($data)
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete dtn dtn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawCloumns(['action'])
                    ->make(true);
        }
        return view('sample_data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function show(Sample_data $sample_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample_data $sample_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample_data $sample_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample_data  $sample_data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample_data $sample_data)
    {
        //
    }
}
