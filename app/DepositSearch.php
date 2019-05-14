<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class DepositSearch extends Model
{
    public static function getAllSdById($term){
        // return DB::table('client as c')
        //            ->join('clienttype as ct', function($join){
        //                $join->on('c.ClientType', '=', 'ct.ClientTypeID');
        //            })
        //            ->join('acctstat as as', function($join){
        //                $join->on('c.AccountStatus', '=', 'as.AcctStatID');
        //            })
        //            ->where('c.ClientID', '=', $clientIdSd)
        //            ->get();

        return DB::table('client as c')
                   ->join('clienttype as ct', function($join) {
                       $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                   })
                   ->join('acctstat as acs', function($join){
                       $join->on('c.AccountStatus', '=', 'acs.AcctStatID');
                   })
                   ->where('c.ClientID', '=', $term)
                   ->orWhere('c.FName', 'like', '%'.$term.'%')
                   ->orWhere('c.LName', 'like', '%'.$term.'%')
                //    ->where('c.AccountStatus', '=', $status)
                //    ->orWhere('c.AccountStatus', '=', $status)
                //    ->orWhere('c.AccountStatus', '=', $status)
                   ->paginate(10);
    }
}
