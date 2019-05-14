<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Relation extends Model
{
    public static function getAllRelations()
    {
        return DB::table('relation')->get();
    }
}
