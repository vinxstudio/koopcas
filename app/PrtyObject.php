<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PrtyObject extends Model
{
    public static function getAllPrtyObject(){
        return DB::table('prtyobject')->get();
    }
}
