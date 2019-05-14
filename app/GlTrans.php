<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class GlTrans extends Model
{
    public static function getAllGlTrans(){
        return DB::table('gltrans')->get();
    }
}
