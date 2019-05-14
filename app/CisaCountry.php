<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaCountry extends Model
{
    public static function getAllCisaCountry(){
        return DB::table('cisa_country')->get();
    }
}
