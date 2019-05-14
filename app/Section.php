<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Section extends Model
{
    public static function getAllSection(){
        return DB::table('section')->get();
    }
}
