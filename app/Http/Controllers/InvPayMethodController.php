<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPayMethod;
use App\Http\Resources\InvPayMethodResource; 

class InvPayMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($requestClientId)
    {
        $invpaymethods = InvPayMethod::getAllInvPayMethodById($requestClientId);
        return InvPayMethodResource::collection($invpaymethods);
    }

  
}
