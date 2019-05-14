<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TimeDepositSearch extends Model
{
    public static function getAllTdById($clientIdTd){
        return DB::table('client as c')
                   ->join('clienttype as ct', function($join){
                       $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                   })
                   ->join('acctstat as as', function($join){
                       $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                   })
                   ->where('c.ClientID', '=', $clientIdTd)
                   ->get();
    }
}
