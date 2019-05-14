<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ReqStatus extends Model
{
    public static function getAllReqStatus(){
        return DB::table('reqstatus')->get();
    }
}
