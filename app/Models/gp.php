<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Imports\gpImport;

class gp extends Model
{
    use HasFactory;
    protected $table="gps";
    protected $fillable=['si','name','session','registration','department','mobile_no','address'];

}
