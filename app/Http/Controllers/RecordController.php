<?php
  
  namespace App\Http\Controllers;
    
  use Illuminate\Http\Request;
  use App\Models\Cattle;
  use Illuminate\Support\Facades\DB;
  
  class RecordController extends Controller
  {
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index(Request $request)
      {
        $id = $request -> id;
        // $id = $request->input('LT000006503298*');
        $record = Cattle::where('GalvijoNr', $id)->first();
    
        if ($record) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
      }
  