<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanSlDeduc extends Model
{
    public static function getAllLoanSlDeduc($dClientId){
        return DB::table('loansldeduc')
        ->where('DCLIENTID', '=' , $dClientId)
        ->paginate(10);
    }
}
