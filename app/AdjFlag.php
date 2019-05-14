<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AdjFlag extends Model
{
    public static function getAllAdjFlag(){
        return DB::table('adjflag')->get();
    }
}
