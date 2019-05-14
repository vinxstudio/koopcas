<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SlgClass extends Model
{
    public static function getAllSlgClass(){
        return DB::table('slg_class')->get();
    }
}
