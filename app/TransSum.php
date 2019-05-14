<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TransSum extends Model
{
    public static function getAllTransSumById($trClientId){
        return DB::table('transsum')
        ->where('TR_CLIENTID', '=', $trClientId)
        ->paginate(10);
    }

    public static function getLastCtlNo()
    {
        return DB::table('transsum')
                    ->select('TR_CTLNO')
                    ->orderBy('TR_CTLNO', 'desc')
                    ->limit(1)
                    ->get();
    }

    public static function getLastTrDocNo()
    {
        return DB::table('transsum')
                    ->select('TR_DOCNO')
                    ->orderBy('TR_DOCNO', 'desc')
                    ->limit(1)
                    ->get();
    }

    public static function getLastTrId()
    {
        return DB::table('transsum')
                    ->select('TR_ID')
                    ->orderBy('TR_ID', 'desc')
                    ->limit(1)
                    ->get();
    }

    public static function countTranssum(){
        return DB::table('transsum')->count();
    }

    public static function getTransSumById($trCode, $trYear, $trCtlNo, $trDocNo){
        return DB::table('transsum as t')
                        ->leftJoin('client as c', 't.TR_CLIENTID', '=', 'c.ClientID')
                        ->leftJoin('transtype as tt', 't.TR_CODE', '=', 'tt.TransTypeID')
                        ->where('t.TR_CODE', '=', $trCode)
                        ->where('t.TR_YEAR', '=', $trYear)
                        ->where('t.TR_CTLNO', '=', $trCtlNo)
                        ->where('t.TR_DOCNO', '=', $trDocNo)
                        ->get();
    }

    public static function insertTrunsSum($trBrCode, $trYear, $trModule, $trCode, $trCtlNo, $trDocNo, $invTrCtlNo,
    $trDate, $trTime, $trClientId, $batchNo, $explanation, $clientName, $andorName, $isFo, $DateTimeAdded, $cashPayment, 
    $creditPayment, $pointsPayment){
        return DB::table('transsum')->insert(
            [
                'TR_BRCODE' => $trBrCode,
                'TR_YEAR' => $trYear,
                'TR_MODULE' => $trModule,
                'TR_CODE' => $trCode,
                'TR_CTLNO' => $trCtlNo,
                'TR_DOCNO' => $trDocNo,
                'INVTR_CTLNO' => $invTrCtlNo,
                'TR_DATE' => $trDate,
                'TR_TIME' => $trTime,
                'TR_CLIENTID' => $trClientId,
                'BATCH_NO' => $batchNo,
                'EXPLANATION' => $explanation,
                'CLIENTNAME' => $clientName,
                'ANDOR_NAME' => $andorName,
                'IS_FO' => $isFo,
                'DATETIMEADDED' => $DateTimeAdded,
                'CASHPAYMENT' => $cashPayment,
                'CREDITPAYMENT' => $creditPayment,
                'POINTSPAYMENT' => $pointsPayment,
            ]
        );
    }

    public static function editTransSum($trBrCode, $trYear, $trModule, $trCode, $trCtlNo, $trDocNo, $invTrCtlNo,
    $trDate, $trTime, $trClientId, $batchNo, $explanation, $clientName, $andorName, $isFo, $DateTimeAdded, $cashPayment, 
    $creditPayment, $pointsPayment){
        return DB::table('transsum')->where('TR_CODE', $trCode)->where('TR_YEAR', $trYear)
                    ->where('TR_CTLNO', $trCtlNo)->where('TR_DOCNO', $trDocNo)->update(
                        [
                            'TR_YEAR' => $trYear,
                            'TR_DOCNO' => $trDocNo,
                            'INVTR_CTLNO' => $invTrCtlNo,
                            'TR_DATE' => $trDate,
                            'TR_TIME' => $trTime,
                            'TR_CLIENTID' => $trClientId,
                            'BATCH_NO' => $batchNo,
                            'EXPLANATION' => $explanation,
                            'CLIENTNAME' => $clientName,
                            'ANDOR_NAME' => $andorName,
                            'IS_FO' => $isFo,
                            'DATETIMEADDED' => $DateTimeAdded,
                            'CASHPAYMENT' => $cashPayment,
                            'CREDITPAYMENT' => $creditPayment,
                            'POINTSPAYMENT' => $pointsPayment,
                        ]
        );
    }
}
