<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Osl extends Model
{
    public static function getOslById($oslBrCode, $oslSlcCode, $oslSltCode, $oslRefNo, $clientIdOsl)
    {
        return DB::table('osl as o')
                    ->join('client as c', function($join){
                        $join->on('o.ClientIDOSL', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->where('o.OSLBR_CODE', '=', $oslBrCode)
                    ->where('o.OSLSLC_CODE', '=', $oslSlcCode)
                    ->where('o.OSLSLT_CODE', '=', $oslSltCode)
                    ->where('o.OSLREF_NO', '=', $oslRefNo)
                    ->where('o.ClientIDOSL', '=', $clientIdOsl)
                    ->get();
    }

    public static function insertOsl($oslBrCode, $oslSlcCode, $oslSltCode, $oslRefNo, $clientIdOsl, $oslTrDate, $oslPamt,
    $oslStatus, $oslUpdDateTime, $oslRemarks, $oslUpdUser)
    {
        return DB::table('osl')->insert(
            [
                'OSLBR_CODE' => $oslBrCode,
                'OSLSLC_CODE' => $oslSlcCode,
                'OSLSLT_CODE' => $oslSltCode,
                'OSLREF_NO' => $oslRefNo,
                'ClientIDOSL' => $clientIdOsl,
                'OSLTR_DATE' => $oslTrDate,
                'OSLPAMT' => $oslPamt,
                'OSLSTATUS' => $oslStatus,
                'OSLUPDDATETIME' => $oslUpdDateTime,
                'OSLREMARKS' => $oslRemarks,
                'OSLUpdUser' => $oslUpdUser
            ]
        );
    }

    public static function updateOsl($oslBrCode, $oslSlcCode, $oslSltCode, $oslRefNo, $clientIdOsl, $oslTrDate, $oslPamt,
    $oslStatus, $oslUpdDateTime, $oslRemarks, $oslUpdUser)
    {
        return DB::table('osl')->where('OSLBR_CODE', $oslBrCode)->where('OSLSLC_CODE', $oslSlcCode)
                    ->where('OSLSLT_CODE', $oslSltCode)->where('OSLREF_NO', $oslRefNo)
                    ->where('ClientIDOSL', $clientIdOsl)->update(
                    [
                        'OSLBR_CODE' => $oslBrCode,
                        'OSLSLC_CODE' => $oslSlcCode,
                        'OSLSLT_CODE' => $oslSltCode,
                        'OSLREF_NO' => $oslRefNo,
                        'ClientIDOSL' => $clientIdOsl,
                        'OSLTR_DATE' => $oslTrDate,
                        'OSLPAMT' => $oslPamt,
                        'OSLSTATUS' => $oslStatus,
                        'OSLUPDDATETIME' => $oslUpdDateTime,
                        'OSLREMARKS' => $oslRemarks,
                        'OSLUpdUser' => $oslUpdUser
                    ]
        );
    }

    public static function deleteOslById($oslBrCode, $oslSlcCode, $oslSltCode, $oslRefNo, $clientIdOsl)
    {
        return DB::table('osl')->where('OSLBR_CODE', '=', $oslBrCode)->where('OSLSLC_CODE', '=', $oslSlcCode)
                                ->where('OSLSLT_CODE', '=', $oslSltCode)->where('OSLREF_NO', '=', $oslRefNo)
                                ->where('ClientIDOSL', '=', $clientIdOsl)->delete();
    }

}
