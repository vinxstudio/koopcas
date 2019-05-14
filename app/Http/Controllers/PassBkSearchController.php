<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PassBkSearch;
use App\Http\Resources\PassBkSearchResource;

class PassBkSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front-office.passbooksearch.passbooksearch');
    }
}
