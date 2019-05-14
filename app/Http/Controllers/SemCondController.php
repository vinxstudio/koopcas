<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SemCond;
use App\Http\Resources\SemCondResource;

class SemCondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semConds = SemCond::getAllSemCond();
        return SemCondResource::collection($semConds); 
    }

   
}
