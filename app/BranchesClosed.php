<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BranchesClosed extends Model
{
    public static function getAllBranchesClosed()
    {
        return DB::table('branchesclosed')->get();
    }
}
