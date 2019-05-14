<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkfCaid extends Model
{
    public static function getAllWkfCaidById($clientId){
        return DB::table('wkfcaid')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
