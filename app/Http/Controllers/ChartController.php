<?php

namespace App\Http\Controllers;

use App\Models\Cattle;
use App\Models\Veisle;
use Illuminate\Http\Request;
Use DB;


class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cattles = Cattle::select(DB::raw("COUNT(*) as count"), DB::raw("Year(GimimoData) as birth_year"))
                    ->groupBy(DB::raw("Year(GimimoData)"))
                    ->get();
 
        $labels = $cattles->pluck('birth_year');
        $data = $cattles->pluck('count');

        $veisle = Cattle::select(DB::raw("COUNT(*) as count"),DB::raw("Veisl as pav"))
        ->groupBy(DB::raw("Veisl"))
        ->get();

        $labelsecond = $veisle->pluck('pav');
        $datasecond = $veisle->pluck('count');
  
        return view('chart', compact('labels', 'data', 'labelsecond', 'datasecond'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
