<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SleType;
use App\Http\Resources\SleTypeResource;

class SleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sletypes = SleType::getAllSleType();
        return SleTypeResource::collection($sletypes);
    }

}
