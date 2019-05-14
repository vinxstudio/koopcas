<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenerationVerificationCode extends Model
{
    public static function getAllGenerationVerificationCodeById($clientId)
        {
            return DB::table('gvc as g')
                       ->join('client as c', function($join){
                            $join->on('g.ClientID', '=', 'c.ClientID');
                       })
                       ->where('g.ClientID', '=', $clientId)
                       ->paginate(10);
        }
}
