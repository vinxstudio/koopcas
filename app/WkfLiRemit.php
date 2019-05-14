<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkfLiRemit extends Model
{
    public static function getAllWkfLiRemitById($clientId){
        return DB::table('wkfliremit')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
