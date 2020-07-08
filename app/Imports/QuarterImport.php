 <?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Quarters;

class QuartersImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Quarters([
            'num_quarter' => $row[0],
            'start_date'  => $row[1],
            'end_date'    => $row[2]
        ]);
    }
}