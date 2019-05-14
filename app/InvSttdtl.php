<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvSttdtl extends Model
{
    public static function getAllInvSttdtl(){
        return DB::table('inv_sttdtl')->get();
    }
}
