<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvBrand;
use App\Http\Resources\InvBrandResource;

class InvBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invbrands = InvBrand::getAllInvBrand();
        return InvBrandResource::collection($invbrands);

    }

   
}
