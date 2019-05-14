<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ReqCode extends Model
{
    public static function getAllReqCode(){
        return DB::table('reqcode')->get();
    }
}
