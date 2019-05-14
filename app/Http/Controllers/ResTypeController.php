<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResType;
use App\Http\Resources\ResTypeResource;

class ResTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restypes = ResType::getAllResType();
        return ResTypeResource::collection($restypes);
    }

   
}
