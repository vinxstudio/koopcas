<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChkType;
use App\Http\Resources\ChkTypeResource;

class ChkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chktypes = ChkType::getAllChkType();
        return ChkTypeResource::collection($chktypes);
    }

   
}
