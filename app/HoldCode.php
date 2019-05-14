<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class HoldCode extends Model
{
    public static function getAllHoldCode(){
        return DB::table('hold_code')->get();
    }
}
