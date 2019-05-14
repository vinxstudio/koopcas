<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPiSum;
use App\Http\Resources\InvPiSumResource;

class InvPiSumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invpisums = InvPiSum::getAllInvPiSum();
        return InvPiSumResource::collection($invpisums);
    }

 
}
