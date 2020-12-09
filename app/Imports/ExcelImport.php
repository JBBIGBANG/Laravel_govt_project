<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;

class ExcelImport implements ToCollection,WithHeadingRow
{
    /**
    * @param Collection $collection
    */
        public function collection(Collection $collection)
        {
            foreach($collection as $key=>$value[0]);
            {
                if($key>0)
                {
                    DB::table('cruds')->insert
                    ([
                    'name'=>$value[0],
                    'father_name'=>$value[1],
                    'mother_name'=>$value[2],
                    'dob'=>$value[3],
                    'nid'=>$value[4],
                    'address'=>$value[5],
                    'sex'=>$value[6],
                    'mobile_no'=>$value[7]
                    ]);
                }
            }
        }
}


