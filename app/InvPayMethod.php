<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPayMethod extends Model
{
    public static function getAllInvPayMethodByid($requestClientId){
        return DB::table('inv_paymethod')
        ->where('RequestCLIENTID', '=', $requestClientId)
        ->paginate(10);
    }
}
