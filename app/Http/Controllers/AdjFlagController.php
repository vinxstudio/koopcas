<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdjFlag;
use App\Http\Resources\AdjFlagResource;

class AdjFlagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adjflags = AdjFlag::getAllAdjFlag();
        return adjFlagResource::collection($adjflags);
    }

  
}
