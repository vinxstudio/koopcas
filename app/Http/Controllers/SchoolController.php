<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\Http\Resources\SchoolResource;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::getAllSchools();
        return SchoolResource::collection($schools);
    }
}
