<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CtsType extends Model
{
    public static function getAllCtsType()
    {
        return DB::table('cts_type')->get();
    }

    public static function getCtsType()
    {
        return DB::table('cts_type')
        ->whereRaw('LOCATE("12",CTS_TypeActive)<>0')
        ->get();
    }
}
