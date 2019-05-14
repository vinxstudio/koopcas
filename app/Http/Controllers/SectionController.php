<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Http\Resources\SectionResource;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::getAllSection();
        return SectionResource::collection($sections);
    }

  
}
