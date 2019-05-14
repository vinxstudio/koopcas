<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HoldCode;
use App\Http\Resources\HoldCodeResource;

class HoldCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holdcodes = HoldCode::getAllHoldCode();
        return HoldCodeResource::collection($holdcodes);
    }

   
}
