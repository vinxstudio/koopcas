<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvItemClass extends Model
{
    public static function getAllInvItemClass(){
        return DB::table('inv_itemclass')->get();
    }
}
