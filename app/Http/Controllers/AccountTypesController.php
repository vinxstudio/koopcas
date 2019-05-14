<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccountTypes;
use App\Http\Resources\AccountTypeResource;

class AccountTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acctTypes = AccountTypes::getAllAccountTypes();
        return AccountTypeResource::collection($acctTypes);
    }
}
