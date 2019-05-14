<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvSttStatus;
use App\Http\Resources\InvSttStatusResource;

class InvSttStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invsttstatuses = InvSttStatus::getAllInvSttStatus();
        return InvSttStatusResource::collection($invsttstatuses);
    }

 
}
