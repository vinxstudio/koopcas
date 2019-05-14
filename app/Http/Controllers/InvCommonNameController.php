<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvCommonName;
use App\Http\Resources\InvCommonNameResource;

class InvCommonNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invcommonnames = InvCommonName::getAllInvCommonName();
        return InvCommonNameResource::collection($invcommonnames);
    }

   
}
