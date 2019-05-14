<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class InvItemSearch extends Model
{
//    public static function getAllInvItemSearch1($barCode){
//        return DB::table('inv_item as i')
//            ->join('inv_brand as ib', function($join){
//                $join->on('i.BrandID', '=', 'ib.ID');
//                    })
//            ->join('inv_commonname as ic', function($join){
//                $join->on('i.CommonNameID', '=', 'ic.ID');
//                    })
//                ->where('i.UPC', '=', $barCode)
//                ->get();
//    }
//}

