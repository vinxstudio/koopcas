<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPidtl extends Model
{
    public static function getAllInvPidtl(){
        return DB::table('inv_pidtl')->get();
    }
}
