<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvSldtl;
use App\Http\Resources\InvSldtlResource;

class InvSldtlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invsldtls = InvSldtl::getAllInvSldtl();
        return InvSldtlResource::collection($invsldtls);
    }

}
