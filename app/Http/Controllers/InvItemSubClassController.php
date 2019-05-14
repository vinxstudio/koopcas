<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvItemSubClass;
use App\Http\Resources\InvItemSubClassResource;

class InvItemSubClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitemsubclasses = InvItemSubClass::getAllInvItemSubClass();
        return InvItemSubClassResource::collection($invitemsubclasses);
    }

  
}
