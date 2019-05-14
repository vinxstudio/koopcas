<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class OslSearch extends Model
{
    public static function getOslById($clientIdOsl)
    {
        return DB::table('osl as o')
                    ->join('client as c', function($join){
                        $join->on('o.ClientIDOSL', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join) {
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as acs', function($join){
                        $join->on('c.AccountStatus', '=', 'acs.AcctStatID');
                    })
                    ->where('o.ClientIDOSL', '=', $clientIdOsl)
                    ->get();
    }
}
