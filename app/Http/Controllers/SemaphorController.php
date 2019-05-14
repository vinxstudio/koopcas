<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Semaphor;
use App\Http\Resources\SemaphorResource;

class SemaphorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semaphors = Semaphor::getAllSemaphor();
        return SemaphorResource::collection($semaphors);
    }

}
