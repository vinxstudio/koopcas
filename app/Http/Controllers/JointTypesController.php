<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JoinType;
use App\Http\Resources\JointTypeResource;

class JointTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jntTypes = JoinType::getAllJointTypes();
        return JointTypeResource::collection($jntTypes);
    }
}
