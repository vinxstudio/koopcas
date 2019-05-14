<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class NumDays extends Model
{
    public static function getAllNumDays(){
        return DB::table('numdays')->get();
    }
}
