<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkfCavg extends Model
{
    public static function getAllWkfCavgById($clientId){
        return DB::table('wkfcavg')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
