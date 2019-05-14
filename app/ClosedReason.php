<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ClosedReason extends Model
{
    public static function getAllClosedReasons()
    {
        return DB::table('closedreason')->get();
    }
}
