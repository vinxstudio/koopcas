<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DueDateType;
use App\Http\Resources\DueDateTypeResource;

class DueDateTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duedatetypes = DueDateType::getAllDueDateType();
        return DueDateTypeResource::collection($duedatetypes);
    }

 
}
