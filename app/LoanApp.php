<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanApp extends Model
{
    public static function getLoanAppByid($id){
        return DB::table('loanapp')
        ->select(
            'loanapp.ID as ID',
            'loanapp.CLIENTID as CLIENTID',
            'loanapp.SLC_CODE as SLC_CODE',
            'loanapp.SLT_CODE as SLT_CODE',
            'loanapp.BR_CODE as BR_CODE',
            'loanapp.REF_NO as REF_NO',
            'client.FName as FName',
            'client.LName as LName',
            'client.MName as MName',
            'loanappstatus.M_DESC2 as M_DESC2',
            'loanapp.DOC_NO as DOC_NO',
            'loanapp.TR_DATE as TR_DATE',
            'sltype.SLTypeM_DESC2 as SLTypeM_DESC2',
            'loan.LoanPAMT as LoanPAMT',
            'loanapp.APPRVBY as APPRVBY',
            'loanapp.TR_CTLNO as TR_CTLNO',
            'loanapp.APPRV_DATE as APPRV_DATE',
            'loanapp.STATUSID as STATUSID',
            'loanapp.TR_CODE as TR_CODE',
            'loanapp.TR_CTLNO as TR_CTLNO',
            'loanapp.RTR_DATE as RTR_DATE',
            'loanapp.DEDUCGROUP as DEDUCGROUP',
            'loanapp.CIREPORT as CIREPORT',
            'loanapp.BASISRECOMM as BASISRECOMM',
            'loanapp.REMARKS as REMARKS',
            'loanapp.REPAYMENT as REPAYMENT',
            'loanapp.PROPOSAL as PROPOSAL',
            'loanapp.NPACCT_CODE as NPACCT_CODE',
            'loanapp.NPREF_NO as NPREF_NO',
            'loanapp.NPSLT_CODE as NPSLT_CODE',
            'loanapp.NPSLC_CODE as NPSLC_CODE',
            'LoanMAT_DATE',
            'LoanTERMS',
            'term.TermDesc as TERMDESC',
            'paymentmodePRIN.PaymentModeDesc as PRINPAYMODE',
            'LoanINT_RATE',
            'amortype.AmorTypeDesc as AMORTIZATIONTYPE',
            'paymentmodeINT.PaymentModeDesc as INTPAYMODE',
            'LoanPEN_RATE',
            'paymentmodePEN.PaymentModeDesc as PENPAYMODE'
        )
        ->join('loan',function($join){
            $join->on('loan.ClientIDLoan','=','loanapp.CLIENTID');
            $join->on('loan.loanREF_NO','=','loanapp.REF_NO');
        })
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
        ->leftJoin('client',function($join){
            $join->on('client.ClientID','=','loanapp.CLIENTID');
        })
        ->leftJoin('loanappstatus',function($join){
            $join->on('loanappstatus.ID','=','loanapp.STATUSID');
        })
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeSLC_CODE','=','loanapp.SLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','loanapp.SLT_CODE');
            $join->on('sltype.SLTypeBR_CODE','=','loanapp.BR_CODE');
        })
        ->whereRaw('loanapp.ID=?')->setBindings([$id])
        // ->groupBy('ID','CLIENTID')
        ->get();
    }

    public static function getAllLoanAppByStatus($status){
        return DB::table('loanapp')
        ->select(
            'loanapp.ID as ID',
            'loanapp.CLIENTID as CLIENTID',
            'loanapp.SLC_CODE as SLC_CODE',
            'loanapp.SLT_CODE as SLT_CODE',
            'loanapp.BR_CODE as BR_CODE',
            'loanapp.REF_NO as REF_NO',
            'client.FName as FName',
            'client.LName as LName',
            'client.MName as MName',
            'loanappstatus.M_DESC2 as M_DESC2',
            'loanapp.DOC_NO as DOC_NO',
            'loanapp.TR_DATE as TR_DATE',
            'sltype.SLTypeM_DESC2 as SLTypeM_DESC2',
            'loan.LoanPAMT as LoanPAMT',
            'loanapp.APPRVBY as APPRVBY',
            'loanapp.TR_CTLNO as TR_CTLNO',
            'loanapp.APPRV_DATE as APPRV_DATE',
            'loanapp.STATUSID as STATUSID',
            'loanapp.TR_CODE as TR_CODE',
            'loanapp.TR_CTLNO as TR_CTLNO',
            'loanapp.RTR_DATE as RTR_DATE',
            'loanapp.DEDUCGROUP as DEDUCGROUP',
            'loanapp.CIREPORT as CIREPORT',
            'loanapp.BASISRECOMM as BASISRECOMM',
            'loanapp.REMARKS as REMARKS',
            'loanapp.REPAYMENT as REPAYMENT',
            'loanapp.PROPOSAL as PROPOSAL',
            'loanapp.NPACCT_CODE as NPACCT_CODE',
            'loanapp.NPREF_NO as NPREF_NO',
            'loanapp.NPSLT_CODE as NPSLT_CODE',
            'loanapp.NPSLC_CODE as NPSLC_CODE',
            'LoanMAT_DATE',
            'LoanTERMS',
            'term.TermDesc as TERMDESC',
            'paymentmodePRIN.PaymentModeDesc as PRINPAYMODE',
            'LoanINT_RATE',
            'amortype.AmorTypeDesc as AMORTIZATIONTYPE',
            'paymentmodeINT.PaymentModeDesc as INTPAYMODE',
            'LoanPEN_RATE',
            'paymentmodePEN.PaymentModeDesc as PENPAYMODE'
        )
        ->join('loan',function($join){
            $join->on('loan.ClientIDLoan','=','loanapp.CLIENTID');
            $join->on('loan.loanREF_NO','=','loanapp.REF_NO');
        })
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
        ->leftJoin('client',function($join){
            $join->on('client.ClientID','=','loanapp.CLIENTID');
        })
        ->leftJoin('loanappstatus',function($join){
            $join->on('loanappstatus.ID','=','loanapp.STATUSID');
        })
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeSLC_CODE','=','loanapp.SLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','loanapp.SLT_CODE');
            $join->on('sltype.SLTypeBR_CODE','=','loanapp.BR_CODE');
        })
        ->where('STATUSID', '=' ,$status)
        // ->groupBy('ID','CLIENTID')
        ->get();
    }

    public static function insertLoanApp($brCode, $id, $slcCode, $sltCode, $refNo, $clientId, $statusId, $trDate, $trTime, $rTrDate, $encdBy,
    $apprvDate, $apprvBy, $trCode, $trCtlNo, $npSlcCode, $npSltCode, $npRefNo, $npAcctCode, $deducGroup, $docNo, $proposal, $ciReport, $basiscRecomm, $remarks, $repayment)
    {
        return DB::table('loanapp')->insert(
            [
                'BR_CODE' => $brCode,
                'ID' => $id,
                'SLC_CODE' => $slcCode,
                'SLT_CODE' => $sltCode,
                'REF_NO' => $refNo,
                'CLIENTID' => $clientId,
                'STATUSID' => $statusId,
                'TR_DATE' => $trDate,
                'TR_TIME' => $trTime,
                'RTR_DATE' => $rTrDate,
                'ENCDBY' => $encdBy,
                'APPRV_DATE' => $apprvDate,
                'APPRVBY' => $apprvBy,
                'TR_CODE' => $trCode,
                'TR_CTLNO' => $trCtlNo,
                'NPSLC_CODE' => $npSlcCode,
                'NPSLT_CODE' => $npSltCode,
                'NPREF_NO' => $npRefNo,
                'NPACCT_CODE' => $npAcctCode,
                'DEDUCGROUP' => $deducGroup,
                'DOC_NO' => $docNo,
                'PROPOSAL' => $proposal,
                'CIREPORT' => $ciReport,
                'BASISRECOMM' => $basiscRecomm,
                'REMARKS' => $remarks,
                'REPAYMENT' => $repayment
            ]
        );
    }

    public static function editLoanApp($brCode, $id, $slcCode, $sltCode, $refNo, $clientId, $statusId, $trDate, $trTime, $rTrDate, $encdBy,
    $apprvDate, $apprvBy, $trCode, $trCtlNo, $npSlcCode, $npSltCode, $npRefNo, $npAcctCode, $deducGroup, $docNo, $proposal, $ciReport, $basiscRecomm, $remarks, $repayment)
    {
        return DB::table('loanapp')->where('BR_CODE', $brCode)->where('ID', $id)->update(
            [
                'SLC_CODE' => $slcCode,
                'SLT_CODE' => $sltCode,
                'REF_NO' => $refNo,
                'CLIENTID' => $clientId,
                'STATUSID' => $statusId,
                'TR_DATE' => $trDate,
                'TR_TIME' => $trTime,
                'RTR_DATE' => $rTrDate,
                'ENCDBY' => $encdBy,
                'APPRV_DATE' => $apprvDate,
                'APPRVBY' => $apprvBy,
                'TR_CODE' => $trCode,
                'TR_CTLNO' => $trCtlNo,
                'NPSLC_CODE' => $npSlcCode,
                'NPSLT_CODE' => $npSltCode,
                'NPREF_NO' => $npRefNo,
                'NPACCT_CODE' => $npAcctCode,
                'DEDUCGROUP' => $deducGroup,
                'DOC_NO' => $docNo,
                'PROPOSAL' => $proposal,
                'CIREPORT' => $ciReport,
                'BASISRECOMM' => $basiscRecomm,
                'REMARKS' => $remarks,
                'REPAYMENT' => $repayment
            ]
        );
    }

    public static function deleteLoanApp($brCode, $id)
    {
        return DB::table('loanapp')->where('BR_CODE', '=', $brCode)->where('ID', '=', $id)->delete();
    }

    public static function countLoanApp()
    {
        return DB::table('loanapp')->count();
    }
}
