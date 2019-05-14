<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CociType;
use App\Http\Resources\CociTypeResource;

class CociTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cocitypes = CociType::getAllCociType();
        return CociTypeResource::collection($cocitypes);
    }

}
