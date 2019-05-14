<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AmorType extends Model
{
    public static function getAllAmorType()
    {
        return DB::table('amortype')->get();
    }
}
