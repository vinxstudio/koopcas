<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvTax;
use App\Http\Resources\InvTaxResource;

class InvTaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invtaxes = InvTax::getAllInvTax();
        return InvTaxResource::collection($invtaxes);
    }

   
}
