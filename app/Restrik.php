<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Restrik extends Model
{
    public static function getAllRestrik()
    {
        return DB::table('restrik')->get();
    }
}
