<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DimFreq;
use App\Http\Resources\DimFreqResource;

class DimFreqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dimfreqs = DimFreq::getAllDimFreq();
        return DimFreqResource::collection($dimfreqs);
    }

 
}
