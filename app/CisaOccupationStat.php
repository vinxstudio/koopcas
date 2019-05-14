<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaOccupationStat extends Model
{
    public static function getAllCisaOccupationStat()
    {
        return DB::table('cisa_occupationstat')->get();
    }
}
