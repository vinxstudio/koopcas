<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CBref extends Model
{
    public static function getAllCBrefsById($clientId)
    {
        return DB::table('cbref as cb')
                   ->join('client as c', function($join){
                        $join->on('cb.ClientIDCBRef', '=', 'c.ClientID');
                   })
                   ->where('cb.ClientIDCBRef', '=', $clientId)
                   ->paginate(10);
    }

    public static function insertCbrefById($cbRefBrCode, $clientIdCbRef, $cbRefType, $cbRefName, $cbRefDateAcctOpened,
    $cbRefPrincipalAmount, $cbRefLoanBalance, $cbRefAddress, $cbRefTelNum, $cbRefDateTimeAdded)
    {  
        return DB::table('cbref')->insert(
            [
                'CBRefBR_CODE' => $cbRefBrCode,
                'ClientIDCBRef' => $clientIdCbRef,
                'CBRefType' => $cbRefType,
                'CBRefName' => $cbRefName,
                'CBRefDateAcctOpened' => $cbRefDateAcctOpened,
                'CBRefPrincipalAmount' => $cbRefPrincipalAmount,
                'CBRefLoanBalance' => $cbRefLoanBalance,
                'CBRefAddress' => $cbRefAddress,
                'CBRefTelNum' => $cbRefTelNum,
                'CBRefDateTimeAdded' => $cbRefDateTimeAdded
            ]
        );
    }

    public static function deleteCbrefById($clientId)
    {
        return DB::table('cbref')->where('ClientIDCBRef', '=', $clientId)->delete();
    }
}
