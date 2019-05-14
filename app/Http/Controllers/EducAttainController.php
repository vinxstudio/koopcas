<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EducAttain;
use App\Http\Resources\EducAttainResource;

class EducAttainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educAttains = EducAttain::getAllEducAttains();
        return EducAttainResource::collection($educAttains);
    }
}
