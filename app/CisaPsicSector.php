<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaPsicSector extends Model
{
    public static function getAllCisaPsicSector(){
        return DB::table('cisa_psicsector')->get();
    }
}
