<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BusStatus extends Model
{
    public static function getAllBusStatuses()
    {
        return DB::table('busstatus')->get();
    }
}
