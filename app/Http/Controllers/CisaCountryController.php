<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaCountry;
use App\Http\Resources\CisaCountryResource;

class CisaCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cisacountries = CisaCountry::getAllCisaCountry();
        return CisaCountryResource::collection($cisacountries);
    }

}
