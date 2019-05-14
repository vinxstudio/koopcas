<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaContactType extends Model
{
    public static function getAllCisaContactType()
    {
        return DB::table('cisa_contacttype')->get();
    }
}
