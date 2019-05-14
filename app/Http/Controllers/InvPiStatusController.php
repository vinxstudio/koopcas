<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPiStatus;
use App\Http\Resources\InvPiStatusResource;

class InvPiStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invpistatuses = InvPiStatus::getAllInvPiStatus();
        return InvPiStatusResource::collection($invpistatuses);
    }

   
}
