<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Ap extends Model
{

    public static function getApById($apBrCode, $apSlcCode, $apSltCode, $apRefNo, $clientIdAp)
    {
        return DB::table('ap as a')
                    ->join('client as c', function($join){
                        $join->on('a.ClientIDAP', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->where('a.APBR_CODE', '=', $apBrCode)
                    ->where('a.APSLC_CODE', '=', $apSlcCode)
                    ->where('a.APSLT_CODE', '=', $apSltCode)
                    ->where('a.APREF_NO', '=', $apRefNo)
                    ->where('a.ClientIDAP', '=', $clientIdAp)
                    ->get();
    }

    public static function insertAp($apBrCode, $apSlcCode, $apSltCode, $apRefNo, $clientIdAp, $apTrDate, $apPamt, $apStatus, $apTerms, 
    $apTermPerd, $apPpmtMode, $apPpmtMfac, $apPpmtMod2, $apDdFlag, $apFpdDate, $apMatDate, $apUpdDateTime, $apAmortzn, $apRemarks,
    $apUpdUser, $aplSlcCode, $aplSltCode, $aplRefNo)
    {
        return DB::table('ap')->insert(
            [
                'APBR_CODE' => $apBrCode,
                'APSLC_CODE' => $apSlcCode,
                'APSLT_CODE' => $apSltCode,
                'APREF_NO' => $apRefNo,
                'ClientIDAP' => $clientIdAp,
                'APTR_DATE' => $apTrDate,
                'APPAMT' => $apPamt,
                'APSTATUS' => $apStatus,
                'APTERMS' => $apTerms,
                'APTERM_PERD' => $apTermPerd,
                'APPPMT_MODE' => $apPpmtMode,
                'APPPMT_MFAC' => $apPpmtMfac,
                'APPPMT_MOD2' => $apPpmtMod2,
                'APDD_FLAG' => $apDdFlag,
                'APFPD_DATE' => $apFpdDate,
                'APMAT_DATE' => $apMatDate,
                'APUPDDATETIME' => $apUpdDateTime,
                'APAMORTZN' => $apAmortzn,
                'APRemarks' => $apRemarks,
                'APUpdUser' => $apUpdUser,
                'APRO_SLC_CODE' => $aplSlcCode,
                'APRO_SLT_CODE' => $aplSltCode,
                'APRO_ACCTCODE' => $aplRefNo
            ]
        );
    }

    public static function updateAp($apBrCode, $apSlcCode, $apSltCode, $apRefNo, $clientIdAp, $apTrDate, $apPamt, $apStatus, $apTerms, 
    $apTermPerd, $apPpmtMode, $apPpmtMfac, $apPpmtMod2, $apDdFlag, $apFpdDate, $apMatDate, $apUpdDateTime, $apAmortzn, $apRemarks,
    $apUpdUser, $aplSlcCode, $aplSltCode, $aplRefNo)
    {
        return DB::table('ap')->where('APBR_CODE', $apBrCode)->where('APSLC_CODE', $apSlcCode)
                    ->where('APSLT_CODE', $apSltCode)->where('APREF_NO', $apRefNo)
                    ->where('ClientIDAP', $clientIdAp)->update(
                    [
                        'APBR_CODE' => $apBrCode,
                        'APSLC_CODE' => $apSlcCode,
                        'APSLT_CODE' => $apSltCode,
                        'APREF_NO' => $apRefNo,
                        'ClientIDAP' => $clientIdAp,
                        'APTR_DATE' => $apTrDate,
                        'APPAMT' => $apPamt,
                        'APSTATUS' => $apStatus,
                        'APTERMS' => $apTerms,
                        'APTERM_PERD' => $apTermPerd,
                        'APPPMT_MODE' => $apPpmtMode,
                        'APPPMT_MFAC' => $apPpmtMfac,
                        'APPPMT_MOD2' => $apPpmtMod2,
                        'APDD_FLAG' => $apDdFlag,
                        'APFPD_DATE' => $apFpdDate,
                        'APMAT_DATE' => $apMatDate,
                        'APUPDDATETIME' => $apUpdDateTime,
                        'APAMORTZN' => $apAmortzn,
                        'APRemarks' => $apRemarks,
                        'APUpdUser' => $apUpdUser,
                        'APRO_SLC_CODE' => $aplSlcCode,
                        'APRO_SLT_CODE' => $aplSltCode,
                        'APRO_ACCTCODE' => $aplRefNo
                    ]
        );
    }

    public static function deleteApById($apBrCode, $apSlcCode, $apSltCode, $apRefNo, $clientIdAp)
    {
        return DB::table('ap')->where('APBR_CODE', '=', $apBrCode)->where('APSLC_CODE', '=', $apSlcCode)
                                ->where('APSLT_CODE', '=', $apSltCode)->where('APREF_NO', '=', $apRefNo)
                                ->where('ClientIDAP', '=', $clientIdAp)->delete();
    }

}
