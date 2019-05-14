<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvSttStatus extends Model
{
    public static function getAllInvSttStatus(){
        return DB::table('inv_sttstatus')->get();
    }
}
