<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaContactType;
use App\Http\Resources\CisaContactTypeResource;

class CisaContactTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisacontacttypes = CisaContactType::getAllCisaContactType();
        return CisaContactTypeResource::collection($cisacontacttypes);   
    }

}
