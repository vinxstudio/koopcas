<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPrices extends Model
{
    public static function getAllInvPrices(){
        return DB::table('inv_prices')->get();
    }
}
