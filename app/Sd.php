<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sd extends Model
{
    public static function getSdByClientId($id){
        return DB::table('sd as s')
            ->join('client as c', function($join){
                $join->on('s.ClientIDSD', '=', 'c.ClientID');
            })
            ->join('clienttype as ct', function($join){
                $join->on('c.ClientType', '=', 'ct.ClientTypeID');
            })
            ->join('acctstat as as', function($join){
                $join->on('c.AccountStatus', '=', 'as.AcctStatID');
            })
            ->join('slclass as slc',function($join){
            $join->on('slc.SLClassID','=','s.SDSLC_CODE');
            })
            ->where('s.ClientIDSD', '=', $id)
            ->get();
    }
    public static function getSdById($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd)
    {
        return DB::table('sd as s')
                    ->join('client as c', function($join){
                        $join->on('s.ClientIDSD', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID'    );
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    
                     ->where('s.SDBR_CODE', '=', $sdBrCode)
                     ->where('s.SDSLC_CODE', '=', $sdSlcCode)
                     ->where('s.SDSLT_CODE', '=', $sdSltCode)
                     ->where('s.SDREF_NO', '=', $sdRefNo)
                     ->where('s.ClientIDSD', '=', $clientIdSd)
                     ->get();
                }

   public static function insertSd($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd, $sdTrDate, $sdStatus, $sdMinBal,
   $sdIntRate, $sdUpdDateTime, $sdRemarks, $sdUpdUser, $sdSavClass)
   {
       return DB::table('sd')->insert(
           [
            'SDBR_CODE' => $sdBrCode,
            'SDSLC_CODE' => $sdSlcCode,
            'SDSLT_CODE' => $sdSltCode,
            'SDREF_NO' => $sdRefNo,
            'ClientIDSD' => $clientIdSd,
            'SDTR_DATE' => $sdTrDate,
            'SDSTATUS' => $sdStatus,
            'SDMIN_BAL' => $sdMinBal,
            'SDINT_RATE' => $sdIntRate,
            'SDUPDDATETIME' => $sdUpdDateTime,
            'SDREMARKS' => $sdRemarks,
            'SDUpdUser' => $sdUpdUser,
            'SDSAVCLASS' => $sdSavClass
           ]
        );
   }

    public static function updateSdById($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd, $sdTrDate, $sdStatus, $sdMinBal,
    $sdIntRate, $sdUpdDateTime, $sdRemarks, $sdUpdUser, $sdSavClass)
    {
        return DB::table('sd')->where('SDBR_CODE', $sdBrCode)->where('SDSLC_CODE', $sdSlcCode)
                            ->where('SDSLT_CODE', $sdSltCode)->where('SDREF_NO', $sdRefNo)
                            ->where('ClientIDSD', $clientIdSd)->update(
                                [
                                    'SDTR_DATE' => $sdTrDate,
                                    'SDSTATUS' => $sdStatus,
                                    'SDMIN_BAL' => $sdMinBal,
                                    'SDINT_RATE' => $sdIntRate,
                                    'SDUPDDATETIME' => $sdUpdDateTime,
                                    'SDREMARKS' => $sdRemarks,
                                    'SDUpdUser' => $sdUpdUser,
                                    'SDSAVCLASS' => $sdSavClass
                                ]
        );
    }

    public static function deleteSdById($sdBrCode, $sdSlcCode, $sdSltCode, $sdRefNo, $clientIdSd)
    {
        return DB::table('sd')->where('SDBR_CODE', '=', $sdBrCode)->where('SDSLC_CODE', '=', $sdSlcCode)
                                ->where('SDSLT_CODE', '=', $sdSltCode)->where('SDREF_NO', '=', $sdRefNo)
                                ->where('ClientIDSD', '=', $clientIdSd)->delete();
    }
    
    public static function getRefNoLastId()
    {
        return DB::table('sd')
                    ->select('SDREF_NO')
                    ->orderBy('SDREF_NO', 'desc')
                    ->limit(1)
                    ->get();
    }
}
