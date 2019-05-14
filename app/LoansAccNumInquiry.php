<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoansAccNumInquiry extends Model
{
    public static function getLoansAccount($clientId,$branchCode){
        return DB::table('loan')
        ->select('ClientIDLoan','LoanBR_CODE','sltype.SLTypeM_DESC2 as DESCR','LoanREF_NO','LoanTR_DATE as TR_DATE','LoanPAMT','LoanSLC_CODE as SLC_CODE','LoanSLT_CODE as SLT_CODE')
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeBR_CODE','=','LoanBR_CODE');
            $join->on('sltype.SLTypeSLC_CODE','=','LoanSLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','LoanSLT_CODE');
            })
        ->where('ClientIDLoan','=',$clientId)
        ->where('LoanBR_CODE','=',$branchCode)
        ->where('sltype.SLTypeBR_CODE','=',$branchCode)
        ->orderBy('TR_DATE','desc')
        ->get();
    }

    public static function getLoanAccount($clientId,$branchCode,$refNo,$slcCode,$sltCode){
        return DB::table('loan')
        ->select(
            'LoanBR_CODE',
            'LoanSLC_CODE',
            'LoanSLT_CODE',
            'LoanREF_NO',
            'ClientIDLoan',
            'LoanTR_DATE',
            'sltype.SLTypeM_DESC2 as LOANTYPE',
            'LoanPAMT',
            'LoanMAT_DATE',
            'LoanTERMS',
            'term.TermDesc as TERMDESC',
            'paymentmodePRIN.PaymentModeDesc as PRINPAYMODE',
            'LoanINT_RATE',
            'amortype.AmorTypeDesc as AMORTIZATIONTYPE',
            'paymentmodeINT.PaymentModeDesc as INTPAYMODE',
            'LoanPEN_RATE',
            'paymentmodePEN.PaymentModeDesc as PENPAYMODE')
        ->leftJoin('term',function($join){
            $join->on('term.TermID','=','LoanTERM_PERD');})
        ->leftJoin('paymentmode as paymentmodePRIN',function($join){
            $join->on('paymentmodePRIN.PaymentModeID','=','LoanPPMT_MODE');})
        ->leftJoin('paymentmode as paymentmodeINT',function($join){
            $join->on('paymentmodeINT.PaymentModeID','=','LoanIPMT_MODE');})
        ->leftJoin('paymentmode as paymentmodePEN',function($join){
            $join->on('paymentmodePEN.PaymentModeID','=','LoanPEN_MODE');})
        ->leftJoin('amortype',function($join){
            $join->on('amortype.AmorTypeID','=','LoanAMORTYPE');})
        ->leftJoin('sltype',function($join){
            $join->on('SLTypeBR_CODE','=','LoanBR_CODE');
            $join->on('SLTypeSLC_CODE','=','LoanSLC_CODE');
            $join->on('SLTypeSLT_CODE','=','LoanSLT_CODE');
        })   
        ->where('ClientIDLoan','=',$clientId)
        ->where('LoanBR_CODE','=',$branchCode)
        ->where('LoanREF_NO','=',$refNo)
        ->where('LoanSLC_CODE','=',$slcCode)
        ->where('LoanSLT_CODE','=',$sltCode)
        ->get();
    }
}
