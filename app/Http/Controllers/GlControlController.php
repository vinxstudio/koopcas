<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlControl;
use App\Http\Resources\GlControlResource;

class GlControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glcontrols = GlControl::getAllGlControl();
        return GlControlResource::collection($glcontrols);
    }

    
}
