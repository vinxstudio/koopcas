<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Conn extends Model
{
    public static function getAllConn(){
        return DB::table('conn')->get();
    }   
}
