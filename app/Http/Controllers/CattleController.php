<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cattle;
use App\Models\Veisle;
use Carbon\Carbon;

class CattleController extends Controller
{

    public function index()
    {
    
        $data=Cattle::all();  
        $data2=Veisle::all()->unique('veislname');

        $params =
        [
        'cattle' => $data,
        'specdata' => $data2,    
        ];
        return view('main')->with($params);

     
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
        $date1 = Carbon::parse($request->input('GimimoData'));
        $date2 = Carbon::today();
        // $monthdate = $date1->diffInMonths($date2);
       
        $validated = $this->validate($request,[
            'GalvijoNr' => 'required|unique:cattle|min:14',
            'MotinosNr' => 'nullable|min:14',
            'Tipas' => 'nullable',
            'GimimoData' => 'required',
            'Amzius' => 'nullable',
            'Veisl' => 'required',
            'PM' => 'nullable',
            'Versing' => 'nullable',
            'SeklData' => 'nullable',
            'VersData' => 'nullable',
            'LastVers' => 'nullable',
            'AtsivestVers' => 'nullable',

        ]);
        $validated['Amzius'] = $date1->diffInMonths($date2);
       if($validated['SeklData'] !== null){
            $validated['VersData'] = Carbon::parse($validated['SeklData'])->addmonth(9);
       }
        if($validated['Tipas'] === Cattle::CATTLE_TYPE_2){
            $validated['Versing'] = 'Ne';
            $validated['SeklData'] = null;
            $validated['VersData'] = null;
            $validated['LastVers'] = null;
        } 
        if($validated['Versing'] === Cattle::CATTLE_V_N){
            $validated['SeklData'] = null;
            $validated['LastVers'] = null;
            $validated['SeklData'] = null;
            $validated['VersData'] = null;
        }
      
            // $versing = $request->input('versing');
            // $SeklData = $request->input('SeklData');
            // $vdate = $request->input('VersData');
            // $LastVers= $request->input('LastVers');
            // $AtsivestVers= $request->input('AtsivestVers');
            // $vdate = Carbon::parse('SeklData')->addMonth(9);

        //    if(($request->input('Tipas') === Cattle::CATTLE_TYPE_2)){
        //        $versing = 'Ne';
        //        $SeklData = null;
        //        $vdate = null;
        //        $LastVers = null;
               
        //    }
            // if($request->input('Tipas') === Cattle::CATTLE_TYPE_3){
            //    $LastVers = null;
            // }
            // if($request->input('versing') === Cattle::CATTLE_V_N){
            //     $SeklData = null;
            //     $vdate = null;
            //     $LastVers = null;
            // }
            // if($request->input('SeklData') == null){
            //     $vdate = null;
            // }

       
        // $catl = new Cattle;
        // $catl->GalvijoNr = $request->input('GalvijoNr');
        // $catl->MotinosNr = $request->input('MotinosNr');
        // $catl->Tipas = $request->input('Tipas');
        // $catl->GimimoData = $request->input('GimimoData');
        // $catl->Amzius = $monthdate;
        // $catl->Veisl = $request->input('Veisl');
        // $catl->PM = $request->input('PM');
        // $catl->versing = $versing;
        // $catl->SeklData= $SeklData;
        // $catl->VersData= $vdate;
        // $catl->LastVers= $LastVers;
        // $catl->AtsivestVers= $AtsivestVers;

        // $catl->save();

       Cattle::create($validated);
       return redirect('/')->with('success','Duomenys sėkmingai išsaugoti');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Cattle::find($id);
        $data1 = Veisle::all();

        $params = 
        [
            'cattles'=>$data,
            'spec'=>$data1, 
        ];
        return view('edit') -> with($params);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
     
       $date1 = Carbon::parse($request->input('GimimoData'));
       $date2 = Carbon::today();
       $monthdate = $date1->diffInMonths($date2);

       $data = Cattle::find($request->id);
       $versing = $request->input('versing');
       $SeklData = $request->input('SeklData');
       $vdate = $request->input('VersData');
       $LastVers= $request->input('LastVers');
       $AtsivestVers= $request->input('AtsivestVers');
       $vdate = Carbon::parse($SeklData)->addMonth(9); 
       if(($request->input('Tipas') === Cattle::CATTLE_TYPE_2)){
               $versing = 'Ne';
               $SeklData = null;
               $vdate = null;
               $LastVers = null;
               
           }
            if($request->input('Tipas') === Cattle::CATTLE_TYPE_3){
               $LastVers = null;
            }
            if($request->input('versing') === Cattle::CATTLE_V_N){
                $SeklData = null;
                $vdate = null;
                $LastVers = null;
            }
            if($request->input('SeklData') == null){
                $vdate = null;
            }


        $data->GalvijoNr = $request->input('GalvijoNr');
        $data->MotinosNr = $request->input('MotinosNr');
        $data->Tipas = $request->input('Tipas');
        $data->GimimoData = $request->input('GimimoData');
        $data->Amzius = $monthdate;
        $data->Veisl = $request->input('Veisl');
        $data->PM = $request->input('PM');
        $data->versing = $versing;
        $data->SeklData= $SeklData;
        $data->VersData= $vdate;
        $data->LastVers= $LastVers;
        $data->AtsivestVers= $AtsivestVers;
        $data->save();
        return redirect('main');
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
    public function destroy($id)
    {
      
    }

}
