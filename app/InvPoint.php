<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPoint extends Model
{
    public static function getAllInvPoint(){
        return DB::table('inv_points')->get();
    }
}
