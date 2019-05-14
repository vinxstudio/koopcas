<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobPosition;
use App\Http\Resources\JobPositionResource;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobpositions = JobPosition::getAllJobPosition();
        return JobPositionResource::collection($jobpositions);
    }

}
