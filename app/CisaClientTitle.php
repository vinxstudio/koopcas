<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaClientTitle extends Model
{
    public static function getAllCisaClientTitle()
    {
        return DB::table('cisa_clienttitle')->get();
    }
}
