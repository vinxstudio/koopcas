<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Term extends Model
{
    public static function getAllTerm(){
        return DB::table('term')->get();
    }
}
