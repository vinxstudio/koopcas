<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TransCk extends Model
{
    public static function getAllTransCk(){
        return DB::table('transck')->get();
    }
}
