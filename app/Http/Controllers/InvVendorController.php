<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InvVendor;
use App\Http\Resources\InvVendorResource;

class InvVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientId)
    {
        $invvendors = InvVendor::getAllInvVendorById($clientId);
        return InvVendorResource::collection($invvendors);
    }

    public function show()
    {
        $showvendors = InvVendor::getAllShowVendorById();
        return InvVendorResource::collection($showvendors);
    }


   
}
