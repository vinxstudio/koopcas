<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restrik;
use App\Http\Resources\RestrikResource;

class RestrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restriks = Restrik::getAllRestrik();
        return RestrikResource::collection($restriks);
    }
}
