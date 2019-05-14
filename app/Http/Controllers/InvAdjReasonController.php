<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvAdjReason;
use App\Http\Resources\InvAdjReasonResource;

class InvAdjReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invadjreasons = InvAdjReason::getAllInvAdjReason();
        return InvAdjReasonResource::collection($invadjreasons);
    }

   
}
