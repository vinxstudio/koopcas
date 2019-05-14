<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Attendance extends Model
{
    public static function getAllAttendanceById($clientId){
        return DB::table('attendance')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
