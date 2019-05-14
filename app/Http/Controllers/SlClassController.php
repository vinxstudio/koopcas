<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlClass;
use App\Http\Resources\SlClassResource;

class SlClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slclasses = SlClass::getAllSlClass();
        return SlClassResource::collection($slclasses);
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $slclass = SlClass::getSLClassForLoanApp();
        return SlClassResource::collection($slclass);
    }

    public function showSLClassLoan()
    {
        $slclass = SlClass::getSLClassForBatchEdit();
        return SlClassResource::collection($slclass);
    }

    public function showSLClassClient(){
        $slclass = SlClass::getSLClassForClientCISA();
        return SlClassResource::collection($slclass);
    }

   
}
