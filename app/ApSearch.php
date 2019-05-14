<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ApSearch extends Model
{
    public static function getApById($clientIdAp)
    {
        return DB::table('ap as a')
                    ->join('client as c', function($join){
                        $join->on('a.ClientIDAP', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join) {
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as acs', function($join){
                        $join->on('c.AccountStatus', '=', 'acs.AcctStatID');
                    })
                    ->where('a.ClientIDAP', '=', $clientIdAp)
                    ->get();
    }
}
