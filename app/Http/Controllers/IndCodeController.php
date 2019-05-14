<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndCode;
use App\Http\Resources\IndCodeResource;

class IndCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indcodes = IndCode::getAllIndCode();
        return IndCodeResource::collection($indcodes);
    }

}
