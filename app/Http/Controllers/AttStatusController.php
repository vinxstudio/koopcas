<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttStatus;
use App\Http\Resources\AttStatusResource;

class AttStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attstatuses = AttStatus::getAllAttStatus();
        return AttStatusResource::collection($attstatuses);
    }

   
}
