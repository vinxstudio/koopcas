<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaHouseType extends Model
{
    public static function getAllCisaHouseType(){
        return DB::table('cisa_housetype')->get();
    }
}
