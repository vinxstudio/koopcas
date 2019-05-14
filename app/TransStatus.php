<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TransStatus extends Model
{
    public static function getAllTransStatus(){
        return DB::table('transstatus')->get();
    }
}
