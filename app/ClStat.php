<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ClStat extends Model
{
    public static function getAllClStat(){
        return DB::table('clstat')->get();
    }
}
