<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SavClass;
use App\Http\Resources\SavClassResource;

class SavClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $savclasses = SavClass::getAllSavClass();
        return SavClassResource::collection($savclasses);
    }

}
