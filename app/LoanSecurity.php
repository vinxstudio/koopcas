<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanSecurity extends Model
{
    public static function getAllLoanSecurity(){
        return DB::table('loansecurity')->get();
    }
}
