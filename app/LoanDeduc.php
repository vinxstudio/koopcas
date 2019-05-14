<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoanDeduc extends Model
{
    public static function getAllLoanDeducById($clientId){
        return DB::table('loandeduc')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
