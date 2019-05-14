<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MemSlMasterSum extends Model
{
    public static function getAllMemSlMasterSumById($mClientId){
        return DB::table('mem_slmastersum')
        ->where('MCLIENTID', '=' ,$mClientId)
        ->paginate(10);
    }
}
