<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conn;
use App\Http\Resources\ConnResource;

class ConnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conns = Conn::getAllConn();
        return ConnResource::collection($conns);   
    }

}
