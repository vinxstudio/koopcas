<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GlAcctType;
use App\Http\Resources\GlAcctTypeResource;

class GlAcctTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glaccttypes = GlAcctType::getAllGlAcctType();
        return GlAcctTypeResource::collection($glaccttypes);
    }

}
