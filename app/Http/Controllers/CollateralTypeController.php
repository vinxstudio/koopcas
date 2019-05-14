<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollateralType;
use App\Http\Resources\CollateralTypeResource;

class CollateralTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collateraltypes = CollateralType::getAllCollateralType();
        return CollateralTypeResource::collection($collateraltypes);
    }

    
}
