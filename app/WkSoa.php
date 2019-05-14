<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkSoa extends Model
{
    public static function getAllWkSoaById($clientId){
        return DB::table('wksoa')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
