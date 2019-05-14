<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TrModule extends Model
{
    public static function getAllTrModule(){
        return DB::table('tr_module')->get();
    }
}
