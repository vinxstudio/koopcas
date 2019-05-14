<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class JobPosition extends Model
{
    public static function getAllJobPosition(){
        return DB::table('jobposition')->get();
    }
}
