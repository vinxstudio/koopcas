<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Http\Resources\DepartmentResource;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::getAllDepartments();
        return DepartmentResource::collection($departments);
    }
}
