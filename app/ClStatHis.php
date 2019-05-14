<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ClStatHis extends Model
{
    public static function getAllClStatHisById($clientId){
        return DB::table('clstathis')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
