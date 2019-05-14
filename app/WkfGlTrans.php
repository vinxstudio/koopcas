<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkfGlTrans extends Model
{
    public static function getAllWkfGlTrans(){
        return DB::table('wkfgltrans')->get();
    }
}
