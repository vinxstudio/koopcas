<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaAddPrimaryId;
use App\Http\Resources\CisaAddPrimaryIdResource;

class CisaAddPrimaryIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientId)
    {
        $cisaAddPrimaryIds = CisaAddPrimaryId::getAllCisaAddPrimaryIdById($clientId);
        return CisaAddPrimaryIdResource::collection($cisaAddPrimaryIds);
    }

   
}
