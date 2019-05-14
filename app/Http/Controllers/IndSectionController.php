<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IndSection;
use App\Http\Resources\IndSectionResource;

class IndSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indsections = IndSection::getAllIndSections();
        return IndSectionResource::collection($indsections);
    }
}
