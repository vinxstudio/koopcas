<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaPsocDiv;
use App\Http\Resources\CisaPsocDivResource;

class CisaPsocDivController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisapsocdivs = CisaPsocDiv::getAllCisaPsocDiv();
        return CisaPsocDivResource::collection($cisapsocdivs);
    }

  
}
