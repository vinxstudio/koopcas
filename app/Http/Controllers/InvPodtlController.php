<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPodtl;
use App\Http\Resources\InvPodtlResource;

class InvPodtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invpodtls = InvPodtl::getAllInvPodtl();
        return InvPodtlResource::collection($invpodtls);
    }

}
