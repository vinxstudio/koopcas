<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coac;
use App\Http\Resources\CoacResource;

class CoacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coac = Coac::getAllCoac();
        return CoacResource::collection($coac);
    }

   
}
