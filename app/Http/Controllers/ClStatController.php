<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClStat;
use App\Http\Resources\ClStatResource;

class ClStatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clstats = ClStat::getAllClStat();
        return ClStatResource::collection($clstats);
    }

}
