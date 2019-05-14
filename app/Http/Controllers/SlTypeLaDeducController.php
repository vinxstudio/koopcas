<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlTypeLaDeduc;
use App\Http\Resources\SlTypeLaDeducResource;

class SlTypeLaDeducController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sltypeladeducs = SlTypeLaDeduc::getAllSlTypeLaDeduc();
        return SlTypeLaDeducResource::collection($sltypeladeducs);
    }

    
}
