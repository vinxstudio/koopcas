<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusLevel;
use App\Http\Resources\BusLevelResource;

class BusLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buslevels = BusLevel::getAllBusLevel();
        return BusLevelResource::collection($buslevels);
    }

}
