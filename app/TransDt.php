<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TransDt extends Model
{
    public static function getAllTransDtById($clientIdDt){
        return DB::table('transdt')
        ->where('ClientIDDT', '=', $clientIdDt)
        ->paginate(10);
    }
}
