<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Profession extends Model
{
    public static function getAllProfessions()
    {
        return DB::table('profession')->get();
    }
}
