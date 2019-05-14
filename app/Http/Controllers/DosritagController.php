<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosritag;
use App\Http\Resources\DosritagResource;

class DosritagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosritags = Dosritag::getAllDosritag();
        return DosritagResource::collection($dosritags);
    }

    
}
