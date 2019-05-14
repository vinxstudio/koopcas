<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BranchesClosed;
use App\Http\Resources\BranchesClosedResource;

class BranchesClosedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchesclosed = BranchesClosed::getAllBranchesClosed();
        return BranchesClosedResource::collection($branchesclosed);
    }

  
   
}
