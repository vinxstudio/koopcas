<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPiSum extends Model
{
    public static function getAllInvPiSum(){
        return DB::table('inv_pisum')->get();
    }
}
