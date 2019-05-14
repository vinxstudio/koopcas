<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvVendor extends Model
{
    public static function getAllInvVendorById($clientId){
        return DB::table('inv_vendor')
        ->where('ClientID', '=', $clientId )
        ->paginate(10);
    }

    public static function getAllShowVendorById(){
        return DB::table('inv_vendor')
        ->get();
    }

}

