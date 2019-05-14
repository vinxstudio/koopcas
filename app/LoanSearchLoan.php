<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanSearchLoan extends Model
{
    public static function getAllLoanById($clientIdLoan){
        return DB::table('loan as l')
                    ->join('client as c', function($join){
                        $join->on('l.ClientIDLoan', '=', 'c.ClientID');
                    })
                    ->where('l.ClientIDLoan', '=', $clientIdLoan)
                    ->paginate(10);
    }
}
