<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GeoSubgroup;
use App\Http\Resources\GeoSubgroupResource;

class GeoSubgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $geoSubgroups = GeoSubgroup::getAllGeoSubgroups();
        return GeoSubgroupResource::collection($geoSubgroups);
    }
}
