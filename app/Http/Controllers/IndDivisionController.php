<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndDivision;
use App\Http\Resources\IndDivisionResource;

class IndDivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inddivisions = IndDivision::getAllIndDivision();
        return IndDivisionResource::collection($inddivisions);
    }

}
