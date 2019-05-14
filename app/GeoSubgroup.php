<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class GeoSubgroup extends Model
{
    public static function getAllGeoSubgroups()
    {
        return DB::table('geo_subgroup')->get();
    }
}
