<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmpLevel;
use App\Http\Resources\EmpLevelResource;

class EmpLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empLevels = EmpLevel::getAllEmpLevels();
        return EmpLevelResource::collection($empLevels);
    }
}
