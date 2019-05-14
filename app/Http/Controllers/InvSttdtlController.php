<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvSttdtl;
use App\Http\Resources\InvSttdtlResource;

class InvSttdtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invsttdtls = InvSttdtl::getAllInvSttdtl();
        return InvSttdtlResource::collection($invsttdtls);
    }

 
}
