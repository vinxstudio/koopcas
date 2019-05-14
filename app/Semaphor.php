<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Semaphor extends Model
{
    public static function getAllSemaphor(){
        return DB::table('semaphor')->get();
    }
}
