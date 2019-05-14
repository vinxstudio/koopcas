<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvBrand extends Model
{
    public static function getAllInvBrand(){
        return DB::table('inv_brand')->get();
    }
}
