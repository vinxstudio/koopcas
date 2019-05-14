<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TransAtms extends Model
{
    public static function getAllTransAtms(){
        return DB::table('transatm')->get();
    }
}
