<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaPsicSector;
use App\Http\Resources\CisaPsicSectorResource;

class CisaPsicSectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisapsicsectors = CisaPsicSector::getAllCisaPsicSector();
        return CisaPsicSectorResource::collection($cisapsicsectors);
    }

   
}
