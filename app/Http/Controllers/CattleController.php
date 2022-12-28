<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cattle;

class CattleController extends Controller
{
    function list(){
        $data=Cattle::all();  
        return view('main',['cattle'=>$data]);
       }

    public function index()
    {
        return view(
         'modal'
        );
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
        $this->validate($request,[
            'GalvijoNr' => 'required',
            'MotinosNr' => 'required',
            'Tipas' => 'required',
            'GimimoData' => 'required',
            'Veisl' => 'required',
            'PM' => 'required',
            'versing' => 'required',

        ]);

        $catl = new Cattle;

        $catl->GalvijoNr = $request->input('GalvijoNr');
        $catl->MotinosNr = $request->input('MotinosNr');
        $catl->Tipas = $request->input('Tipas');
        $catl->GimimoData = $request->input('GimimoData');
        $catl->Amzius = $request->input('Amzius');
        $catl->Veisl = $request->input('Veisl');
        $catl->PM = $request->input('PM');
        $catl->versing = $request->input('versing');
        $catl->VersData= $request->input('VersData');
        $catl->SeklData= $request->input('SeklData');
        $catl->LastVers= $request->input('LastVers');
        $catl->AtsivestVers= $request->input('AtsivestVers');

        $catl->save();
        
        return redirect('/')->with('success','Duomenys išsaugoti');
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
