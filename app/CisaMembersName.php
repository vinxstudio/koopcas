<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaMembersName extends Model
{
    public static function getAllCisaMembersNameById($memberClientId){
        return DB::table('cisa_membersname as cm')
                    ->join('client as c', function($join){
                        $join->on('cm.MemberClientID', '=', 'c.ClientID');
                    })
                    ->where('cm.MemberClientID', '=', $memberClientId)
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

    public static function insertCisaMember($memberBrCode, $memberClientId, $fName, $mName, $lName, $nameExtnt)
    {
        return DB::table('cisa_membersname')->insert(
            [
                'MemberBR_CODE' => $memberBrCode,
                'MemberClientID' => $memberClientId,
                'Fname' => $fName,
                'Mname' => $mName,
                'Lname' => $lName,
                'NameExtnt' => $nameExtnt
            ]
        );
    }

    public static function updateCisaMemberById($memberBrCode, $memberClientId, $fName, $mName, $lName, $nameExtnt)
    {
        return DB::table('cisa_membersname')->where('MemberClientID', $memberClientId)->update(
            [
                'MemberBR_CODE' => $memberBrCode,
                'Fname' => $fName,
                'Mname' => $mName,
                'Lname' => $lName,
                'NameExtnt' => $nameExtnt
            ]
        );
    }
}
