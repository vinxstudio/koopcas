<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AlertLevel;
use App\Http\Resources\AlertLevelResource;

class AlertLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alertLevels = AlertLevel::getAllAlertLevels();
        return AlertLevelResource::collection($alertLevels);
    }
}
