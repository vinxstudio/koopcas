<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPoSum;
use App\Http\Resources\InvPoSumResource;

class InvPoSumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invposums = InvPoSum::getAllInvPoSum();
        return InvPoSumResource::collection($invposums);
    }

  
}
