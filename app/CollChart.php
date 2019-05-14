<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CollChart extends Model
{
    public static function getAllCollChart(){
        return DB::table('collchart')->get();
    }
}
