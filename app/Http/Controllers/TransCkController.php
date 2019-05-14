<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransCk;
use App\Http\Resources\TransCkResource;

class TransCkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transcks = TransCk::getAllTransCk();
        return TransCkResource::collection($transcks);
    }

   
}
