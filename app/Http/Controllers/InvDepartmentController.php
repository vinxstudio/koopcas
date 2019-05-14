<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvDepartment;
use App\Http\Resources\InvDepartmentResource;

class InvDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invdepartments = InvDepartment::getAllInvDepartment();
        return InvDepartmentResource::collection($invdepartments);
    }

   
}
