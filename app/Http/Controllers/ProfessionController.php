<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profession;
use App\Http\Resources\ProfessionResource;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professions = Profession::getAllProfessions();
        return ProfessionResource::collection($professions);
    }
}
