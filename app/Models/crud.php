<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Imports\crudImport;

class crud extends Model
{
    use HasFactory;

    protected $table="cruds";
    protected $fillable=['name','father_name','mother_name','dob','nid','address','sex','mobile_no'];

}
