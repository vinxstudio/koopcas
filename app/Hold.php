<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Hold extends Model
{
    public static function getAllHoldById($clientIdH){
        return DB::table('hold')
        ->where('ClientIDH', '=', $clientIdH)
        ->paginate(10);
    }
}
