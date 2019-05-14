<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Beneficiary extends Model
{
    public static function getAllBenefById($clientId)
    {
        return DB::table('benef as b')
                   ->join('client as c', function($join){
                        $join->on('b.ClientIDBenef', '=', 'c.ClientID');
                   })
                   ->join('relation as r', function($join){
                        $join->on('r.RelationID', '=', 'b.BenefRelation');
                   })
                   ->join('occu as o', function($join){
                        $join->on('o.OccuID', '=', 'b.BenefOccu');
                   })
                   ->where('b.ClientIDBenef', '=', $clientId)
                   ->paginate(10);
    }

    public static function insertBenefById($benefBrCode, $clientIdBenef, $benefName, $benefRelation, $benefDateofBirth,
    $benefOccu, $benefDateTimeAdded)
    {
        return DB::table('benef')->insert(
            [
                'BenefBR_CODE' => $benefBrCode,
                'ClientIDBenef' => $clientIdBenef,
                'BenefName' => $benefName,
                'BenefRelation' => $benefRelation,
                'BenefDateofBirth' => $benefDateofBirth,
                'BenefOccu' => $benefOccu,
                'BenefDateTimeAdded' => $benefDateTimeAdded
            ]  
        );
    }

    public static function updateBenefById($benefID, $benefBrCode, $clientIdBenef, $benefName, $benefRelation, $benefDateofBirth,
    $benefOccu){
        return DB::table('benef')
                   ->where('BenefID', $benefID)
                   ->update(
                        [
                        'BenefBR_CODE' => $benefBrCode,
                        'ClientIDBenef' => $clientIdBenef,
                        'BenefName' => $benefName,
                        'BenefRelation' => $benefRelation,
                        'BenefDateofBirth' => $benefDateofBirth,
                        'BenefOccu' => $benefOccu
                    ]
                );  
    }

    public static function deleteBenefById($benefId)
    {
        return DB::table('benef')->where('BenefID', '=', $benefId)->delete();
    }
}
