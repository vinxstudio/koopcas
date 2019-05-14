<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvItemUnit;
use App\Http\Resources\InvItemUnitResource;

class InvItemUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitemunits = InvItemUnit::getAllInvItemUnit();
        return InvItemUnitResource::collection($invitemunits);
    }

   
}
