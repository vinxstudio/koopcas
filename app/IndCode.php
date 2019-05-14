<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class IndCode extends Model
{
    public static function getAllIndCode(){
        return DB::table('ind_code')->get();
    }
}
