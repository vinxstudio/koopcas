<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvAdjReason extends Model
{
    public static function getAllinvAdjReason(){
        return DB::table('inv_adjreason')->get();
    }
}
