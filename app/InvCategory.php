<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvCategory extends Model
{
    public static function getAllInvCategory(){
        return DB::table('inv_category')->get();
    }
}
