<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaHouseType;
use App\Http\Resources\CisaHouseTypeResource;

class CisaHouseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisahousetypes = CisaHouseType::getAllCisaHouseType();
        return CisaHouseTypeResource::collection($cisahousetypes);
    }

 
}
