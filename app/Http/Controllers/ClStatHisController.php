<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClStatHis;
use App\Http\Resources\ClStatHisResource;

class ClStatHisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientId)
    {
        $clstathis = ClStatHis::getAllClStatHisById($clientId);
        return ClStatHisResource::collection($clstathis);
    }

   
}
