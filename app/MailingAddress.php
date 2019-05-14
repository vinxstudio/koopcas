<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MailingAddress extends Model
{
    public static function getAllMailingAddress()
    {
        return DB::table('mailingaddress')->get();
    }
}
