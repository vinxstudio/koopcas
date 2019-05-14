<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AccountTypes extends Model
{
    public static function getAllAccountTypes()
    {
        return DB::table('accttype')->get();
    }
}
