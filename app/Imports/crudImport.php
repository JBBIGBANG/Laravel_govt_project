<?php

namespace App\Imports;

use App\Models\crud;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class crudImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new crud([
            'name' =>$row['name'],
            'father_name' =>$row['father_name'],
            'mother_name' =>$row['mother_name'],
            'dob' =>$row['dob'],
            'nid' =>$row['nid'],
            'address' =>$row['address'],
            'sex' =>$row['sex'],
            'mobile_no' =>$row['mobile_no'],
        ]);
    }
}
