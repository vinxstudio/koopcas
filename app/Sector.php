<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sector extends Model
{
    public static function getAllSectors()
    {
        return DB::table('sector')->get();
    }
}
