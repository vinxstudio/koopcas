<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AttEvents extends Model
{
    public static function getAllAttEvents(){
        return DB::table('attevents')->get();
    }
}
