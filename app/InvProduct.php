<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvProduct extends Model
{
    public static function getAllInvProduct(){
        return DB::table('inv_product')->get();
    }
}
