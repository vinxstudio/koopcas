<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Occupation;
use App\Http\Resources\OccupationResource;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occupations = Occupation::getAllOccupations();
        return OccupationResource::collection($occupations);
    }
}
