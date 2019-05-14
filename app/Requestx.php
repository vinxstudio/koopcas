<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Requestx extends Model
{
    public static function getAllRequestById($clientId){
        return DB::table('request')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
