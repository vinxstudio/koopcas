<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReqStatus;
use App\Http\Resources\ReqStatusResource;

class ReqStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reqstatuses = ReqStatus::getAllReqStatus();
        return ReqStatusResource::collection($reqstatuses);
    }

 
}
