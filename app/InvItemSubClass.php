<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvItemSubClass extends Model
{
    public static function getAllInvItemSubClass(){
        return DB::table('inv_itemsubclass')->get();
    }
}
