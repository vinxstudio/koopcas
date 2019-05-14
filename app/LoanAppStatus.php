<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanAppStatus extends Model
{
    public static function getAllLoanAppStatus(){
        return DB::table('loanappstatus')->get();
    }
}
