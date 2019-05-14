<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dosritag extends Model
{
    public static function getAllDosritag(){
        return DB::table('dosritag')->get();
    }
}
