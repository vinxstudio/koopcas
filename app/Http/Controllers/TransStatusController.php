<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransStatus;
use App\Http\Resources\TransStatusResource;

class TransStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transstatuses = TransStatus::getAllTransStatus();
        return TransStatusResource::collection($transstatuses);
    }

  
}
