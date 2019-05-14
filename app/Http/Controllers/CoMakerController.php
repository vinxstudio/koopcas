<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoMaker;
use App\Http\Resources\CoMakerResource;

class CoMakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $comaker = CoMaker::getAllCoMakerById($id);
        return CoMakerResource::collection($comaker);
    }
   
}
