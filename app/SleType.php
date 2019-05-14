<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SleType extends Model
{
    public static function getAllsleType(){
        return DB::table('sle_type')->get();
    }
}
