<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holidays;
use App\Http\Resources\HolidaysResource;

class HolidaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $holidays = Holidays::getAllHolidays();
        return HolidaysResource::collection($holidays);
    }

    
}
