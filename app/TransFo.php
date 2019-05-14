<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TransFo extends Model
{
    public static function getAllTransFoById($clientIdFo){
        return DB::table('transfo')
        ->where('ClientIDFO', '=', $clientIdFo)
        ->paginate(10);
    }
}
