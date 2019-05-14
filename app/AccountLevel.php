<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AccountLevel extends Model
{
    public static function getAllAccountLevel()
    {
        return DB::table('acctlevel')->get();
    }
}
