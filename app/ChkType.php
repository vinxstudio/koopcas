<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ChkType extends Model
{
    public static function getAllChkType()
     {
         return DB::table('chktype')->get();
     }
}
