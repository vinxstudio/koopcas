<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPoSum extends Model
{
    public static function getAllInvPoSum(){
        return DB::table('inv_posum')->get();
    }
}
