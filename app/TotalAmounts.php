<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TotalAmounts extends Model
{
    public static function getTotalLoanAmount($clientIdLoan)
    {
        return DB::table('loan')
                ->select(DB::raw('sum(LoanPAMT) as totalAmountLoan'))
                ->where('ClientIDLoan', '=', $clientIdLoan)
                ->get();
    }

    public static function getTotalArAmount($clientIdAr)
    {
        return DB::table('ar')
                ->select(DB::raw('sum(ARPAMT) as totalAmountAr'))
                ->where('ClientIDAR', '=', $clientIdAr)
                ->get();
    }

    public static function getTotalShareCapitalAmount($clientIdSc)
    {
        return DB::table('sc')
                ->select(DB::raw('sum(SCMIN_BAL) as totalAmountShareCapital '))
                ->where('ClientIDSC', '=', $clientIdSc)
                ->get();
    }
    
    public static function getTotalSavingsDepositAmount($clientIdSd)
    {
        return DB::table('sd')
                ->select(DB::raw('sum(SDMIN_BAL) as totalAmountSavingsDeposit'))
                ->where('ClientIDSD', '=', $clientIdSd)
                ->get();
    }

    public static function getTotalTimeDepositAmount($clientIdTd)
    {
        return DB::table('td')
                ->select(DB::raw('sum(TDINT_RATE) as totalAmountTimeDeposit'))
                ->where('ClientIDTD', '=', $clientIdTd)
                ->get();
    }

    public static function getTotalLedgerThisMonth()
    {
        return DB::table('balancesheet')
                ->select(DB::raw('THISMONTHx as cashInVault'))
                ->limit(1)
                ->get();
    }
}
