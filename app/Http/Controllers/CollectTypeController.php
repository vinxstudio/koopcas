<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollectType;
use App\Http\Resources\CollectTypeResource;

class CollectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collecttypes = CollectType::getAllCollectType();
        return CollectTypeResource::collection($collecttypes);
    }

  
}
