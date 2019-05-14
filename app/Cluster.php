<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cluster extends Model
{
    public static function getAllCluster(){
        return DB::table('cluster')->get();
    }
}
