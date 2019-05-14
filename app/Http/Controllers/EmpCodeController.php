<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmpCode;
use App\Http\Resources\EmpCodeResource;

class EmpCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empCodes = EmpCode::getAllEmpCodes();
        return EmpCodeResource::collection($empCodes);
    }
}
