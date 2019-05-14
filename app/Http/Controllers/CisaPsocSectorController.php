<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaPsocSector;
use App\Http\Resources\CisaPsocSectorResource;

class CisaPsocSectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisapsocsectors = CisaPsocSector::getAllCisaPsocSector();
        return CisaPsocSectorResource::collection($cisapsocsectors);    
    }

   
}
