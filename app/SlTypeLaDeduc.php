<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SlTypeLaDeduc extends Model
{
    public static function getAllSlTypeLaDeduc(){
        return DB::table('sltypeladeduc')->get();
    }
}
