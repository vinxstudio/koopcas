<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Coac extends Model
{
    public static function getAllCoac(){
        return DB::table('coac')->get();
    }
}
