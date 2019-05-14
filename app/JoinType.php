<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class JoinType extends Model
{
    public static function getAllJointTypes()
    {
        return DB::table('jnttype')->get();
    }
}
