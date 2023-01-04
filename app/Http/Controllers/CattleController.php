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
        $data2=Veisle::all();

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
        $date = $date1->diffInDays($date2);
        $year = 365;
        $date = $date / $year;
        
        $this->validate($request,[
            'GalvijoNr' => 'required',
            'MotinosNr' => 'required',
            'GimimoData' => 'required',

        ]);
       
            $sdate = $request->input('SeklData');
            $tdate = Carbon::today();
            $vdate = Carbon::parse($sdate) ->addMonth(9.3);
        

        
        $catl = new Cattle;
        $catl->GalvijoNr = $request->input('GalvijoNr');
        $catl->MotinosNr = $request->input('MotinosNr');
        $catl->Tipas = $request->input('Tipas');
        $catl->GimimoData = $request->input('GimimoData');
        $catl->Amzius = $date;
        $catl->Veisl = $request->input('Veisl');
        $catl->PM = $request->input('PM');
        $catl->versing = $request->input('versing');
        $catl->SeklData= $request->input('SeklData');
        $catl->VersData= $vdate;
        $catl->LastVers= $request->input('LastVers');
        $catl->AtsivestVers= $request->input('AtsivestVers');

        $catl->save();
    
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
        
        return view('edit',['cattles'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       $data = Cattle::find($request->id);
        $data->GalvijoNr=$request->GalvijoNr;
        $data->MotinosNr=$request->input('MotinosNr');
        $data->Tipas=$request->input('Tipas');
        $data->GimimoData=$request->input('GimimoData');
        $data->Veisl=$request->input('Veisl');
        $data->PM=$request->input('PM');
        $data->versing=$request->input('versing');
        $data->VersData=$request->input('VersData');
        $data->SeklData=$request->input('SeklData');
        $data->LastVers=$request->input('LastVers');
        $data->AtsivestVers=$request->input('AtsivestVers');
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
        $data=Cattle::find($id);
        $data->delete();
       return redirect('/');
    }

}
