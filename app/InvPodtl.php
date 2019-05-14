<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPodtl extends Model
{
    public static function getAllInvPodtl(){
        return DB::table('inv_podtl')->get();
    }
}
