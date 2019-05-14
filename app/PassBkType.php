<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PassBkType extends Model
{
    public static function getAllPassBkType(){
        return DB::table('passbktype')->get();
    }
}
