<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CivilStat extends Model
{
    public static function getAllCivilStat(){
        return DB::table('civilstat')->get();
    }
}
