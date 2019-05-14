<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SlSum extends Model
{
    public static function getAllSlSumById($slClientId){
        return DB::table('slsum')
        ->where('SL_CLIENTID', '=', $slClientId)
        ->paginate(10);
    }
}
