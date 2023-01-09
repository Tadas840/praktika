<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Cattle;
use App\Models\Veisle;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

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

       
        $data = new Cattle([
            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[6]),
            'GalvijoNr' => $row[2],
            'MotinosNr' => null,
            'Tipas' => $row[4],
            'Veisl' => $row[5],
            'GimimoData' => $date,
            'Amzius' => $row[7], 

        ]);
        $data1 = new Veisle([
            $veisl = 'veislname',
            $veisl => $row[5],
        ]);
      
        $params = [
           $data,
           $data1,
        ];

        return $params;
     
    }
}
