<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AttStatus extends Model
{
    public static function getAllAttStatus(){
        return DB::table('attstatus')->get();
    }
}
