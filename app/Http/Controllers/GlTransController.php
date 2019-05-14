<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlTrans;
use App\Http\Resources\GlTransResource;

class GlTransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gltrans = GlTrans::getAllGlTrans();
        return GlTransResource::collection($gltrans);
    }

 
}
