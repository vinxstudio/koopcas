<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaPrimaryId extends Model
{
    public static function getAllCisaPrimaryId()
    {
        return DB::table('cisa_primaryid')->get();
    }
}
