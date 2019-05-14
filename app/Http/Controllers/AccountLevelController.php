<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountLevel;
use App\Http\Resources\AccountLevelResource;

class AccountLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Account Levels
        $acctLevels = AccountLevel::getAllAccountLevel();
        return AccountLevelResource::collection($acctLevels);
    }
}
