<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CreditorType;
use App\Http\Resources\CreditorTypeResource;

class CreditorTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditortypes = CreditorType::getAllCreditorType();
        return CreditorTypeResource::collection($creditortypes);
    }

   
}
