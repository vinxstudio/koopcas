<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkfSdList extends Model
{
    public static function getAllWkfSdListById($clientId){
        return DB::table('wkfsdlist')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
