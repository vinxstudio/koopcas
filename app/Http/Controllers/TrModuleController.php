<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrModule;
use App\Http\Resources\TrModuleResource;

class TrModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trmodules = TrModule::getAllTrModule();
        return TrModuleResource::collection($trmodules);
    }

}
