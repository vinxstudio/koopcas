<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkfPif extends Model
{
    public static function getAllWkfPifById($clientId){
        return DB::table('wkfpif')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
