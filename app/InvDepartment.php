<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvDepartment extends Model
{
    public static function getAllInvDepartment(){
        return DB::table('inv_department')->get();
    }
}
