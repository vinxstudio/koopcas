<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CodeStorage extends Model
{
    public static function getAllCodeStorage(){
        return DB::table('codestorage')->get();
    }
}
