<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CoMaker extends Model
{
    public static function getAllCoMakerById($clientId)
        {
            return DB::table('comaker as a')
                       ->join('client as c', function($join){
                            $join->on('a.ClientIDCoMaker', '=', 'c.ClientID');
                       })
                       ->join('loanpurpose as los', function($join){
                        $join->on('c.AccountStatus', '=', 'los.LoanPurposeID');
                       })
                       ->join('baltype as bas', function($join){
                        $join->on('c.AccountStatus', '=', 'bas.BalTypeID');
                       })
                       ->join('acctstat as acs', function($join){
                        $join->on('c.AccountStatus', '=', 'acs.AcctStatID');
                       })
                       ->where('a.ClientIDCoMaker', '=', $clientId)
                       ->paginate(10);
        }
}