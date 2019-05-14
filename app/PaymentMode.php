<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PaymentMode extends Model
{
    public static function getAllPaymentMode(){
        return DB::table('paymentmode')->get();
    }
}
