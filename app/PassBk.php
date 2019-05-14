<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class PassBk extends Model
{
    public static function getAllPassBkById($passBkClientId){
        return DB::table('passbk as p')
                ->join('client as c', function($join){
                    $join->on('p.PassbkCLIENTID', '=', 'c.ClientID');
                })
                ->join('passbktype as pt', function($join){
                    $join->on('p.PassbkPBTYPE', '=', 'pt.PassBkTypeID');
                })
                ->join('sltype as s', function($join){
                    $join->on('p.PassbkSLT_CODE', '=', 's.SLTypeSLT_CODE')
                        ->on('p.PassbkSLC_CODE', '=', 's.SLTypeSLC_CODE');
                })
                ->where('p.PassbkCLIENTID', '=', $passBkClientId)
                ->paginate(10);
    }

    public static function getPassBkById($passBkBrCode, $passBkClientId, $passBkSlcCode, $passBkSltCode, $passBkRefNo){
        return DB::table('passbk as p')
                ->join('client as c', function($join){
                    $join->on('p.PassbkCLIENTID', '=', 'c.ClientID');
                })
                ->join('passbktype as pt', function($join){
                    $join->on('p.PassbkPBTYPE', '=', 'pt.PassBkTypeID');
                })
                ->join('sltype as s', function($join){
                    $join->on('p.PassbkSLT_CODE', '=', 's.SLTypeSLT_CODE')
                        ->on('p.PassbkSLC_CODE', '=', 's.SLTypeSLC_CODE');
                })
                ->where('p.PassbkBR_CODE', '=', $passBkBrCode)
                ->where('p.PassbkCLIENTID', '=', $passBkClientId)
                ->where('p.PassbkSLC_CODE', '=', $passBkSlcCode)
                ->where('p.PassbkSLT_CODE', '=', $passBkSltCode)
                ->where('p.PassbkREF_NO', '=', $passBkRefNo)
                ->get();
    }
   
}
