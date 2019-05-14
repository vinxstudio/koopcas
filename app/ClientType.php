<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ClientType extends Model
{
    public static function getAllClientType(){
        return DB::table('clienttype')->get();
    }
}
