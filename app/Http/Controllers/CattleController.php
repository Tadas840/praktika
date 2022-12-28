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
}
