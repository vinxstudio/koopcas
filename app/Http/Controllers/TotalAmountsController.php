<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TotalAmounts;
use App\Http\Resources\TotalAmountLoanResource;
use App\Http\Resources\TotalAmountArResource;
use App\Http\Resources\TotalAmountShareCapitalResource;
use App\Http\Resources\TotalAmountSavingsDepositResource;
use App\Http\Resources\TotalAmountTimeDepositResource;
use App\Http\Resources\CashInVaultResource;

class TotalAmountsController extends Controller
{
    
    public function loanTotal($clientIdLoan)
    {
        $loan = TotalAmounts::getTotalLoanAmount($clientIdLoan);
        return TotalAmountLoanResource::collection($loan);
    }

    public function arTotal($clientIdAr)
    {
        $ar = TotalAmounts::getTotalArAmount($clientIdAr);
        return TotalAmountArResource::collection($ar);
    }

    public function shareCapitalTotal($clientIdSc)
    {
        $sc = TotalAmounts::getTotalShareCapitalAmount($clientIdSc);
        return TotalAmountShareCapitalResource::collection($sc);
    }

    public function savingsDepositTotal($clientIdSd)
    {
        $sd = TotalAmounts::getTotalSavingsDepositAmount($clientIdSd);
        return TotalAmountSavingsDepositResource::collection($sd);
    }

    public function timeDepositTotal($clientIdTd)
    {
        $td = TotalAmounts::getTotalTimeDepositAmount($clientIdTd);
        return TotalAmountTimeDepositResource::collection($td);
    }

    public function cashInVault()
    {
        $cash = TotalAmounts::getTotalLedgerThisMonth();
        return CashInVaultResource::collection($cash);
    }
}
