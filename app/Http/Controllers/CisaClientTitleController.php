<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaClientTitle;
use App\Http\Resources\CisaClientTitleResource;

class CisaClientTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisaclienttitles = CisaClientTitle::getAllCisaClientTitle();
        return CisaClientTitleResource::collection($cisaclienttitles);
    }

    
}
