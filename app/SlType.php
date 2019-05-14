<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SlType extends Model
{
    public static function getAllSlType(){
        return DB::table('sltype')->get();
    }

    public static function getSlTypeForShareCapital() {
        return DB::table('sltype')
                    ->where('SLTypeSLC_CODE', '=', 31)
                    ->get();
    }

    public static function getSLTypeForLoan($branchCode,$slcCode){
        return DB::table('glcontrol')
        ->select('GLControlSLT_CODE as SLT_CODE','sltype.SLTypeM_DESC as SLDESCR','GLControlACCT_CODE as ACCT_CODE','coa.COADesc as COADESCR')
        ->leftJoin('sltype',function($join){
            $join->on('sltype.SLTypeBR_CODE','=','glcontrol.GLControlBR_CODE');
            $join->on('sltype.SLTypeSLC_CODE','=','glcontrol.GLControlSLC_CODE');
            $join->on('sltype.SLTypeSLT_CODE','=','glcontrol.GLControlSLT_CODE');
        })
        ->leftJoin('coa',function($join){
            $join->on('coa.COABR_CODE','=','glcontrol.GLControlBR_CODE');
            $join->on('coa.COAID','=','glcontrol.GLControlACCT_CODE');
        })
        ->where('GLControlBR_CODE','=',$branchCode)
        ->where('GLControlSLC_CODE','=',$slcCode)
        ->where('GLControlSLE_CODE','=','11')
        ->where(function ($query){
            $query->where('GLControlCTS_NUM','=','11')
                  ->orWhere('GLControlCTS_NUM','=','15');
        })
        ->where('sltype.SLTypeIsDisabled','<>','1')
        ->get();
    }

    public static function getSLTypeByBranch($branch){
        return DB::table('sltype')
        ->where('SLTypeSLC_CODE','=','12')
        ->where('SLTypeBR_CODE','=',$branch)
        ->get();
    }

    public static function getSLTypeForClientCISA($branchCode,$slcCode){
        return DB::table('sltype')
        ->where('SLTypeBR_CODE','=',$branchCode)
        ->where('SLTypeSLC_CODE','=',$slcCode)
        ->get();
    }
}
