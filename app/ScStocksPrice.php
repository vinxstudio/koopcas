<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ScStocksPrice extends Model
{
    public static function getAllScStocksPrice(){
        return DB::table('sc_stocks_price')->get();
    }
}
