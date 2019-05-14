<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ConnSum;
use App\Http\Resources\ConnSumResource;

class ConnSumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $connsums = ConnSum::getAllConnSum();
        return ConnSumResource::collection($connsums);
    }

}
