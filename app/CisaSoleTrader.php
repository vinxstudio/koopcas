<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaSoleTrader extends Model
{
    public static function getAllCisaSoleTraderById($soleTraderClientId){
        return DB::table('cisa_soletrader as cs')
                        ->join('client as c', function($join){
                            $join->on('cs.SoleTraderClientID', '=', 'c.ClientID');
                        })
                        ->where('cs.SoleTraderClientID', '=', $soleTraderClientId )
                        ->get();
    }

    public static function getClientLastId()
    {
        return DB::table('client')
                   ->select('ClientID')
                   ->orderBy('ClientID', 'desc')
                   ->limit(1)
                   ->get();
    }

    public static function insertCisaSoleTrader($soleTraderClientID, $soleTraderBrCode, $soleTraderName, $soleTraderMStreetNo, $soleTraderMPostalCode, 
    $soleTraderMSubd, $soleTraderMBrgy, $soleTraderMCity, $soleTraderMProv, $soleTraderMHouseType, $soleTraderMOccupiedSince, $soleTraderMIdType, 
    $soleTraderMIdNum, $soleTraderMContactType, $soleTraderMContactValue, $soleTraderAStreetNo, $soleTraderAPostalCode, $soleTraderASubd, $soleTraderABrgy, 
    $soleTraderACity, $soleTraderAProv, $soleTraderAHouseType, $soleTraderAOccupiedSince, $soleTraderAIdType, $soleTraderAIdNum, $soleTraderAContactType, 
    $soleTraderAContactValue)
    {
        return DB::table('cisa_soletrader')->insert(
            [
                'SoleTraderClientID' => $soleTraderClientID,
                'SoleTraderBR_CODE' => $soleTraderBrCode,
                'SoleTraderName' => $soleTraderName,
                'SoleTraderMStreetNo' => $soleTraderMStreetNo,
                'SoleTraderMPostalCode' => $soleTraderMPostalCode,
                'SoleTraderMSubd' => $soleTraderMSubd,
                'SoleTraderMBRGY' => $soleTraderMBrgy,
                'SoleTraderMCity' => $soleTraderMCity,
                'SoleTraderMProv' => $soleTraderMProv,
                'SoleTraderMHouseType' => $soleTraderMHouseType,
                'SoleTraderMOccupiedSince' => $soleTraderMOccupiedSince,
                'SoleTraderMIDtype' => $soleTraderMIdType,
                'SoleTraderMIDnum' => $soleTraderMIdNum,
                'SoleTraderMCntctType' => $soleTraderMContactType,
                'SoleTraderMCntctValue' => $soleTraderMContactValue,
                'SoleTraderAStreetNo' => $soleTraderAStreetNo,
                'SoleTraderAPostalCode' => $soleTraderAPostalCode,
                'SoleTraderASubd' => $soleTraderASubd,
                'SoleTraderABRGY' => $soleTraderABrgy,
                'SoleTraderACity' => $soleTraderACity,
                'SoleTraderAProv' => $soleTraderAProv,
                'SoleTraderAHouseType' => $soleTraderAHouseType,
                'SoleTraderAOccupiedSince' => $soleTraderAOccupiedSince,
                'SoleTraderAIDtype' => $soleTraderAIdType,
                'SoleTraderAIDnum' => $soleTraderAIdNum,
                'SoleTraderACntctType' => $soleTraderAContactType,
                'SoleTraderACntctValue' => $soleTraderAContactValue
            ]
        );
    }

    public static function updateCisaSoleTraderById($soleTraderClientID, $soleTraderBrCode, $soleTraderName, $soleTraderMStreetNo, $soleTraderMPostalCode, 
    $soleTraderMSubd, $soleTraderMBrgy, $soleTraderMCity, $soleTraderMProv, $soleTraderMHouseType, $soleTraderMOccupiedSince, $soleTraderMIdType, 
    $soleTraderMIdNum, $soleTraderMContactType, $soleTraderMContactValue, $soleTraderAStreetNo, $soleTraderAPostalCode, $soleTraderASubd, $soleTraderABrgy, 
    $soleTraderACity, $soleTraderAProv, $soleTraderAHouseType, $soleTraderAOccupiedSince, $soleTraderAIdType, $soleTraderAIdNum, $soleTraderAContactType, 
    $soleTraderAContactValue)
    {
        return DB::table('cisa_soletrader')->where('SoleTraderClientID', $soleTraderClientID)->update(
            [
                'SoleTraderBR_CODE' => $soleTraderBrCode,
                'SoleTraderName' => $soleTraderName,
                'SoleTraderMStreetNo' => $soleTraderMStreetNo,
                'SoleTraderMPostalCode' => $soleTraderMPostalCode,
                'SoleTraderMSubd' => $soleTraderMSubd,
                'SoleTraderMBRGY' => $soleTraderMBrgy,
                'SoleTraderMCity' => $soleTraderMCity,
                'SoleTraderMProv' => $soleTraderMProv,
                'SoleTraderMHouseType' => $soleTraderMHouseType,
                'SoleTraderMOccupiedSince' => $soleTraderMOccupiedSince,
                'SoleTraderMIDtype' => $soleTraderMIdType,
                'SoleTraderMIDnum' => $soleTraderMIdNum,
                'SoleTraderMCntctType' => $soleTraderMContactType,
                'SoleTraderMCntctValue' => $soleTraderMContactValue,
                'SoleTraderAStreetNo' => $soleTraderAStreetNo,
                'SoleTraderAPostalCode' => $soleTraderAPostalCode,
                'SoleTraderASubd' => $soleTraderASubd,
                'SoleTraderABRGY' => $soleTraderABrgy,
                'SoleTraderACity' => $soleTraderACity,
                'SoleTraderAProv' => $soleTraderAProv,
                'SoleTraderAHouseType' => $soleTraderAHouseType,
                'SoleTraderAOccupiedSince' => $soleTraderAOccupiedSince,
                'SoleTraderAIDtype' => $soleTraderAIdType,
                'SoleTraderAIDnum' => $soleTraderAIdNum,
                'SoleTraderACntctType' => $soleTraderAContactType,
                'SoleTraderACntctValue' => $soleTraderAContactValue
            ]
        );
    }
}
