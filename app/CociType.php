<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CociType extends Model
{
    public static function  getAllCociType(){
        return DB::table('cocitype')->get();
    }
}
