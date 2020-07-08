<?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use App\User;

class UsersImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new User([
            'fullname'      => $row[0],
            'document_type' => $row[1],
            'num_document'  => $row[2],
            'email'         => $row[3],
            'password'      => Hash::make($row[4])
        ]);
    }
}