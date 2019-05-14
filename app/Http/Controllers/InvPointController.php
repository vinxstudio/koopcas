<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPoint;
use App\Http\Resources\InvPointResource;

class InvPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invpoints = InvPoint::getAllInvPoint();
        return InvPointResource::collection($invpoints);
    }

}
