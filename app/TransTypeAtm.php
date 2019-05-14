<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TransTypeAtm extends Model
{
    public static function getAllTransTypeAtm(){
        return DB::table('transtypeatm')->get();
    }
}
