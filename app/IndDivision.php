<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class IndDivision extends Model
{
    public static function getAllIndDivision(){
        return DB::table('ind_division')->get();
    }
}
