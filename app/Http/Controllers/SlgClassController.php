<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlgClass;
use App\Http\Resources\SlgClassResource;

class SlgClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slgclasses = SlgClass::getAllSlgClass();
        return SlgClassResource::collection($slgclasses);
    }

   
}
