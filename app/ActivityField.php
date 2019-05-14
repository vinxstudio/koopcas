<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ActivityField extends Model
{
    public static function getAllActivityField() 
    {
        return DB::table('actvtfield')->get();
    }
}
