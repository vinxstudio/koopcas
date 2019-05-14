<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaOccupationStat;
use App\Http\Resources\CisaOccupationStatResource;

class CisaOccupationStatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisaoccupationstats = CisaOccupationStat::getAllCisaOccupationStat();
        return CisaOccupationStatResource::collection($cisaoccupationstats);
    }

   
}
