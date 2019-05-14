<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ActvtLog extends Model
{
    public static function getAllActvtLogsById($clientId)
    {
        return DB::table('actvtlog as a')
                   ->join('client as c', function($join){
                        $join->on('a.ClientID', '=', 'c.ClientID');
                   })
                   ->where('a.ClientID', '=', $clientId)
                   ->paginate(10);
    }
}
