<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SemCond extends Model
{
    public static function getAllSemCond(){
        return DB::table('semcond')->get();
    }
}
