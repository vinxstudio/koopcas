<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Geo;
use App\Http\Resources\GeoResource;
use App\Http\Resources\GeoLoanResource;

class GeoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geos = Geo::getAllGeo();
        return GeoResource::collection($geos);
    }

    /**
     * Display a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($geoId, $geoBrCode)
    {
        $geo = Geo::getGeoById($geoId, $geoBrCode);
        return GeoResource::collection($geo);
    }

    public function showGeo($branch){
        $geo = Geo::getGeoByBranch($branch);
        return GeoLoanResource::collection($geo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $geo = new Geo;

        $geo->GeoID = $request->input('geoId');
        $geo->GeoDesc = $request->input('geoDesc');
        $geo->GeoBR_CODE = 18;
        $geo->GeoUpdUser = $request->input('geoUpdUser');
        $geo->GeoUpdDateTime = $request->input('geoUpdDateTime');
        $geo->GeoCollChartID = $request->input('geoCollChartId');

        Geo::insertGeo($geo->GeoID, $geo->GeoDesc, $geo->GeoBR_CODE, $geo->GeoUpdUser, $geo->GeoUpdDateTime, $geo->GeoCollChartID);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $geo = new Geo;

        $geo->GeoID = $request->input('geoId');
        $geo->GeoDesc = $request->input('geoDesc');
        $geo->GeoBR_CODE = 18;
        $geo->GeoUpdUser = $request->input('geoUpdUser');
        $geo->GeoUpdDateTime = $request->input('geoUpdDateTime');
        $geo->GeoCollChartID = $request->input('geoCollChartId');

        Geo::updateGeo($geo->GeoID, $geo->GeoDesc, $geo->GeoBR_CODE, $geo->GeoUpdUser, $geo->GeoUpdDateTime, $geo->GeoCollChartID);
    }
    
}
