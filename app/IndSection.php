<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class IndSection extends Model
{
    public static function getAllIndSections()
    {
        return DB::table('ind_section')->get();
    }
}
