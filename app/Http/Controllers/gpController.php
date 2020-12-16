<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\gpImport;
use App\Imports\crudImport;

use App\Models\gp;
use App\Models\crud;


class gpController extends Controller
{
    public function importForm()
    {
        return view('import_form');
    }

    public function upload(Request $res)
    {
        Excel::import(new gpImport, $res->file);
        return "ok";
    }
    public function test(Request $res)
    {
        Excel::import(new crudImport, $res->file);
        return "ok";
    }
}
