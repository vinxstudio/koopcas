<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanSlBehavior extends Model
{
    public static function getAllLoanSlBehavior(){
        return DB::table('loanslbehavior')->get();
    }
}
