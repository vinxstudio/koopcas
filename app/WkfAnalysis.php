<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class WkfAnalysis extends Model
{
    public static function getAllWkfAnalysisById($clientId){
        return DB::table('wkfanalysis')
        ->where('CLIENTID', '=', $clientId)
        ->paginate(10);
    }
}
