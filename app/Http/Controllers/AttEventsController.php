<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttEvents;
use App\Http\Resources\AttEventsResource;

class AttEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attevents = AttEvents::getAllAttEvents();
        return AttEventsResource::collection($attevents);
    }

    
}
