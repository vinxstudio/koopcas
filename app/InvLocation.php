<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvLocation extends Model
{
    public static function getAllInvLocation(){
        return DB::table('inv_location')->get();
    }
}
