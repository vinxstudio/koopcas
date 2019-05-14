<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CivilStat;
use App\Http\Resources\CivilStatResource;

class CivilStatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $civilstats = CivilStat::getAllCivilStat();
        return CivilStatResource::collection($civilstats);
    }

}
