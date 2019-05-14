<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CreditorType extends Model
{
    public static function getAllCreditorType(){
        return DB::table('creditortype')->get();
    }
}
