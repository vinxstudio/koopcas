<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaSoleTrader;
use App\Http\Resources\CisaSoleTraderResource;

class CisaSoleTraderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($soleTraderClientId)
    {
        $cisasoletraders = CisaSoleTrader::getAllCisaSoleTraderById($soleTraderClientId);
        return CisaSoleTraderResource::collection($cisasoletraders);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cisasoletrader = new CisaSoleTrader;

        $id = CisaSoleTrader::getClientLastId();
        foreach($id as $row){
            $clientid = $row->ClientID + 1;
        }

        $cisasoletrader->SoleTraderClientID = $clientid;
        $cisasoletrader->SoleTraderBR_CODE = 18;
        $cisasoletrader->SoleTraderName = $request->input('soleTraderName');
        $cisasoletrader->SoleTraderMStreetNo = $request->input('soleTraderMStreetNo');
        $cisasoletrader->SoleTraderMPostalCode = $request->input('soleTraderMPostalCode');
        $cisasoletrader->SoleTraderMSubd = $request->input('soleTraderMSubd');
        $cisasoletrader->SoleTraderMBRG = $request->input('soleTraderMBrgy');
        $cisasoletrader->SoleTraderMCity = $request->input('soleTraderMCity');
        $cisasoletrader->SoleTraderMProv = $request->input('soleTraderMProv');
        $cisasoletrader->SoleTraderMHouseType = $request->input('soleTraderMHouseType');
        $cisasoletrader->SoleTraderMOccupiedSince = $request->input('soleTraderMOccupiedSince');
        $cisasoletrader->SoleTraderMIDtype = $request->input('soleTraderMIdType');
        $cisasoletrader->SoleTraderMIDnum = $request->input('soleTraderMIdNum');
        $cisasoletrader->SoleTraderMCntctType = $request->input('soleTraderMContactType');
        $cisasoletrader->SoleTraderMCntctValue = $request->input('soleTraderMContactValue');
        $cisasoletrader->SoleTraderAStreetNo = $request->input('soleTraderAStreetNo');
        $cisasoletrader->SoleTraderAPostalCode = $request->input('soleTraderAPostalCode');
        $cisasoletrader->SoleTraderASubd = $request->input('soleTraderASubd');
        $cisasoletrader->SoleTraderABRGY = $request->input('soleTraderABrgy');
        $cisasoletrader->SoleTraderACity = $request->input('soleTraderACity');
        $cisasoletrader->SoleTraderAProv = $request->input('soleTraderAProv');
        $cisasoletrader->SoleTraderAHouseType = $request->input('soleTraderAHouseType');
        $cisasoletrader->SoleTraderAOccupiedSince = $request->input('soleTraderAOccupiedSince');
        $cisasoletrader->SoleTraderAIDtype = $request->input('soleTraderAIdType');
        $cisasoletrader->SoleTraderAIDnum = $request->input('soleTraderAIdNum');
        $cisasoletrader->SoleTraderACntctType = $request->input('soleTraderAContactType');
        $cisasoletrader->SoleTraderACntctValue = $request->input('soleTraderAContactValue');

        CisaSoleTrader::insertCisaSoleTrader($cisasoletrader->SoleTraderClientID, $cisasoletrader->SoleTraderBR_CODE, $cisasoletrader->SoleTraderName,
        $cisasoletrader->SoleTraderMStreetNo, $cisasoletrader->SoleTraderMPostalCode, $cisasoletrader->SoleTraderMSubd, $cisasoletrader->SoleTraderMBRG,
        $cisasoletrader->SoleTraderMCity, $cisasoletrader->SoleTraderMProv, $cisasoletrader->SoleTraderMHouseType, $cisasoletrader->SoleTraderMOccupiedSince,
        $cisasoletrader->SoleTraderMIDtype, $cisasoletrader->SoleTraderMIDnum, $cisasoletrader->SoleTraderMCntctType, $cisasoletrader->SoleTraderMCntctValue,
        $cisasoletrader->SoleTraderAStreetNo, $cisasoletrader->SoleTraderAPostalCode, $cisasoletrader->SoleTraderASubd, $cisasoletrader->SoleTraderABRGY,
        $cisasoletrader->SoleTraderACity, $cisasoletrader->SoleTraderAProv, $cisasoletrader->SoleTraderAHouseType, $cisasoletrader->SoleTraderAOccupiedSince,
        $cisasoletrader->SoleTraderAIDtype, $cisasoletrader->SoleTraderAIDnum, $cisasoletrader->SoleTraderACntctType, $cisasoletrader->SoleTraderACntctValue);
    }

    /**
     * Update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cisasoletrader = new CisaSoleTrader;

        $cisasoletrader->SoleTraderClientID = $request->input('soleTraderClientID');
        $cisasoletrader->SoleTraderBR_CODE = 18;
        $cisasoletrader->SoleTraderName = $request->input('soleTraderName');
        $cisasoletrader->SoleTraderMStreetNo = $request->input('soleTraderMStreetNo');
        $cisasoletrader->SoleTraderMPostalCode = $request->input('soleTraderMPostalCode');
        $cisasoletrader->SoleTraderMSubd = $request->input('soleTraderMSubd');
        $cisasoletrader->SoleTraderMBRG = $request->input('soleTraderMBrgy');
        $cisasoletrader->SoleTraderMCity = $request->input('soleTraderMCity');
        $cisasoletrader->SoleTraderMProv = $request->input('soleTraderMProv');
        $cisasoletrader->SoleTraderMHouseType = $request->input('soleTraderMHouseType');
        $cisasoletrader->SoleTraderMOccupiedSince = $request->input('soleTraderMOccupiedSince');
        $cisasoletrader->SoleTraderMIDtype = $request->input('soleTraderMIdType');
        $cisasoletrader->SoleTraderMIDnum = $request->input('soleTraderMIdNum');
        $cisasoletrader->SoleTraderMCntctType = $request->input('soleTraderMContactType');
        $cisasoletrader->SoleTraderMCntctValue = $request->input('soleTraderMContactValue');
        $cisasoletrader->SoleTraderAStreetNo = $request->input('soleTraderAStreetNo');
        $cisasoletrader->SoleTraderAPostalCode = $request->input('soleTraderAPostalCode');
        $cisasoletrader->SoleTraderASubd = $request->input('soleTraderASubd');
        $cisasoletrader->SoleTraderABRGY = $request->input('soleTraderABrgy');
        $cisasoletrader->SoleTraderACity = $request->input('soleTraderACity');
        $cisasoletrader->SoleTraderAProv = $request->input('soleTraderAProv');
        $cisasoletrader->SoleTraderAHouseType = $request->input('soleTraderAHouseType');
        $cisasoletrader->SoleTraderAOccupiedSince = $request->input('soleTraderAOccupiedSince');
        $cisasoletrader->SoleTraderAIDtype = $request->input('soleTraderAIdType');
        $cisasoletrader->SoleTraderAIDnum = $request->input('soleTraderAIdNum');
        $cisasoletrader->SoleTraderACntctType = $request->input('soleTraderAContactType');
        $cisasoletrader->SoleTraderACntctValue = $request->input('soleTraderAContactValue');

        CisaSoleTrader::updateCisaSoleTraderById($cisasoletrader->SoleTraderClientID, $cisasoletrader->SoleTraderBR_CODE, $cisasoletrader->SoleTraderName,
        $cisasoletrader->SoleTraderMStreetNo, $cisasoletrader->SoleTraderMPostalCode, $cisasoletrader->SoleTraderMSubd, $cisasoletrader->SoleTraderMBRG,
        $cisasoletrader->SoleTraderMCity, $cisasoletrader->SoleTraderMProv, $cisasoletrader->SoleTraderMHouseType, $cisasoletrader->SoleTraderMOccupiedSince,
        $cisasoletrader->SoleTraderMIDtype, $cisasoletrader->SoleTraderMIDnum, $cisasoletrader->SoleTraderMCntctType, $cisasoletrader->SoleTraderMCntctValue,
        $cisasoletrader->SoleTraderAStreetNo, $cisasoletrader->SoleTraderAPostalCode, $cisasoletrader->SoleTraderASubd, $cisasoletrader->SoleTraderABRGY,
        $cisasoletrader->SoleTraderACity, $cisasoletrader->SoleTraderAProv, $cisasoletrader->SoleTraderAHouseType, $cisasoletrader->SoleTraderAOccupiedSince,
        $cisasoletrader->SoleTraderAIDtype, $cisasoletrader->SoleTraderAIDnum, $cisasoletrader->SoleTraderACntctType, $cisasoletrader->SoleTraderACntctValue);
    }

}
