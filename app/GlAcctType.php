<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class GlAcctType extends Model
{
    public static function getAllGlAcctType(){
        return DB::table('glaccttype')->get();
    }
}
