<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class UpdTag extends Model
{
    public static function getAllUpdTag(){
        return DB::table('updtag')->get();
    }
}
