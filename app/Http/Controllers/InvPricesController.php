<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvPrices;
use App\Http\Resources\InvPricesResource;

class InvPricesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invprices = InvPrices::getAllInvPrices();
        return InvPricesResource::collection($invprices);
    }

   
}
