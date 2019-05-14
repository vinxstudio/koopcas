<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClosedReason;
use App\Http\Resources\ClosedReasonResource;

class ClosedReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $closedReasons = ClosedReason::getAllClosedReasons();
        return ClosedReasonResource::collection($closedReasons);
    }
}
