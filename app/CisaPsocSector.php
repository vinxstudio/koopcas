<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaPsocSector extends Model
{
    public static function getAllCisaPsocSector(){
        return DB::table('cisa_psocsector')->get();
    }
}
