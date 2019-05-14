<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Religion extends Model
{
    public static function getAllReligion(){
        return DB::table('religion')->get();
    }
}
