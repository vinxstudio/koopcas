<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AlertLevel extends Model
{
    public static function getAllAlertLevels()
    {
        return DB::table('alertlevel')->get();
    }
}
