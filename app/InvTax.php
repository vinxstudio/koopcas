<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvTax extends Model
{
    public static function getAllInvTax(){
        return DB::table('inv_tax')->get();
    }
}
