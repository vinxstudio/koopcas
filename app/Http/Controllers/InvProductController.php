<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvProduct;
use App\Http\Resources\InvProductResource;

class InvProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invproducts = InvProduct::getAllInvProduct();
        return InvProductResource::collection($invproducts);
    }

   
}
