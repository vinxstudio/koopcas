<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaCmSecndryId extends Model
{
    public static function getAllCisaCmSecndryIdById($cmSecIdClientId){
        return DB::table('cisa_cmsecndryid as cc')
                    ->join('client as c', function($join){
                        $join->on('cc.cmsecIDClientID', '=', 'c.ClientID');
                    })
                    ->where('cc.cmsecIDClientID', '=', $cmSecIdClientId)
                    ->get();
    }

    public static function getClientLastId(){
        return DB::table('client')
                   ->select('ClientID')
                   ->orderBy('ClientID', 'desc')
                   ->limit(1)
                   ->get();
    }

    public static function insertCisaCmSecondaryId($cmSecIdClientId, $cmSecIdBrCode, $cmSecId1Type, $cmSecId1Num, $cmSecId1IssueDate,
    $cmSecId1Country, $cmSecId1ExpiryDate, $cmSecId1IssuedBy, $cmSecId2Type, $cmSecId2Num, $cmSecId2IssueDate, $cmSecId2Country,
    $cmSecId2ExpiryDate, $cmSecId2IssuedBy, $cmSecId3Type, $cmSecId3Num, $cmSecId3IssueDate, $cmSecId3Country, $cmSecId3ExpiryDate,
    $cmSecId3IssuedBy){
        return DB::table('cisa_cmsecndryid')->insert(
            [
                'cmsecIDClientID' => $cmSecIdClientId,
                'cmsecIDBR_CODE' => $cmSecIdBrCode,
                'cmsecID1Type' => $cmSecId1Type,
                'cmsecID1Num' => $cmSecId1Num,
                'cmsecID1IssueDate' => $cmSecId1IssueDate,
                'cmsecID1Country' => $cmSecId1Country,
                'cmsecID1ExpiryDate' => $cmSecId1ExpiryDate,
                'cmsecID1IssuedBy' => $cmSecId1IssuedBy,
                'cmsecID2Type' => $cmSecId2Type,
                'cmsecID2Num' => $cmSecId2Num,
                'cmsecID2IssueDate' => $cmSecId2IssueDate,
                'cmsecID2Country' => $cmSecId2Country,
                'cmsecID2ExpiryDate' => $cmSecId2ExpiryDate,
                'cmsecID2IssuedBy' => $cmSecId2IssuedBy,
                'cmsecID3Type' => $cmSecId3Type,
                'cmsecID3Num' => $cmSecId3Num,
                'cmsecID3IssueDate' => $cmSecId3IssueDate,
                'cmsecID3Country' => $cmSecId3Country,
                'cmsecID3ExpiryDate' => $cmSecId3ExpiryDate,
                'cmsecID3IssuedBy' => $cmSecId3IssuedBy,
            ]
        );
    }

    public static function updateCisaSecondaryId($cmSecIdClientId, $cmSecIdBrCode, $cmSecId1Type, $cmSecId1Num, $cmSecId1IssueDate,
    $cmSecId1Country, $cmSecId1ExpiryDate, $cmSecId1IssuedBy, $cmSecId2Type, $cmSecId2Num, $cmSecId2IssueDate, $cmSecId2Country,
    $cmSecId2ExpiryDate, $cmSecId2IssuedBy, $cmSecId3Type, $cmSecId3Num, $cmSecId3IssueDate, $cmSecId3Country, $cmSecId3ExpiryDate,
    $cmSecId3IssuedBy)
    {
        return DB::table('cisa_cmsecndryid')
                    ->where('cmsecIDClientID', $cmSecIdClientId)
                    ->update(
                        [
                            'cmsecIDBR_CODE' => $cmSecIdBrCode,
                            'cmsecID1Type' => $cmSecId1Type,
                            'cmsecID1Num' => $cmSecId1Num,
                            'cmsecID1IssueDate' => $cmSecId1IssueDate,
                            'cmsecID1Country' => $cmSecId1Country,
                            'cmsecID1ExpiryDate' => $cmSecId1ExpiryDate,
                            'cmsecID1IssuedBy' => $cmSecId1IssuedBy,
                            'cmsecID2Type' => $cmSecId2Type,
                            'cmsecID2Num' => $cmSecId2Num,
                            'cmsecID2IssueDate' => $cmSecId2IssueDate,
                            'cmsecID2Country' => $cmSecId2Country,
                            'cmsecID2ExpiryDate' => $cmSecId2ExpiryDate,
                            'cmsecID2IssuedBy' => $cmSecId2IssuedBy,
                            'cmsecID3Type' => $cmSecId3Type,
                            'cmsecID3Num' => $cmSecId3Num,
                            'cmsecID3IssueDate' => $cmSecId3IssueDate,
                            'cmsecID3Country' => $cmSecId3Country,
                            'cmsecID3ExpiryDate' => $cmSecId3ExpiryDate,
                            'cmsecID3IssuedBy' => $cmSecId3IssuedBy,
                        ]
        );
    }
}
