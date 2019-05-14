<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvItemStatus;
use App\Http\Resources\InvItemStatusResource;

class InvItemStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitemstatuses = InvItemStatus::getAllInvItemStatus();
        return InvItemStatusResource::collection($invitemstatuses);
    }

 
}
