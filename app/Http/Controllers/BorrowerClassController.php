<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BorrowerClass;
use App\Http\Resources\BorrowerClassResource;

class BorrowerClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrowerclasses = BorrowerClass::getAllBorrowerClass();
        return BorrowerClassResource::collection($borrowerclasses);
    }

   
}
