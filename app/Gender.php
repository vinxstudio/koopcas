<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Gender extends Model
{
    public static function getAllGenders()
    {
        return DB::table('gender')->get();
    }
}
