<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityList;
use App\Http\Resources\ActivityListResource;


class ActivityListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activitylists = ActivityList::getAllActivityList();
        return ActivityListResource::collection($activitylists);
    }

   
}
