<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransType;
use App\Http\Resources\TransTypeResource;

class TransTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transtypes = TransType::getAllTransType();
        return TransTypeResource::collection($transtypes);
    }

    public function show($transModule)
    {
        $transtypes = TransType::getTransTypeByTransModule($transModule);
        return TransTypeResource::collection($transtypes);
    }

    public function showTransType()
    {
        $transtypes = TransType::getTransTypeForLoan();
        return TransTypeResource::collection($transtypes);
    }

   
}
