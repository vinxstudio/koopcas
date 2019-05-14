<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanAppSLRefNo extends Model
{
    public static function getLoanAcctNumberInquiry($clientId,$branchCode,$slcCode,$sltCode)
    {
        return DB::table('loan')
        ->select('LoanREF_NO as ID',
                'sltype.SLTypeM_DESC2 as DESCR',
                'LoanTR_DATE as TR_DATE',
                'LoanPAMT',
                'LoanSLC_CODE as SLC_CODE',
                'LoanSLT_CODE as SLT_CODE',
                'LoanSTATUS as STATUS')
        // ->selectRaw('IFNULL(" & luc.sqlSLBALANCE(CutOffDate) & " ,999999999999.99) AS BALANCEX')
        ->leftJoin('glcontrol',function($join){
            $join->on('glcontrol.GLControlBR_CODE','=','loan.LoanBR_CODE');
            $join->on('glcontrol.GLControlSLC_CODE','=','loan.LoanSLC_CODE');
            $join->on('glcontrol.GLControlSLT_CODE','=','loan.LoanSLT_CODE');
            // $join->on('glcontrol.GLControlSLE_CODE','=','11');
 
        })
        ->leftJoin('slsum',function($join){
            $join->on('slsum.SL_BRCODE','=','LoanBR_CODE');
            $join->on('slsum.SL_CLIENTID','=','ClientIDLoan');
            $join->on('slsum.SLC_CODE','=','LoanSLC_CODE');
            $join->on('slsum.SLT_CODE','=','LoanSLT_CODE');
            $join->on('slsum.REF_NO','=','LoanREF_NO');
            $join->on('slsum.SLE_CODE','=','GLControlSLE_CODE');
        })
        ->leftJoin('baltype',function($join){
            $join->on('baltype.BalTypeID','=','glcontrol.BAL_TYPE');
        })
        ->leftJoin('sltype',function($join){
            $join->on('LoanBR_CODE','=','sltype.SLTypeBR_CODE');
            $join->on('LoanSLC_CODE','=','sltype.SLTypeSLC_CODE');
            $join->on('LoanSLT_CODE','=','sltype.SLTypeSLT_CODE');
        })
        ->where('slsum.SLE_CODE','=','11')
        ->where('ClientIDLoan','=',$clientId)
        ->where('LoanBR_CODE','=',$branchCode)
        ->where('sltype.SLTypeBR_CODE','=',$branchCode)
        ->where('LoanSLC_CODE','=',$slcCode)
        ->where('LoanSLT_CODE','=',$sltCode)
        // ->groupBy('loan.LoanBR_CODE','loan.LoanSLC_CODE','loan.LoanSLT_CODE','loan.LoanREF_NO')
        // ->orderBy('BALANCEX' ,'desc')
        ->get();
    }

    public static function getAccountsReceivable($clientId,$branchCode,$slcCode,$sltCode)
    {
        return DB::table('ar')
        ->select('ARREF_NO as ID','sltype.SLTypeM_DESC2 as DESCR','ARTR_DATE as TR_DATE','ARPAMT','ARSLC_CODE as SLC_CODE','ARSLT_CODE as SLT_CODE','ARSTATUS as STATUS')
        //->selectRaw('IFNULL(" & luc.sqlSLBALANCE(CutOffDate) & " ,999999999999.99) AS BALANCEX,')
        ->leftJoin('glcontrol',function($join){
            $join->on('glcontrol.GLControlBR_CODE','=','ar.ARBR_CODE');
            $join->on('glcontrol.GLControlSLC_CODE','=','ar.ARSLC_CODE');
            $join->on('glcontrol.GLControlSLT_CODE','=','ar.ARSLT_CODE');
            // $join->on('glcontrol.GLControlSLE_CODE','=','11');
        })
        ->leftJoin('slsum',function($join){
            $join->on('slsum.SL_BRCODE','=','ARBR_CODE');
            $join->on('slsum.SL_CLIENTID','=','ClientIDAR');
            $join->on('slsum.SLC_CODE','=','ARSLC_CODE');
            $join->on('slsum.SLT_CODE','=','ARSLT_CODE');
            $join->on('slsum.REF_NO','=','ARREF_NO');
            $join->on('slsum.SLE_CODE','=','GLControlSLE_CODE');
        })
        ->leftJoin('baltype',function($join){
            $join->on('baltype.BalTypeID','=','glcontrol.BAL_TYPE');
        })
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeSLC_CODE','=','ARSLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','ARSLT_CODE');
        })
        ->where('slsum.SLE_CODE','=','11')
        ->where('ClientIDAR','=',$clientId)
        ->where('ARBR_CODE','=',$branchCode)
        ->where('ARSLC_CODE','=',$slcCode)
        ->where('ARSLT_CODE','=',$sltCode)
        // ->groupBy('ar.ARBR_CODE','ar.ARSLC_CODE','ar.ARSLT_CODE','ar.ARREF_NO')
        //->orderBy('BALANCEX','desc')
        ->get();
    }

    public static function getSavingsDepositAcct($clientId,$branchCode,$slcCode,$sltCode)
    {
        return DB::table('sd')
        ->select('SDREF_NO as ID','sltype.SLTypeM_DESC2 as DESCR','SDTR_DATE as TR_DATE','SDSLC_CODE as SLC_CODE','SDSLT_CODE as SLT_CODE','SDSTATUS as STATUS')
        //->selectRaw('IFNULL(" & luc.sqlSLBALANCE(CutOffDate) & " ,999999999999.99) AS BALANCEX,')
        ->leftJoin('glcontrol',function($join){
            $join->on('glcontrol.GLControlBR_CODE','=','sd.SDBR_CODE');
            $join->on('glcontrol.GLControlSLC_CODE','=','sd.SDSLC_CODE');
            $join->on('glcontrol.GLControlSLT_CODE','=','sd.SDSLT_CODE');
            // $join->on('glcontrol.GLControlSLE_CODE','=','11');
        })
        ->leftJoin('slsum',function($join){
            $join->on('slsum.SL_BRCODE','=','SDBR_CODE');
            $join->on('slsum.SL_CLIENTID','=','ClientIDSD');
            $join->on('slsum.SLC_CODE','=','SDSLC_CODE');
            $join->on('slsum.SLT_CODE','=','SDSLT_CODE');
            $join->on('slsum.REF_NO','=','SDREF_NO');
            $join->on('slsum.SLE_CODE','=','GLControlSLE_CODE');
        })
        ->leftJoin('baltype',function($join){
            $join->on('baltype.BalTypeID','=','glcontrol.BAL_TYPE');
        })
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeBR_CODE','=','SDBR_CODE');
            $join->on('sltype.SLTypeSLC_CODE','=','SDSLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','SDSLT_CODE');
        })
        ->where('slsum.SLE_CODE','=','11')
        ->where('ClientIDSD','=',$clientId)
        ->where('SDBR_CODE','=',$branchCode)
        ->where('sltype.SLTypeBR_CODE','=',$branchCode)
        ->where('SDSLC_CODE','=',$slcCode)
        ->where('SDSLT_CODE','=',$sltCode)
        ->where('SDSTATUS','<>','17')
        // ->groupBy('sd.SDBR_CODE','sd.SDSLC_CODE','sd.SDSLT_CODE','sd.SDREF_NO')
        //->orderBy('BALANCEX','desc')
        ->get();
    }

    public static function getTimeDepositAcct($clientId,$branchCode,$slcCode,$sltCode)
    {
        return DB::table('td')
        ->select('TDREF_NO as ID','sltype.SLTypeM_DESC2 as DESCR','TDTR_DATE as TR_DATE','TDSLC_CODE as SLC_CODE','TDSLT_CODE as SLT_CODE','TDSTATUS as STATUS')
        //->selectRaw(''IFNULL(" & luc.sqlSLBALANCE(CutOffDate) & " ,999999999999.99) AS BALANCEX)
        ->leftJoin('glcontrol',function($join){
            $join->on('glcontrol.GLControlBR_CODE','=','td.TDBR_CODE');
            $join->on('glcontrol.GLControlSLC_CODE','=','td.TDSLC_CODE');
            $join->on('glcontrol.GLControlSLT_CODE','=','td.TDSLT_CODE');
            // $join->on('glcontrol.GLControlSLE_CODE','=','11');
        })
        ->leftJoin('slsum',function($join){
            $join->on('slsum.SL_BRCODE','=','TDBR_CODE');
            $join->on('slsum.SL_CLIENTID','=','ClientIDTD');
            $join->on('slsum.SLC_CODE','=','TDSLC_CODE');
            $join->on('slsum.SLT_CODE','=','TDSLT_CODE');
            $join->on('slsum.REF_NO','=','TDREF_NO');
            $join->on('slsum.SLE_CODE','=','GLControlSLE_CODE');
        })
        ->leftJoin('baltype',function($join){
            $join->on('baltype.BalTypeID','=','glcontrol.BAL_TYPE');
        })
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeBR_CODE','=','TDBR_CODE');
            $join->on('sltype.SLTypeSLC_CODE','=','TDSLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','TDSLT_CODE');
        })
        ->where('slsum.SLE_CODE','=','11')
        ->where('ClientIDTD','=',$clientId)
        ->where('TDBR_CODE','=',$branchCode)
        ->where('sltype.SLTypeBR_CODE','=',$branchCode)
        ->where('TDSLC_CODE','=',$slcCode)
        ->where('TDSLT_CODE','=',$sltCode)
        ->where('TDSTATUS','<>','17')
        // ->groupBy('td.TDBR_CODE','td.TDSLC_CODE','td.TDSLT_CODE','td.TDREF_NO')
        //->orderBy('BALANCEX','desc')
        ->get();
    }

    public static function getAccountsPayableAcct($clientId,$branchCode,$slcCode,$sltCode)
    {
        return DB::table('ap')
        ->select('APREF_NO as ID',
        'sltype.SLTypeM_DESC2 as DESCR',
        'APTR_DATE as TR_DATE',
        'APSLC_CODE as SLC_CODE',
        'APSLT_CODE as SLT_CODE','APSTATUS as STATUS',
        //'(-1)*(APPAMT) AS PAMT'
        )
        //->selectRaw('IFNULL(" & luc.sqlSLBALANCE(CutOffDate) & " ,999999999999.99) AS BALANCEX')
        ->leftJoin('glcontrol',function($join){
            $join->on('glcontrol.GLControlBR_CODE','=','ap.APBR_CODE');
            $join->on('glcontrol.GLControlSLC_CODE','=','ap.APSLC_CODE');
            $join->on('glcontrol.GLControlSLT_CODE','=','ap.APSLT_CODE');
            // $join->on('glcontrol.GLControlSLE_CODE','=','11');
        })
        ->leftJoin('slsum',function($join){
            $join->on('slsum.SL_BRCODE','=','APBR_CODE');
            $join->on('slsum.SL_CLIENTID','=','ClientIDAP');
            $join->on('slsum.SLC_CODE','=','APSLC_CODE');
            $join->on('slsum.SLT_CODE','=','APSLT_CODE');
            $join->on('slsum.REF_NO','=','APREF_NO');
            $join->on('slsum.SLE_CODE','=','GLControlSLE_CODE');
        })
        ->leftJoin('baltype',function($join){
            $join->on('baltype.BalTypeID','=','glcontrol.BAL_TYPE');
        })
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeBR_CODE','=','APBR_CODE');
            $join->on('sltype.SLTypeSLC_CODE','=','APSLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','APSLT_CODE');
        })
        ->where('slsum.SLE_CODE','=','11')
        ->where('ClientIDAP','=',$clientId)
        ->where('APBR_CODE','=',$branchCode)
        ->where('sltype.SLTypeBR_CODE','=',$branchCode)
        ->where('APSLC_CODE','=',$slcCode)
        ->where('APSLT_CODE','=',$sltCode)
        // ->groupBy('ap.APBR_CODE','ap.APSLC_CODE','ap.APSLT_CODE','ap.APREF_NO')
        //->orderBy('BALANCEX','desc')
        ->get();
    }

    public static function getShareCapitalAcct($clientId,$branchCode,$slcCode,$sltCode)
    {
        return DB::table('sc')
        ->select(
            'SCREF_NO as ID','sltype.SLTypeM_DESC2 as DESCR','SCTR_DATE as TR_DATE','SCSLC_CODE as SLC_CODE','SCSLT_CODE as SLT_CODE','SCSTATUS as STATUS')
        //->selectRaw('IFNULL(" & luc.sqlSLBALANCE(CutOffDate) & " ,999999999999.99) AS BALANCEX,')
        ->leftJoin('glcontrol',function($join){
            $join->on('glcontrol.GLControlBR_CODE','=','sc.SCBR_CODE');
            $join->on('glcontrol.GLControlSLC_CODE','=','sc.SCSLC_CODE');
            $join->on('glcontrol.GLControlSLT_CODE','=','sc.SCSLT_CODE');
            // $join->on('glcontrol.GLControlSLE_CODE','=','11');
        })
        ->leftJoin('slsum',function($join){
            $join->on('slsum.SL_BRCODE','=','SCBR_CODE');
            $join->on('slsum.SL_CLIENTID','=','ClientIDSC');
            $join->on('slsum.SLC_CODE','=','SCSLC_CODE');
            $join->on('slsum.SLT_CODE','=','SCSLT_CODE');
            $join->on('slsum.REF_NO','=','SCREF_NO');
            $join->on('slsum.SLE_CODE','=','GLControlSLE_CODE');
        })
        ->leftJoin('baltype',function($join){
            $join->on('baltype.BalTypeID','=','glcontrol.BAL_TYPE');
        })
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeBR_CODE','=','SCBR_CODE');
            $join->on('sltype.SLTypeSLC_CODE','=','SCSLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','SCSLT_CODE');
        })
        ->where('slsum.SLE_CODE','=','11')
        ->where('ClientIDSC','=',$clientId)
        ->where('SCBR_CODE','=',$branchCode)
        ->where('sltype.SLTypeBR_CODE','=',$branchCode)
        ->where('SCSLC_CODE','=',$slcCode)
        ->where('SCSLT_CODE','=',$sltCode)
        ->where('SCSTATUS','<>','17')
        // ->groupBy('sc.SCBR_CODE','sc.SCSLC_CODE','sc.SCSLT_CODE','sc.SCREF_NO')
        //->orderBy('BALANCEX','desc') 
        ->get();
    }

    public static function getOtherSLAcct($clientId,$branchCode,$slcCode,$sltCode)
    {
        return DB::table('osl')
        ->select(
           'OSLREF_NO as ID',
        'sltype.SLTypeM_DESC2 as DESCR',
       'OSLTR_DATE as TR_DATE',
       'OSLSLC_CODE as SLC_CODE',
       'OSLSLT_CODE as SLT_CODE',
        'OSLSTATUS as STATUS')
        //->selectRaw('IFNULL(" & luc.sqlSLBALANCE(CutOffDate) & " ,999999999999.99) AS BALANCEX,')
        ->leftJoin('glcontrol',function($join){
            $join->on('glcontrol.GLControlBR_CODE','=','osl.OSLBR_CODE');
            $join->on('glcontrol.GLControlSLC_CODE','=','osl.OSLSLC_CODE');
            $join->on('glcontrol.GLControlSLT_CODE','=','osl.OSLSLT_CODE');
            // $join->on('glcontrol.GLControlSLE_CODE','=','11');
        })
        ->leftJoin('slsum',function($join){
            $join->on('slsum.SL_BRCODE','=','OSLBR_CODE');
            $join->on('slsum.SL_CLIENTID','=','ClientIDOSL');
            $join->on('slsum.SLC_CODE','=','OSLSLC_CODE');
            $join->on('slsum.SLT_CODE','=','OSLSLT_CODE');
            $join->on('slsum.REF_NO','=','OSLREF_NO');
            $join->on('slsum.SLE_CODE','=','GLControlSLE_CODE');
        })
        ->leftJoin('baltype',function($join){
            $join->on('baltype.BalTypeID','=','glcontrol.BAL_TYPE');
        })
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeBR_CODE','=','OSLBR_CODE');
            $join->on('sltype.SLTypeSLC_CODE','=','OSLSLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','OSLSLT_CODE');
        })
        ->where('slsum.SLE_CODE','=','11')
        ->where('ClientIDOSL','=',$clientId)
       ->where('OSLBR_CODE','=',$branchCode)
        ->where('sltype.SLTypeBR_CODE','=',$branchCode)
        ->where('OSLSLC_CODE','=',$slcCode)
       ->where('OSLSLT_CODE','=',$sltCode)
        //->whereRaw('IIf(SLC_CODE <> CStr(SLClass.MLClass), AND OSLSTATUS<>"{CTSNUM.Closed(17)}","")')
        // ->groupBy('osl.OSLBR_CODE','osl.OSLSLC_CODE','osl.OSLSLT_CODE','osl.OSLREF_NO')
        //->orderBy('BALANCEX','desc') 
        ->get();
    }




}
