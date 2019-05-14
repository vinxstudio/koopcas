<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPidtl;
use App\Http\Resources\InvPidtlResource;

class InvPidtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invpidlts = InvPidtl::getAllInvPidtl();
        return InvPidtlResource::collection($invpidlts); 
    }

}
