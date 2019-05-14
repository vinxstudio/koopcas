<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientType;
use App\Http\Resources\ClientTypeResource;

class ClientTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clienttypes = ClientType::getAllClientType();
        return ClientTypeResource::collection($clienttypes);
    }

}
