<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CisaAddPrimaryId extends Model
{
    public static function getAllCisaAddPrimaryIdById($clientId){
        return DB::table('cisa_addprimaryid')
        ->where('ClientID', '=', $clientId)
        ->paginate(10);
    }
}
