<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityField;
use App\Http\Resources\ActivityFieldResource;

class ActivityFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activityfields = ActivityField::getAllActivityField();
        return ActivityFieldResource::collection($activityfields); 
    }

    
}
