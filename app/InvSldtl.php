<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvSldtl extends Model
{
    public static function getAllInvSldtl(){
        return DB::table('inv_sldtl')->get();
    }
}
