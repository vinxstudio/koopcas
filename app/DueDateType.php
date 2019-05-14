<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class DueDateType extends Model
{
    public static function getAllDueDateType(){
        return DB::table('duedatetype')->get();
    }
}
