<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaPsocCode extends Model
{
    public static function getAllCisaPsocCode(){
        return DB::table('cisa_psoccode')->get();
    }
}
