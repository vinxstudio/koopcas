<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BalanceSheet extends Model
{
    public static function getAllBalanceSheet()
    {
        return DB::table('balancesheet')->get();
    }
}
