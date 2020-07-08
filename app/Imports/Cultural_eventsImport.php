<?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use App\Cultural_events;

class Cultural_eventsImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new User([
            'name'        => $row[0],
            'description' => $row[1],
            'file'        => $row[2],
            'start_date'  => $row[3],
            'end_date'    => $row[4],
            'stand_out'   => $row[5]
        ]);
    }
}