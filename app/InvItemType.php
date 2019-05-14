<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvItemType extends Model
{
    public static function getAllInvItemType(){
        return DB::table('inv_itemtype')->get();
    }
}
