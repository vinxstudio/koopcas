<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cluster;
use App\Http\Resources\ClusterResource;

class ClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clusters = Cluster::getAllCluster();
        return ClusterResource::collection($clusters);
    }

  
}
