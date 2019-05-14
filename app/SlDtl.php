<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SlDtl extends Model
{
    public static function getAllSlDtlById($slClientId){
        return DB::table('sldtl')
        ->where('SL_CLIENTID', '=', $slClientId)
        ->paginate(10);
    }
}
