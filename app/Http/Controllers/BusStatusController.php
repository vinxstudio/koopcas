<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusStatus;
use App\Http\Resources\BusStatusResource;

class BusStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $busStatuses = BusStatus::getAllBusStatuses();
        return BusStatusResource::collection($busStatuses);
    }
}
