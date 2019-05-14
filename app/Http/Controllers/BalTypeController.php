<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BalType;
use App\Http\Resources\BalTypeResource;

class BalTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baltypes = BalType::getAllBalType();
        return BalTypeResource::collection($baltypes);
    }

  
}
