<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPoStatus;
use App\Http\Resources\InvPoStatusResource;

class InvPoStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invpostatus = InvPoStatus::getAllInvPoStatus();
        return InvPoStatusResource::collection($invpostatus);
    }

 
}
