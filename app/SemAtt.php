<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SemAtt extends Model
{
    public static function getAllSemAttById($clientIdSa){
        return DB::table('sematt')
        ->where('ClientIDSA', '=', $clientIdSa)
        ->paginate(10);
    }
}
