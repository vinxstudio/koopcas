<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Department extends Model
{
    public static function getAllDepartments()
    {
        return DB::table('dept')->get();
    }
}
