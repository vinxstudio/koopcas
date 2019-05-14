<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanDeducGroup extends Model
{
    public static function getAllLoanDeducGroup(){
        return DB::table('loandeducgroup')->get();
    }
}
