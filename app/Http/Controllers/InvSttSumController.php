<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvSttSum;
use App\Http\Resources\InvSttSumResource;

class InvSttSumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invsttsums = InvSttSum::getAllInvSttSum();
        return InvSttSumResource::collection($invsttsums);
    }

   
}
