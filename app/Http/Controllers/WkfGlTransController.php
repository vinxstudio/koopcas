<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WkfGlTrans;
use App\Http\Resources\WkfGlTransResource;

class WkfGlTransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wkfgltrans = WkfGlTrans::getAllWkfGlTrans();
        return WkfGlTransResource::collection($wkfgltrans);
    }

   
}
