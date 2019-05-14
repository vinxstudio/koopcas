<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountStatus;
use App\Http\Resources\AccountStatusResource;

class AccountStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acctStatuses = AccountStatus::getAllAccountStatuses();
        return AccountStatusResource::collection($acctStatuses);
    }
}
