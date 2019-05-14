<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;
use App\Http\Resources\TermResource;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terms = Term::getAllTerm();
        return TermResource::collection($terms);
    }

  
}
