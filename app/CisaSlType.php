<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaSlType extends Model
{
    public static function getAllCisaSlType(){
        return DB::table('cisa_sltype')->get();
    }
}
