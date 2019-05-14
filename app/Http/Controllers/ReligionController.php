<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Religion;
use App\Http\Resources\ReligionResource;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $religions = Religion::getAllReligion();
        return ReligionResource::collection($religions);
    }

}
