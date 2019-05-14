<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sc;
use App\TransSum;
use App\Http\Resources\ScResource;
use App\Http\Resources\ScSearchResource;
use App\Http\Resources\PlayToSaveRegisterResource;

class ScController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($clientIdSc)
    {
        $scs = Sc::getAllSc($clientIdSc);
        return ScSearchResource::collection($scs);
    }

    public function showEmptySc($clientIdSc)
    {
        $scs = Sc::getAllEmptySc($clientIdSc);
        return ScSearchResource::collection($scs);
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($scBrCode, $scSlcCode, $scSltCode, $scRefNo, $clientIdSc)
    {
        $sc = Sc::getAllScById($scBrCode, $scSlcCode, $scSltCode, $scRefNo, $clientIdSc);
        return ScResource::collection($sc);
    }

    public function showPlayToSaveThree()
    {
        $sc = Sc::getPlayToSaveThree();
        return PlayToSaveRegisterResource::collection($sc);
    }

    public function showPlayToSaveSix()
    {
        $sc = Sc::getPlayToSaveSix();
        return PlayToSaveRegisterResource::collection($sc);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sc = new Sc;

        $slc = Sc::getSlTypes();
        foreach($slc as $row){
            $slcCode = $row->SLTypeSLC_CODE;
        }

        $refno = 1;
        $refnum = Sc::getLastRefNo();
        foreach($refnum as $row){
            $refNo = $row->SCREF_NO + 1;
            $refno = $refNo;
        }

        $sc->SCBR_CODE = $request->input('scBrCode');
        $sc->SCSLC_CODE = $slcCode;
        $sc->SCSLT_CODE = $request->input('scSltCode');
        $sc->SCREF_NO = $refno;
        $sc->ClientIDSC = $request->input('clientIdSc');
        $sc->SCTR_DATE = $request->input('scTrDate');
        $sc->SCSTATUS = $request->input('scStatus');
        $sc->SCMIN_BAL = $request->input('scMinBal');
        $sc->SCUPDDATETIME = $request->input('scUpdDateTime');
        $sc->SCREMARKS = $request->input('scRemarks');
        $sc->SCUpdUser = $request->input('scUpdUser');

        Sc::insertSc($sc->SCBR_CODE, $sc->SCSLC_CODE, $sc->SCSLT_CODE, $sc->SCREF_NO, $sc->ClientIDSC, $sc->SCTR_DATE, $sc->SCSTATUS, 
        $sc->SCMIN_BAL, $sc->SCUPDDATETIME, $sc->SCREMARKS, $sc->SCUpdUser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sc = new Sc;
        $count = TransSum::getLastTrId();
        foreach($count as $row){
            $id = $row->TR_ID;
        }

        $sc->SCTR_ID = $id;
        $sc->SCBR_CODE = $request->input('scBrCode');
        $sc->SCSLC_CODE = $request->input('scSlcCode');
        $sc->SCSLT_CODE = $request->input('scSltCode');
        $sc->SCREF_NO = $request->input('scRefNo');
        $sc->ClientIDSC = $request->input('clientIdSc');
        $sc->SCTR_DATE = $request->input('scTrDate');
        $sc->SCSTATUS = $request->input('scStatus');
        $sc->SCMIN_BAL = $request->input('scMinBal');
        $sc->SCUPDDATETIME = $request->input('scUpdDateTime');
        $sc->SCREMARKS = $request->input('scRemarks');
        $sc->SCUpdUser = $request->input('scUpdUser');

        Sc::updateSc($sc->SCTR_ID,$sc->SCBR_CODE, $sc->SCSLC_CODE, $sc->SCSLT_CODE, $sc->SCREF_NO, $sc->ClientIDSC, $sc->SCTR_DATE, $sc->SCSTATUS, 
        $sc->SCMIN_BAL, $sc->SCUPDDATETIME, $sc->SCREMARKS, $sc->SCUpdUser);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($scBrCode, $scSlcCode, $scSltCode, $scRefNo, $clientIdSc)
    {
        Sc::deleteScById($scBrCode, $scSlcCode, $scSltCode, $scRefNo, $clientIdSc);
    }
}
