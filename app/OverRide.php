<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class OverRide extends Model
{
    public static function getAllOverride(){
        return DB::table('override')->get();
    }

    public static function getOverride($branchCode,$userId){
        return DB::table('override')
        ->select()
        ->leftJoin('access',function($join){
            $join->on('access.AccessID','=','override.USERIDFROM');
        })
        ->where('BR_CODE','=',$branchCode)
        ->where('USERIDTO','=',$userId)
        ->get();
    }   
}
