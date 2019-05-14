<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SlClass extends Model
{
    public static function getAllSlClass(){
        return DB::table('slclass')->get();
    }

    public static function getSLClassForLoanApp(){
        return DB::table('slclass')
        ->where('SLClassID','<>','11')
        ->where('SLClassID','<>','12')
        ->where('SLClassID','<>','24')
        ->where('SLClassID','<>','13')
        ->where('SLClassID','<>','14')
        ->where('SLClassID','<>','51')
        ->get();
    }

    public static function getSLClassForBatchEdit(){
        return DB::table('slclass')
        ->where('SLClassID','=','12')
        ->get();
    }

    public static function getSLClassForClientCISA(){
        return DB::table('slclass')
        ->where('SLClassID','<>','11')
        ->get();
    }
}
