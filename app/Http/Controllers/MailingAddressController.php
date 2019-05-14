<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MailingAddress;
use App\Http\Resources\MailingAddressResource;

class MailingAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mailingAddresses = MailingAddress::getAllMailingAddress();
        return MailingAddressResource::collection($mailingAddresses);
    }
}
