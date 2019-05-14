<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Holidays extends Model
{
    public static function getAllHolidays(){
        return DB::table('holidays')->get();
    }
}
