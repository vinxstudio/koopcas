<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvCommonName extends Model
{
    public static function getAllInvCommonName(){
        return DB::table('inv_commonname')->get();
    }
}
