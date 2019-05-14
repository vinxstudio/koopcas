<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class DimFreq extends Model
{
    public static function getAllDimFreq(){
        return DB::table('dimfreq')->get();
    }
}
