<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanSubType extends Model
{
    public static function getAllLoanSubType(){
        return DB::table('loansubtype')->get();
    }
}
