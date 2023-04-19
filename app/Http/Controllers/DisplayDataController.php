<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Cattle;

class DisplayDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
        if ($request->ajax()) {
            $data = Cattle::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                    
                        $updateButton = "<a href='/edit/{$row->id}' class='btn btn-sm btn-info' data-id='".$row->id."'><i class='fa fa-edit'></i></a>";
                        $deleteButton = "<a class='btn btn-sm btn-danger delete' data-id='".$row->id."'><i class='fa fa-times'></i></a>";
         
                         return $updateButton." ".$deleteButton;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('datatable');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         $catdata = Cattle::find($request->id);
       
        $catdata->delete();
      return redirect('/'); 
     
    }
}
