<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SavClass extends Model
{
    public static function getAllSavclass(){
        return DB::table('savclass')->get();
    }
}
