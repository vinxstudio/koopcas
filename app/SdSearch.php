<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SdSearch extends Model
{
    public static function getSdById($clientIdSd)
    {
        return DB::table('sd as s')
                    ->join('client as c', function($join){
                        $join->on('s.ClientIDSd', '=', 'c.ClientID');
                    })
                    ->where('s.ClientIDSd', '=', $clientIdSd)
                    ->get();
    }
}
