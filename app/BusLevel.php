<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BusLevel extends Model
{
    public static function getAllBusLevel()
    {
        return DB::table('buslevel')->get();
    }
}
