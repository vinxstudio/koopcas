<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReqCode;
use App\Http\Resources\ReqCodeResource;

class ReqCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqcodes = ReqCode::getAllReqCode();
        return ReqCodeResource::collection($reqcodes);
    }

   
}
