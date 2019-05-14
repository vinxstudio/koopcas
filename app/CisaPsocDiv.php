<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaPsocDiv extends Model
{
    public static function getAllCisaPsocDiv(){
        return DB::table('cisa_psocdiv')->get();
    }
}
