<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NumDays;
use App\Http\Resources\NumDaysResource;

class NumDaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numdays = NumDays::getAllNumDays();
        return NumDaysResource::collection($numdays);
    }

}
