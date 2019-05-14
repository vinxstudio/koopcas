<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class BankCode extends Model
{
    public static function getAllBankCode()
    {
        return DB::table('bankcode')->get();
    }
}
