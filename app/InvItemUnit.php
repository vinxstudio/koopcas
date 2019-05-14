<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvItemUnit extends Model
{
    public static function getAllInvItemUnit(){
        return DB::table('inv_itemunit')->get();
    }
}
