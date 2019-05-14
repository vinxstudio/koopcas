<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ResType extends Model
{
    public static function getAllResType(){
        return DB::table('restype')->get();
    }
}
