<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BorrowerClass extends Model
{
    public static function getAllBorrowerClass()
    {
        return DB::table('borrowerclass')->get();
    }
}
