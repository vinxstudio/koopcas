<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PassBkType;
use App\Http\Resources\PassBkTypeResource;

class PassBkTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passbktypes = PassBkType::getAllPassBkType();
        return PassBkTypeResource::collection($passbktypes);
    }

  
}
