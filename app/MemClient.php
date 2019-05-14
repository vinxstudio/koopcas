<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MemClient extends Model
{
    public static function getAllmemClientById($clientId){
        return DB::table('mem_client')
        ->where('ClientID', '=', $clientId)
        ->paginate(10);
    }
}
