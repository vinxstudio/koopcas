<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaymentMode;
use App\Http\Resources\PaymentModeResource;

class PaymentModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentmodes = PaymentMode::getAllPaymentMode();
        return PaymentModeResource::collection($paymentmodes);
    }

  
}
