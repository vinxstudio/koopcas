<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CollateralType extends Model
{
    public static function getAllCollateralType(){
        return DB::table('collateraltype')->get();
    }
}
