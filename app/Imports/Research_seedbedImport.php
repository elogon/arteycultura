 <?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Research_seedbed;

class Research_seedbedImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Research_seedbed([
            'name_research_seedbed'    => $row[0],
            'description'              => $row[1],
            'days'                     => $row[2],
            'start_date'               => $row[3],
            'end_date'                 => $row[4]
        ]);
    }
}