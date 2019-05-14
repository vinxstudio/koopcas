<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransAtms;
use App\Http\Resources\TransAtmsResource;

class TransAtmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transatms = TransAtms::getAllTransAtms();
        return TransAtmsResource::collection($transatms);
    }

   
}
