<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransTypeAtm;
use App\Http\Resources\TransTypeAtmResource;

class TransTypeAtmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transtypeatms = TransTypeAtm::getAllTransTypeAtm();
        return transTypeAtmResource::collection($transtypeatms);
    }

   
}
