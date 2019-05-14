<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CodeStorage;
use App\Http\Resources\CodeStorageResource;

class CodeStorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codestorages = CodeStorage::getAllCodeStorage();
        return CodeStorageResource::collection($codestorages);
    }

   
}
