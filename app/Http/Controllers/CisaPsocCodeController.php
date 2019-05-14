<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaPsocCode;
use App\Http\Resources\CisaPsocCodeResource;

class CisaPsocCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisapsoccodes = CisaPsocCode::getAllCisaPsocCode();
        return CisaPsocCodeResource::collection($cisapsoccodes);
    }

    
}
