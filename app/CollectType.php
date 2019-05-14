<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CollectType extends Model
{
    public static function getAllCollectType(){
        return DB::table('collecttype')->get();
    }
}
