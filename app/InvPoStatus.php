<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvPoStatus extends Model
{
    public static function getAllInvPoStatus(){
        return DB::table('inv_postatus')->get();
    }
}
