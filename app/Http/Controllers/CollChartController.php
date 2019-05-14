<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollChart;
use App\Http\Resources\CollChartResource;

class CollChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collcharts = CollChart::getAllCollChart();
        return CollChartResource::collection($collcharts);
    }

   
}
