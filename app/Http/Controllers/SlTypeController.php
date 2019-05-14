<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SlType;
use App\Http\Resources\SlTypeResource;
use App\Http\Resources\SlTypeLoanResource;

class SlTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sltypes = SlType::getAllSlType();
        return SlTypeResource::collection($sltypes);
    }

    public function show($branchCode,$slcCode)
    {
        $sltype = SLType::getSLTypeForLoan($branchCode,$slcCode);
        return SlTypeLoanResource::collection($sltype);
    }

    public function showSL($branchCode)
    {
        $sltype = SLType::getSLTypeByBranch($branchCode);
        return SLTypeResource::collection($sltype);
    }

    public function showSLCLient($branchCode,$slcCode)
    {
        $sltype = SLType::getSLTypeForClientCISA($branchCode,$slcCode);
        return SLTypeResource::collection($sltype);
    }

    public function showSlShareCapital()
    {
        $sltype = SLType::getSlTypeForShareCapital();
        return SLTypeResource::collection($sltype);
    }
   
}
