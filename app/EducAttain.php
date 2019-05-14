<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class EducAttain extends Model
{
    public static function getAllEducAttains()
    {
        return DB::table('educattained')->get();
    }
}
