<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PersonalReference extends Model
{
    public static function getAllPrefsById($clientId)
    {
        return DB::table('pref as p')
                   ->join('client as c', function($join){
                       $join->on('p.ClientIDPRef', '=', 'c.ClientID');
                   })
                   ->where('p.ClientIDPRef', '=', $clientId)
                   ->paginate(10);
    }

    public static function insertPrefsById($pRefBrCode, $clientIdPRef, $pRefName, $pRefAddress, $pRefTelNum,
    $pRefRelation, $pRefRemarks, $pRefDateTimeAdded)
    {
        return DB::table('pref')->insert(
            [
                'PRefBR_CODE' => $pRefBrCode,
                'ClientIDPRef' => $clientIdPRef,
                'PRefName' => $pRefName,
                'PRefAddress' => $pRefAddress,
                'PRefTelNum' => $pRefTelNum,
                'PRefRelation' => $pRefRelation,
                'PRefRemarks' => $pRefRemarks,
                'PRefDateTimeAdded' => $pRefDateTimeAdded
            ]
        );
    }

    public static function updatePrefsById( $pRefID, $pRefBrCode, $clientIdPRef, $pRefName, $pRefAddress, $pRefTelNum,
    $pRefRelation, $pRefRemarks, $pRefDateTimeAdded )
    {
        return DB::table('pref')
                   ->where('PRefID', $pRefID)
                   ->update(
                        [
                            'PRefBR_CODE' => $pRefBrCode,
                            'ClientIDPRef' => $clientIdPRef,
                            'PRefName' => $pRefName,
                            'PRefAddress' => $pRefAddress,
                            'PRefTelNum' => $pRefTelNum,
                            'PRefRelation' => $pRefRelation,
                            'PRefRemarks' => $pRefRemarks,
                            'PRefDateTimeAdded' => $pRefDateTimeAdded
                        ]
                );

    }

    public static function deletePersonalRefById($id)
    {
        return DB::table('pref')->where('PRefID', '=', $id)->delete();
    }
}
