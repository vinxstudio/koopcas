<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Sc extends Model
{
    public static function getAllSc($clientIdSc){
        // return DB::table('sc as s')
        //                     ->join('client as c', function($join){
        //                         $join->on('s.ClientIDSC', '=', 'c.ClientID');
        //                     })
        //                     ->join('clienttype as ct', function($join){
        //                         $join->on('c.ClientType', '=', 'ct.ClientTypeID');
        //                     })
        //                     ->join('acctstat as as', function($join){
        //                         $join->on('c.AccountStatus', '=', 'as.AcctStatID');
        //                     })
        //                     ->join('slclass as slc',function($join){
        //                         $join->on('slc.SLClassID','=','s.SCSLC_CODE');
        //                     })
        //                     ->leftJoin('glcontrol as gl',function($join){
        //                         $join->on('GLControlBR_CODE','=','s.SCBR_CODE');
        //                         $join->on('GLControlSLC_CODE','=','s.SCSLC_CODE');
        //                         $join->on('GLControlSLT_CODE','=','s.SCSLT_CODE');
        //                         $join->on('GLControlCTS_NUM','=','s.SCSTATUS');
        //                     })
        //                     ->where('s.ClientIDSC', '=', $clientIdSc)
        //                     ->get();

        return DB::table('sc as s')
                    ->join('client as c', function($join){
                        $join->on('s.ClientIDSC', '=', 'c.ClientID');
                    })
                    ->join('clienttype as ct', function($join){
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as as', function($join){
                        $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                    })
                    ->join('sltype as sl', function($join){
                        $join->on('sl.SLTypeSLC_CODE', '=', 's.SCSLC_CODE')
                            ->on('sl.SLTypeSLT_CODE', '=', 's.SCSLT_CODE');
                    })
                    ->where('s.ClientIDSC', '=', $clientIdSc)
                    ->get();
    }

    public static function getLastRefNo()
    {  
        return DB::table('sc')
                    ->select('SCREF_NO')
                    ->orderBy('SCREF_NO', 'desc')
                    ->limit(1)
                    ->get();
    }

    public static function getAllEmptySc($clientIdSc){
        return DB::table('sc as s')
        ->join('client as c', function($join){
            $join->on('s.ClientIDSC', '=', 'c.ClientID');
        })
        ->join('clienttype as ct', function($join){
            $join->on('c.ClientType', '=', 'ct.ClientTypeID');
        })
        ->join('acctstat as as', function($join){
            $join->on('c.AccountStatus', '=', 'as.AcctStatID');
        })
        ->join('sltype as sl', function($join){
            $join->on('sl.SLTypeSLC_CODE', '=', 's.SCSLC_CODE')
                ->on('sl.SLTypeSLT_CODE', '=', 's.SCSLT_CODE');
        })
        ->where(function($query){
           return $query->whereNull('s.SCMIN_BAL')
           ->orWhere('s.SCMIN_BAL','=','0');
        })
        ->where('s.ClientIDSC', '=', $clientIdSc)
        ->get();
    }

    public static function getPlayToSaveThree(){
        return DB::table('sc as s')
        ->join('client as c', function($join){
            $join->on('s.ClientIDSC', '=', 'c.ClientID');
        })
        ->join('transsum as tr',function($join){
            $join->on('tr.TR_ID','=','SCTR_ID');
        })
        ->leftJoin('p2sthreedigitentries as ptd',function($join){
            $join->on('ptd.PTSTDTR_ID','=','tr.TR_ID');
        })
        ->where('s.SCSLC_CODE','=','31')
        ->where('s.SCSLT_CODE','=','14')
        ->whereNull('ptd.PTSTDTR_ID')
        ->where('tr.TR_DATE','=',date('Y-m-d'))
        ->get();
    }

    public static function getPlayToSaveSix(){
        return DB::table('sc as s')
        ->join('client as c', function($join){
            $join->on('s.ClientIDSC', '=', 'c.ClientID');
        })
        ->join('transsum as tr',function($join){
            $join->on('tr.TR_ID','=','SCTR_ID');
        })
        ->leftJoin('p2ssixdigitentries as ptd',function($join){
            $join->on('ptd.PTSSDTR_ID','=','tr.TR_ID');
        })
        ->where('s.SCSLC_CODE','=','31')
        ->where('s.SCSLT_CODE','=','15')
        ->whereNull('ptd.PTSSDTR_ID')
        ->where('tr.TR_DATE','=',date('Y-m-d'))
        ->get();
    }
    public static function getSlTypes() {
        return DB::table('sltype')
                    ->where('SLTypeSLC_CODE', '=', 31)
                    ->get();
    }

    public static function getAllScById($scBrCode, $scSlcCode, $scSltCode, $scRefNo, $clientIdSc){
        return DB::table('sc as s')
                            ->join('client as c', function($join){
                                $join->on('s.ClientIDSC', '=', 'c.ClientID');
                            })
                            ->join('clienttype as ct', function($join){
                                $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                            })
                            ->join('acctstat as as', function($join){
                                $join->on('c.AccountStatus', '=', 'as.AcctStatID');
                            })
                            ->where('s.SCBR_CODE', '=', $scBrCode)
                            ->where('s.SCSLC_CODE', '=', $scSlcCode)
                            ->where('s.SCSLT_CODE', '=', $scSltCode)
                            ->where('s.SCREF_NO', '=', $scRefNo)
                            ->where('s.ClientIDSC', '=', $clientIdSc)
                            ->get();

    }

    public static function insertSc($scBrCode, $scSlcCode, $scSltCode, $scRefNo, $clientIdSc, $scTrDate, $scStatus,
    $scMinBal, $scUpdDateTime, $scRemarks, $scUpdUser)
    {
        return DB::table('sc')->insert(
            [
                'SCTR_ID' => 0,
                'SCBR_CODE' => $scBrCode,
                'SCSLC_CODE' => $scSlcCode,
                'SCSLT_CODE' => $scSltCode,
                'SCREF_NO' => $scRefNo,
                'ClientIDSC' => $clientIdSc,
                'SCTR_DATE' => $scTrDate,
                'SCSTATUS' => $scStatus,
                'SCMIN_BAL' => $scMinBal,
                'SCUPDDATETIME' => $scUpdDateTime,
                'SCREMARKS' => $scRemarks,
                'SCUpdUser' => $scUpdUser
            ]
            );
    }

    public static function updateSc($scTrId,$scBrCode, $scSlcCode, $scSltCode, $scRefNo, $clientIdSc, $scTrDate, $scStatus,
    $scMinBal, $scUpdDateTime, $scRemarks, $scUpdUser)
    {
        return DB::table('sc') ->where('SCBR_CODE', $scBrCode)->where('SCSLC_CODE', $scSlcCode)
                    ->where('SCSLT_CODE', $scSltCode)->where('SCREF_NO', $scRefNo)
                    ->where('ClientIDSC', $clientIdSc)->update(
                    [
                        'SCTR_ID' => $scTrId,
                        'SCTR_DATE' => $scTrDate,
                        'SCSTATUS' => $scStatus,
                        'SCMIN_BAL' => $scMinBal,
                        'SCUPDDATETIME' => $scUpdDateTime,
                        'SCREMARKS' => $scRemarks,
                        'SCUpdUser' => $scUpdUser
                    ]

        );
    }

    public static function deleteScById($scBrCode, $scSlcCode, $scSltCode, $scRefNo, $clientIdSc)
    {
        return DB::table('sc')->where('SCBR_CODE', '=', $scBrCode)->where('SCSLC_CODE', '=', $scSlcCode)
                    ->where('SCSLT_CODE', '=', $scSltCode)->where('SCREF_NO', '=', $scRefNo)
                    ->where('ClientIDSC', '=', $clientIdSc)->delete();
    }
}
