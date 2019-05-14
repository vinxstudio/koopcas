<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AmorType;
use App\Http\Resources\AmorTypeResource;

class AmorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amortypes = AmorType::getAllAmorType();
        return AmorTypeResource::collection($amortypes);
    }

   
}
