<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ActivityList extends Model
{
    public static function getAllActivityList()
    {
        return DB::table('actvtlist')->get();
    }
}
