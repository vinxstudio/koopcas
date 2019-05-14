<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaPsicCode;
use App\Http\Resources\CisaPsicCodeResource;

class CisaPsicCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisapsiccodes = CisaPsicCode::getAllCisaPsicCode();
        return CisaPsicCodeResource::collection($cisapsiccodes);
    }

   
}
