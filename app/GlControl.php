<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class GlControl extends Model
{
    public static function getAllGlControl(){
        return DB::table('glcontrol')->get();
    }
}
