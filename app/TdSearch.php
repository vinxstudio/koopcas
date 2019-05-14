<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TdSearch extends Model
{
    public static function getTdById($clientIdTd)
    {
        return DB::table('td as t')
                    ->join('client as c', function($join){
                        $join->on('t.ClientIDTD', '=', 'c.ClientID');
                    })
                    ->where('t.ClientIDTD', '=', $clientIdTd)
                    ->get();
    }
}
