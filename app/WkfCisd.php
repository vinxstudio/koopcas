<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkfCisd extends Model
{
    public static function getAllWkfCisdById($clientId){
        return DB::table('wkfcisd')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
