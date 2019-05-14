<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPiStatus extends Model
{
    public static function getAllInvPiStatus(){
        return DB::table('inv_pistatus')->get();
    }
}
