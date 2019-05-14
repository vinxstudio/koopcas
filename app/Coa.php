<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Coa extends Model
{
    public static function getAllCoa(){
        return DB::table('coa')->get();
    }

    public static function getGLAccount($branchCode){
        return DB::table('coa')
        ->select('COAID','COADesc','COAacct_sum','COAacct_tag','COAacct_lvl')
        ->where('COABR_CODE','=',$branchCode)
        ->where('COAacct_tag','=','D')
        ->where(function($query){
            $query->where('COAisdisabled','=','0')
                  ->orWhereNull('COAisdisabled');
        })
        ->get();
    }
}
