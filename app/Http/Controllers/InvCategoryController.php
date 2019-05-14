<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvCategory;
use App\Http\Resources\InvCategoryResource;

class InvCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invcategories = InvCategory::getAllInvCategory();
        return InvCategoryResource::collection($invcategories);
    }

    
}
