<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrtyObject;
use App\Http\Resources\PrtyObjectResource;

class PrtyObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prtyobjects = PrtyObject::getAllPrtyObject();
        return PrtyObjectResource::collection($prtyobjects);
    }

}
