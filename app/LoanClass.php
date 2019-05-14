<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanClass extends Model
{
    public static function getAllLoanClass(){
        return DB::table('loanclass')->get();
    }
}
