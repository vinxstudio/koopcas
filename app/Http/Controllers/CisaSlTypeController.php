<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaSlType;
use App\Http\Resources\CisaSlTypeResource;

class CisaSlTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisasltypes = CisaSlType::getAllCisaSlType();
        return CisaSlTypeResource::collection($cisasltypes);
    }

    
}
