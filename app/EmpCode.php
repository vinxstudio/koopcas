<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class EmpCode extends Model
{
    public static function getAllEmpCodes()
    {
        return DB::table('empcode')->get();
    }
}
