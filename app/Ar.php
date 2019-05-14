<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Ar extends Model
{
    public static function getAllArById($clientIdAr){
        return DB::table('ar as a')
                    ->join('client as c', function($join){
                        $join->on('a.ClientIDAR', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->join('slclass as slc',function($join){
                        $join->on('slc.SLClassID','=','a.ARSLC_CODE');
                    })
                    ->where('a.ClientIDAR', '=', $clientIdAr)
                    ->get();
    }

    public static function insertAr($arBrCode, $arSlcCode, $arSltCode, $arRefNo, $clientIdAr, $arClass, $arPurpose, $arPamt, $arStatus, $arEncumb, $arTrDate,
    $arTerms, $arTermPerd, $arPpmtMode, $arPpmtMfac, $arPpmtMod2, $arIntRate, $arAmorType, $arDimbFreq, $arIpmtMode, $arIpmtMfac, $arIpmtMod2, $arPenRate, $arPenMode,
    $arPenMfac, $arPenMod2, $arDdFlag, $arIntGp, $arPrinGp, $arFidDate, $arFpdDate, $arMatDate, $arNdFlag, $arXxrefNo, $ardIssued, $arCrLimit, $arMClass, $arAcctOff,
    $arRestRuct, $arXSltCode, $arXRefNo, $arCollType, $arCollAmt, $arCollDesc, $arRemarks, $arUpdDateTime, $arUpdUser, $arCbuAmt, $arSavAmt, $arCi, $arPenGp, $arPrepaidPymts,
    $arIsDistributeUnpaidInt, $arCollector, $arpAmt2, $arCollectType, $arCollFee)
    {
        return DB::table('ar')->insert(
            [
                'ARBR_CODE' => $arBrCode,
                'ARSLC_CODE' => $arSlcCode,
                'ARSLT_CODE' => $arSltCode,
                'ARREF_NO' => $arRefNo,
                'ClientIDAR' => $clientIdAr,
                'ARCLASS' => $arClass,
                'ARPURPOSE' => $arPurpose,
                'ARPAMT' => $arPamt,
                'ARSTATUS' => $arStatus,
                'ARENCUMB' => $arEncumb,
                'ARTR_DATE' => $arTrDate,
                'ARTERMS' => $arTerms,
                'ARTERM_PERD' => $arTermPerd,
                'ARPPMT_MODE' => $arPpmtMode,
                'ARPPMT_MFAC' => $arPpmtMfac,
                'ARPPMT_MOD2' => $arPpmtMod2,
                'ARINT_RATE' => $arIntRate,
                'ARAMORTYPE' => $arAmorType,
                'ARDIMB_FREQ' => $arDimbFreq,
                'ARIPMT_MODE' => $arIpmtMode,
                'ARIPMT_MFAC' => $arIpmtMfac,
                'ARIPMT_MOD2' => $arIpmtMod2,
                'ARPEN_RATE' => $arPenRate,
                'ARPEN_MODE' => $arPenMode,
                'ARPEN_MFAC' => $arPenMfac,
                'ARPEN_MOD2' => $arPenMod2,
                'ARDD_FLAG' => $arDdFlag,
                'ARINT_GP' => $arIntGp,
                'ARPRIN_GP' => $arPrinGp,
                'ARFID_DATE' => $arFidDate,
                'ARFPD_DATE' => $arFpdDate,
                'ARMAT_DATE' => $arMatDate,
                'ARND_FLAG' => $arNdFlag,
                'ARXXREF_NO' => $arXxrefNo,
                'ARDISSUED' => $ardIssued,
                'ARCRLIMIT' => $arCrLimit,
                'ARMCLASS' => $arMClass,
                'ARACCTOFF' => $arAcctOff,
                'ARRESTRUCT' => $arRestRuct,
                'ARXSLT_CODE' => $arXSltCode,
                'ARXREF_NO' => $arXRefNo,
                'ARCOLLTYPE' => $arCollType,
                'ARCOLLAMT' => $arCollAmt,
                'ARCOLLDESC' => $arCollDesc,
                'ARRemarks' => $arRemarks,
                'ARUPDDATETIME' => $arUpdDateTime,
                'ARUpdUser' => $arUpdUser,
                'ARCBUAMT' => $arCbuAmt,
                'ARSAVAMT' => $arSavAmt,
                'ARCI' => $arCi,
                'ARPENGP' => $arPenGp,
                'ARPREPAIDPYMTS' => $arPrepaidPymts,
                'ARISDISTRIBUTEUNPAIDINT' => $arIsDistributeUnpaidInt,
                'ARCOLLECTOR' => $arCollector,
                'ARPAMT2' => $arpAmt2,
                'ARCOLLECTTYPE' => $arCollectType,
                'ARCOLLFEE' => $arCollFee
            ]
        );
    }

    public static function updateArById($arBrCode, $arSlcCode, $arSltCode, $arRefNo, $clientIdAr, $arClass, $arPurpose, $arPamt, $arStatus, $arEncumb, $arTrDate,
    $arTerms, $arTermPerd, $arPpmtMode, $arPpmtMfac, $arPpmtMod2, $arIntRate, $arAmorType, $arDimbFreq, $arIpmtMode, $arIpmtMfac, $arIpmtMod2, $arPenRate, $arPenMode,
    $arPenMfac, $arPenMod2, $arDdFlag, $arIntGp, $arPrinGp, $arFidDate, $arFpdDate, $arMatDate, $arNdFlag, $arXxrefNo, $ardIssued, $arCrLimit, $arMClass, $arAcctOff,
    $arRestRuct, $arXSltCode, $arXRefNo, $arCollType, $arCollAmt, $arCollDesc, $arRemarks, $arUpdDateTime, $arUpdUser, $arCbuAmt, $arSavAmt, $arCi, $arPenGp, $arPrepaidPymts,
    $arIsDistributeUnpaidInt, $arCollector, $arpAmt2, $arCollectType, $arCollFee)
    {
        return DB::table('ar')->where('ARBR_CODE', $arBrCode)->where('ARSLC_CODE', $arSlcCode)
                    ->where('ARSLT_CODE', $arSltCode)->where('ARREF_NO', $arRefNo)
                    ->where('ClientIDAR', $clientIdAr)->update(
                        [
                            'ARBR_CODE' => $arBrCode,
                            'ARSLC_CODE' => $arSlcCode,
                            'ARSLT_CODE' => $arSltCode,
                            'ARREF_NO' => $arRefNo,
                            'ClientIDAR' => $clientIdAr,
                            'ARCLASS' => $arClass,
                            'ARPURPOSE' => $arPurpose,
                            'ARPAMT' => $arPamt,
                            'ARSTATUS' => $arStatus,
                            'ARENCUMB' => $arEncumb,
                            'ARTR_DATE' => $arTrDate,
                            'ARTERMS' => $arTerms,
                            'ARTERM_PERD' => $arTermPerd,
                            'ARPPMT_MODE' => $arPpmtMode,
                            'ARPPMT_MFAC' => $arPpmtMfac,
                            'ARPPMT_MOD2' => $arPpmtMod2,
                            'ARINT_RATE' => $arIntRate,
                            'ARAMORTYPE' => $arAmorType,
                            'ARDIMB_FREQ' => $arDimbFreq,
                            'ARIPMT_MODE' => $arIpmtMode,
                            'ARIPMT_MFAC' => $arIpmtMfac,
                            'ARIPMT_MOD2' => $arIpmtMod2,
                            'ARPEN_RATE' => $arPenRate,
                            'ARPEN_MODE' => $arPenMode,
                            'ARPEN_MFAC' => $arPenMfac,
                            'ARPEN_MOD2' => $arPenMod2,
                            'ARDD_FLAG' => $arDdFlag,
                            'ARINT_GP' => $arIntGp,
                            'ARPRIN_GP' => $arPrinGp,
                            'ARFID_DATE' => $arFidDate,
                            'ARFPD_DATE' => $arFpdDate,
                            'ARMAT_DATE' => $arMatDate,
                            'ARND_FLAG' => $arNdFlag,
                            'ARXXREF_NO' => $arXxrefNo,
                            'ARDISSUED' => $ardIssued,
                            'ARCRLIMIT' => $arCrLimit,
                            'ARMCLASS' => $arMClass,
                            'ARACCTOFF' => $arAcctOff,
                            'ARRESTRUCT' => $arRestRuct,
                            'ARXSLT_CODE' => $arXSltCode,
                            'ARXREF_NO' => $arXRefNo,
                            'ARCOLLTYPE' => $arCollType,
                            'ARCOLLAMT' => $arCollAmt,
                            'ARCOLLDESC' => $arCollDesc,
                            'ARRemarks' => $arRemarks,
                            'ARUPDDATETIME' => $arUpdDateTime,
                            'ARUpdUser' => $arUpdUser,
                            'ARCBUAMT' => $arCbuAmt,
                            'ARSAVAMT' => $arSavAmt,
                            'ARCI' => $arCi,
                            'ARPENGP' => $arPenGp,
                            'ARPREPAIDPYMTS' => $arPrepaidPymts,
                            'ARISDISTRIBUTEUNPAIDINT' => $arIsDistributeUnpaidInt,
                            'ARCOLLECTOR' => $arCollector,
                            'ARPAMT2' => $arpAmt2,
                            'ARCOLLECTTYPE' => $arCollectType,
                            'ARCOLLFEE' => $arCollFee
                        ]
        );
    }

    public static function getArById($arBrCode, $arSlcCode, $arSltCode, $arRefNo, $clientIdAr)
    {
        return DB::table('ar as a')
                    ->join('client as c', function($join){
                        $join->on('a.ClientIDAR', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->where('a.ARBR_CODE', '=', $arBrCode)
                    ->where('a.ARSLC_CODE', '=', $arSlcCode)
                    ->where('a.ARSLT_CODE', '=', $arSltCode)
                    ->where('a.ARREF_NO', '=', $arRefNo)
                    ->where('a.ClientIDAR', '=', $clientIdAr)
                    ->get();
    }

    public static function deleteArById($arBrCode, $arSlcCode, $arSltCode, $arRefNo, $clientIdAr)
    {
        return DB::table('ar')->where('ARBR_CODE', '=', $arBrCode)->where('ARSLC_CODE', '=', $arSlcCode)
                              ->where('ARSLT_CODE', '=', $arSltCode)->where('ARREF_NO', '=', $arRefNo)
                              ->where('ClientIDAR', '=', $clientIdAr)->delete();
    }
}
