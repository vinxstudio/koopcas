<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class EmpLevel extends Model
{
    public static function getAllEmpLevels()
    {
        return DB::table('buslevel')->get();
    }
}
