<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Geo extends Model
{
    public static function getAllGeo(){
        return DB::table('geo as g')
                    ->join('collchart as c', function($join){
                        $join->on('g.GeoCollChartID', '=', 'c.CollChartID');
                    })
                    // ->paginate(10);
                    ->get();
    }

    public static function getGeoById($geoId, $geoBrCode){
        return DB::table('geo as g')
                    ->join('collchart as c', function($join){
                        $join->on('g.GeoCollChartID', '=', 'c.CollChartID');
                    })
                    ->where('g.GeoBR_CODE', '=', $geoBrCode)
                    ->where('g.GeoID', '=', $geoId)
                    ->get();
    }

    public static function getGeoByBranch($branch){
        return DB::table('geo')
            ->where('GeoBR_CODE','=',$branch)
            ->get();
    }

    public static function insertGeo($geoId, $geoDesc, $geoBrCode, $geoUpdUser, $geoUpdDateTime, $geoCollChartId){
        return DB::table('geo')->insert(
            [
                'GeoID' => $geoId,
                'GeoDesc' => $geoDesc,
                'GeoBR_CODE' => $geoBrCode,
                'GeoUpdUser' => $geoUpdUser,
                'GeoUpdDateTime' => $geoUpdDateTime,
                'GeoCollChartID' => $geoCollChartId
            ]
        );
    }

    public static function updateGeo($geoId, $geoDesc, $geoBrCode, $geoUpdUser, $geoUpdDateTime, $geoCollChartId){
        return DB::table('geo')->where('GeoID', $geoId)->where('GeoBR_CODE', $geoBrCode)->update(
            [
                'GeoID' => $geoId,
                'GeoDesc' => $geoDesc,
                'GeoBR_CODE' => $geoBrCode,
                'GeoUpdUser' => $geoUpdUser,
                'GeoUpdDateTime' => $geoUpdDateTime,
                'GeoCollChartID' => $geoCollChartId
            ]
        );
    }
    
}
