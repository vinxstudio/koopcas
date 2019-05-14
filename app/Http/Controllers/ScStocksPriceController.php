<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScStocksPrice;
use App\Http\Resources\ScStocksPriceResource;

class ScStocksPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scstocksprices = ScStocksPrice::getAllScStocksPrice();
        return ScStocksPriceResource::collection($scstocksprices);
    }

    
}
