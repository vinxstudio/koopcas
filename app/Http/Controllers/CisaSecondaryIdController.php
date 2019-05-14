<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaSecondaryId;
use App\Http\Resources\CisaSecondaryIdResource;

class CisaSecondaryIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisasecondaryids = CisaSecondaryId::getAllCisaSecondaryId();
        return CisaSecondaryIdResource::collection($cisasecondaryids);
    }

  
}
