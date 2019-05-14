<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Td extends Model
{
    public static function getTdByClientId($clientIdTd)
    {
        return DB::table('td as t')
                    ->join('client as c', function($join){
                        $join->on('t.ClientIDTD', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->where('t.ClientIDTD', '=', $clientIdTd)
                    ->get();
    }
    public static function getTdById($tdBrCode, $tdSlcCode, $tdSltCode, $tdRefNo, $clientIdTd)
    {
        return DB::table('td as t')
                    ->join('client as c', function($join){
                        $join->on('t.ClientIDTD', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->where('t.TDBR_CODE', '=', $tdBrCode)
                    ->where('t.TDSLC_CODE', '=', $tdSlcCode)
                    ->where('t.TDSLT_CODE', '=', $tdSltCode)
                    ->where('t.TDREF_NO', '=', $tdRefNo)
                    ->where('t.ClientIDTD', '=', $clientIdTd)
                    ->get();
    }

    public static function insertTd($trBrCode, $tdSlcCode, $tdSltCode, $tdRefNo, $clientIdTd, $tdTrDate, $tdStatus, $tdIntRate,
    $tdTerms, $tdTermPerd, $tdMatDate, $tdCertNum, $tdUpdDateTime, $tdRemarks, $tdUpdUser, $tdRoSlcCode,  $tdRoSltCode, $tdRoAcctCode)
    {
        return DB::table('td')->insert(
            [
                'TDBR_CODE' => $trBrCode,
                'TDSLC_CODE' => $tdSlcCode,
                'TDSLT_CODE' => $tdSltCode,
                'TDREF_NO' => $tdRefNo,
                'ClientIDTD' => $clientIdTd,
                'TDTR_DATE' => $tdTrDate,
                'TDSTATUS' => $tdStatus,
                'TDINT_RATE' => $tdIntRate,
                'TDTERMS' => $tdTerms,
                'TDTERM_PERD' => $tdTermPerd,
                'TDMAT_DATE' => $tdMatDate,
                'TDCERT_NUM' => $tdCertNum,
                'TDUPDDATETIME' => $tdUpdDateTime,
                'TDREMARKS' => $tdRemarks,
                'TDUpdUser' => $tdUpdUser,
                'TDRO_SLC_CODE' => $tdRoSlcCode,
                'TDRO_SLT_CODE' => $tdRoSltCode,
                'TDRO_ACCTCODE' => $tdRoAcctCode
            ]
        );
    }

    public static function updateTdById($trBrCode, $tdSlcCode, $tdSltCode, $tdRefNo, $clientIdTd, $tdTrDate, $tdStatus, $tdIntRate,
    $tdTerms, $tdTermPerd, $tdMatDate, $tdCertNum, $tdUpdDateTime, $tdRemarks, $tdUpdUser, $tdRoSlcCode,  $tdRoSltCode, $tdRoAcctCode)
    {
        return DB::table('td')->where('TDBR_CODE', $trBrCode)->where('TDSLC_CODE', $tdSlcCode)
                            ->where('TDSLT_CODE', $tdSltCode)->where('TDREF_NO', $tdRefNo)
                            ->where('ClientIDTD', $clientIdTd)->update(
                                [
                                    'TDTR_DATE' => $tdTrDate,
                                    'TDSTATUS' => $tdStatus,
                                    'TDINT_RATE' => $tdIntRate,
                                    'TDTERMS' => $tdTerms,
                                    'TDTERM_PERD' => $tdTermPerd,
                                    'TDMAT_DATE' => $tdMatDate,
                                    'TDCERT_NUM' => $tdCertNum,
                                    'TDUPDDATETIME' => $tdUpdDateTime,
                                    'TDREMARKS' => $tdRemarks,
                                    'TDUpdUser' => $tdUpdUser,
                                    'TDRO_SLC_CODE' => $tdRoSlcCode,
                                    'TDRO_SLT_CODE' => $tdRoSltCode,
                                    'TDRO_ACCTCODE' => $tdRoAcctCode
                                ]
        );
    }

    public static function deleteTdById($tdBrCode, $tdSlcCode, $tdSltCode, $tdRefNo, $clientIdTd)
    {
        return DB::table('td')->where('TDBR_CODE', '=', $tdBrCode)->where('TDSLC_CODE', '=', $tdSlcCode)
                                ->where('TDSLT_CODE', '=', $tdSltCode)->where('TDREF_NO', '=', $tdRefNo)
                                ->where('ClientIDTD', '=', $clientIdTd)->delete();
    }
}
