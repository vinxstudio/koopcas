<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaPsicCode extends Model
{
    public static function getAllCisaPsicCode()
        {
             return DB::table('cisa_psiccode')->get();
        }
}
