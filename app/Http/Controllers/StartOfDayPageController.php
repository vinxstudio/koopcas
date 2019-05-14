<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StartOfDay;

class StartOfDayPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-office.startofday.startofday');
    }
}
