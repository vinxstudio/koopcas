<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SlMasterSum extends Model
{
    public static function getAllSlMasterSumById($mClientId){
        return DB::table('slmastersum')
        ->where('MCLIENTID', '=', $mClientId)
        ->paginate(10);
    }
}
