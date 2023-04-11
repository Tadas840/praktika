<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PHPZxing\PHPZxingDecoder;

class ScanController extends Controller
{
   
    public function index()
    {
        return view('scan');
    }

//     public function upload(Request $request)
//     {
//         $validation = Validator::make($request->all(), [
//             'BarcodeQrImage' => 'required'
//         ]);

//         if ($validation->fails()) {
//             return response()->json([
//                 'message' => $validation->errors()->all()
//             ]);
//         }

//         $image = $request->file('BarcodeQrImage');
//         $imagepath = public_path("images/");
//         $NAME = $image -> getClientOriginalName();
//         $image->move($imagepath);
//         $fullpath = $imagepath . $NAME;

//         $decoder = new PHPZxingDecoder();
//         $decoder->setJavaPath('"C:\Program Files\Java\jdk-17.0.5\bin\java.exe"');
    
//         $resultArray = $decoder->decode($fullpath);

//         if (is_array($resultArray)) {
//             $resultCount = count($resultArray);
//             echo "Total count: $resultCount", "\n";
//             if ($resultCount > 0) {
//                 for ($i = 0; $i < $resultCount; $i++) {
//                     $result = $resultArray[$i];
//                     echo "Barcode format: $result->getFormatName(), ";
//                     echo "value: $result->getText(), ";
//                     echo "raw: ", bin2hex($result->getRawBytes()), "\n";
//                     echo "Localization : ", $result->getLocation(), "\n";
//                 }
//             } else {
//                 echo 'No barcode found.', "\n";
//             }
//         }

//         return response()->json([
//             'message' => 'Successfully uploaded the image.'
//         ]);
       
// }
}