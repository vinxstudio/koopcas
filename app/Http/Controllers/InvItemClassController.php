<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvItemClass;
use App\Http\Resources\InvItemClassResource;

class InvItemClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitemclasses = InvItemClass::getAllInvItemClass();
        return InvItemClassResource::collection($invitemclasses);
    }

  
}
