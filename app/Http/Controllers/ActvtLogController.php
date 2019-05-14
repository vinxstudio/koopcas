<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActvtLog;
use App\Http\Resources\ActvtLogResource;

class ActvtLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($userId)
    {
        $actvtlogs = ActvtLog::getAllActvtLogsById($userId);
        return ActvtLogResource::collection($actvtlogs);
    }
}
