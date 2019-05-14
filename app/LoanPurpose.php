<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanPurpose extends Model
{
    public static function getAllLoanPurpose(){
        return DB::table('loanpurpose')->get();
    }
}
