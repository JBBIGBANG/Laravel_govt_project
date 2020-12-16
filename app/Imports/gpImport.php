<?php

namespace App\Imports;

use App\Models\gp;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class gpImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new gp([
            'si' =>$row['si'],
            'name' =>$row['name'],
            'session' =>$row['session'],
            'registration' =>$row['registration'],
            'department' =>$row['department'],
            'mobile_no' =>$row['mobile_no'],
            'address' =>$row['address'],


        ]);
    }
}
