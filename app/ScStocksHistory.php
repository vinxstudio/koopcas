<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ScStocksHistory extends Model
{
    public static function getAllScStocksHistoryById($scHisClientId){
        return DB::table('sc_stocks_history')
        ->where('SC_HISclient_ID', '=', $scHisClientId)
        ->paginate(10);
    }
}
