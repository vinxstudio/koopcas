<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class AccountStatus extends Model
{
    public static function getAllAccountStatuses()
    {
        return DB::table('acctstat')->get();
    }
}
