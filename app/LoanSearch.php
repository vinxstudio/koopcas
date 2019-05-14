<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanSearch extends Model
{
    public static function getClientById($term){
        return DB::table('client as c')
                   ->join('clienttype as ct', function($join){
                       $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                   })
                   ->join('acctstat as as', function($join){
                       $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                   })
                   ->where('c.ClientID', '=', $term)
                   ->orWhere('c.FName', 'like', '%'.$term.'%')
                   ->orWhere('c.LName', 'like', '%'.$term.'%')
                   ->get();
    }
}
