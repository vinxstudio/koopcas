<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CtsType;
use App\Http\Resources\CtsTypeResource;

class CtsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ctstypes = CtsType::getAllCtsType();
        return CtsTypeResource::collection($ctstypes);
    }

    public function show()
    {
        $ctstypes = CtsType::getCtsType();
        return CtsTypeResource::collection($ctstypes);
    }

   
}
