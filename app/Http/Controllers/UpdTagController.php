<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UpdTag;
use App\Http\Resources\UpdTagResource;

class UpdTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updtags = UpdTag::getAllUpdTag();
        return UpdTagResource::collection($updtags);
    }

   
}
