<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hold;
use App\Http\Resources\HoldResource;

class HoldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientIdH)
    {
        $holds = Hold::getAllHoldById($clientIdH);
        return HoldResource::collection($holds);
    }

  
}
