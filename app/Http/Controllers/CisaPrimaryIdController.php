<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaPrimaryId;
use App\Http\Resources\CisaPrimaryIdResource;

class CisaPrimaryIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $cisaprimaryids = CisaPrimaryId::getAllCisaPrimaryId();
        return CisaPrimaryIdResource::collection($cisaprimaryids);
    }

   
}
