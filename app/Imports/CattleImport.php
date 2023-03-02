<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Cattle;
use App\Models\Veisle;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Validation\Rule;

class CattleImport implements ToModel,  WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $v = Veisle::where('veislname', '=', $row[5])->first();

        if(!$v) {
            $veisle = new Veisle([
                'veislname' => $row[5],
            ]);

            $veisle->save();

            $v = $veisle;
        }

        $data = new Cattle([
            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6]),
            'GalvijoNr' => $row[2],
            'MotinosNr' => null,
            'Tipas' => $row[4],
            'Veisl' => $v->veislname,
            'GimimoData' => $date,
            'Amzius' => $row[7], 

        ]);
        
     
        
        $params = [
           $data
        ];

        return $params;
     
    }
}
