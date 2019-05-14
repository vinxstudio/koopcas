<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvItemStatus extends Model
{
    public static function getAllInvItemStatus(){
        return DB::table('inv_itemstatus')->get();
    }
}
