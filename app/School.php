<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class School extends Model
{
    public static function getAllSchools()
    {
        return DB::table('school')->get();
    }
}
