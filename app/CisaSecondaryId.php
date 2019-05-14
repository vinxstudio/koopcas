<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaSecondaryId extends Model
{
    public static function getAllCisaSecondaryId(){
        return DB::table('cisa_secondaryid')->get();
    }
}
