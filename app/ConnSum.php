<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ConnSum extends Model
{
    public static function getAllConnSum(){
        return DB::table('connsum')->get();
    }
}
