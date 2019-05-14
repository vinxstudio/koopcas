<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvSttSum extends Model
{
    public static function getAllInvSttSum(){
        return DB::table('inv_sttsum')->get();
    }
}
