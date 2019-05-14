<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Rating extends Model
{
    public static function getAllRating(){
        return DB::table('rating')->get();
    }
}
