<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BalType extends Model
{
    public static function getAllBalType()
    {
        return DB::table('baltype')->get();
    }
}
