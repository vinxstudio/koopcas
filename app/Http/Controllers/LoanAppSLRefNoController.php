<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanAppSLRefNo;
use App\Http\Resources\LoanAppSLRefNoResource;
use DB;

class LoanAppSLRefNoController extends Controller
{
    //
    public function showLoanAccount($clientId,$branchCode,$slcCode,$sltCode)
    {
        $loanAccounts = LoanAppSLRefNo::getLoanAcctNumberInquiry($clientId,$branchCode,$slcCode,$sltCode);
        return LoanAppSLRefNoResource::collection($loanAccounts); 
    }

    public function showAccReceivable($clientId,$branchCode,$slcCode,$sltCode)
    {
        $accReceivables = LoanAppSLRefNo::getAccountsReceivable($clientId,$branchCode,$slcCode,$sltCode);
        return LoanAppSLRefNoResource::collection($accReceivables);
    }

    public function showSavingsDeposit($clientId,$branchCode,$slcCode,$sltCode)
    {
        $savingDeposits = LoanAppSLRefNo::getSavingsDepositAcct($clientId,$branchCode,$slcCode,$sltCode);
        return LoanAppSLRefNoResource::collection($savingDeposits);
    }

    public function showTimeDeposit($clientId,$branchCode,$slcCode,$sltCode)
    {
        $timeDeposits = LoanAppSLRefNo::getTimeDepositAcct($clientId,$branchCode,$slcCode,$sltCode);
        return LoanAppSLRefNoResource::collection($timeDeposits);
    }

    public function showAccPayable($clientId,$branchCode,$slcCode,$sltCode)
    {
        $accPayables = LoanAppSLRefNo::getAccountsPayableAcct($clientId,$branchCode,$slcCode,$sltCode);
        return LoanAppSLRefNoResource::collection($accPayables);
    }

    public function showShareCapital($clientId,$branchCode,$slcCode,$sltCode)
    {
        $shareCapitals = LoanAppSLRefNo::getShareCapitalAcct($clientId,$branchCode,$slcCode,$sltCode);
        return LoanAppSLRefNoResource::collection($shareCapitals);
    }

    public function showOtherSL($clientId,$branchCode,$slcCode,$sltCode)
    {
        $otherSLs = LoanAppSLRefNo::getOtherSLAcct($clientId,$branchCode,$slcCode,$sltCode);
        return LoanAppSLRefNoResource::collection($otherSLs);
    }
}
