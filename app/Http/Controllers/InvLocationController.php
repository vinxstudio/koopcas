<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvLocation;
use App\Http\Resources\InvLocationResource;

class InvLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invlocations = InvLocation::getAllInvLocation();
        return InvLocationResource::collection($invlocations);
    }
}
