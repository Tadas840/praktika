<?php
  
  namespace App\Http\Controllers;
    
  use Illuminate\Http\Request;
  use App\Models\Cattle;
    
  class RecordController extends Controller
  {
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $isExist = Cattle::all();

          dd($isExist);
          
          return view('/check');
      }
  }