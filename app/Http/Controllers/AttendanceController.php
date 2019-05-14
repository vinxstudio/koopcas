<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Http\Resources\AttendanceResource;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientId)
    {
        $attendances = Attendance::getAllAttendanceById($clientId);
        return AttendanceResource::collection($attendances);
    }

  
}
