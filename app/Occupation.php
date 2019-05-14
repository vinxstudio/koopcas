<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Occupation extends Model
{
    public static function getAllOccupations()
    {
        return DB::table('occu')->get();
    }
}
