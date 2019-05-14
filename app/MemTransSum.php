<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MemTransSum extends Model
{
    public static function getAllMemTransSumById($trClientId){
        return DB::table('mem_transsum')
        ->where('TR_CLIENTID', '=', $trClientId)
        ->paginate(10);
    }
}
