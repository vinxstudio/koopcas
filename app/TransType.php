<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TransType extends Model
{
    public static function getAllTransType(){
        return DB::table('transtype')->get();
    }

    public static function getTransTypeByTransModule($transModule)
    {
        return DB::table('transtype')
                   ->where('TransTypeModule', '=', $transModule)
                   ->get();
    }

    public static function getTransTypeForLoan()
    {
        return DB::table('transtype')
                   ->where('TransTypeID', '=', "1")
                   ->orWhere('TransTypeID', '=', "21")
                   ->orWhere('TransTypeID', '=', "22")
                   ->get();
    }
}
