<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GenerationVerificationCode;
use App\Http\Resources\GenerationVerificationCodeResource;

class GenerationVerificationCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $gvc = GenerationVerificationCode::getAllGenerationVerificationCodeById($id);
        return GenerationVerificationCodeResource::collection($gvc);
    }
   
}