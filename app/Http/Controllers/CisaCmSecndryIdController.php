<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaCmSecndryId;
use App\Http\Resources\CisaCmSecndryIdResource;

class CisaCmSecndryIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cmSecIdClientId)
    {
        $cisacmsecndryids = CisaCmSecndryId::getAllCisaCmSecndryIdById($cmSecIdClientId);
        return CisaCmSecndryIdResource::collection($cisacmsecndryids);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cisacmsecndryid = new CisaCmSecndryId;

        $id = CisaCmSecndryId::getClientLastId();
        foreach($id as $row){
            $clientid = $row->ClientID + 1;
        }

        $cisacmsecndryid->cmsecIDClientID = $clientid;
        $cisacmsecndryid->cmsecIDBR_CODE = 18;
        $cisacmsecndryid->cmsecID1Type = $request->input('cmSecId1Type');
        $cisacmsecndryid->cmsecID1Num = $request->input('cmSecId1Num');
        $cisacmsecndryid->cmsecID1IssueDate = $request->input('cmSecId1IssueDate');
        $cisacmsecndryid->cmsecID1Country = $request->input('cmSecId1Country');
        $cisacmsecndryid->cmsecID1ExpiryDate = $request->input('cmSecId1ExpiryDate');
        $cisacmsecndryid->cmsecID1IssuedBy = $request->input('cmSecId1IssuedBy');
        $cisacmsecndryid->cmsecID2Type = $request->input('cmSecId2Type');
        $cisacmsecndryid->cmsecID2Num = $request->input('cmSecId2Num');
        $cisacmsecndryid->cmsecID2IssueDate = $request->input('cmSecId2IssueDate');
        $cisacmsecndryid->cmsecID2Country = $request->input('cmSecId2Country');
        $cisacmsecndryid->cmsecID2ExpiryDate = $request->input('cmSecId2ExpiryDate');
        $cisacmsecndryid->cmsecID2IssuedBy = $request->input('cmSecId2IssuedBy');
        $cisacmsecndryid->cmsecID3Type = $request->input('cmSecId3Type');
        $cisacmsecndryid->cmsecID3Num = $request->input('cmSecId3Num');
        $cisacmsecndryid->cmsecID3IssueDate = $request->input('cmSecId3IssueDate');
        $cisacmsecndryid->cmsecID3Country = $request->input('cmSecId3Country');
        $cisacmsecndryid->cmsecID3ExpiryDate = $request->input('cmSecId3ExpiryDate');
        $cisacmsecndryid->cmsecID3IssuedBy = $request->input('cmSecId3IssuedBy');

        CisaCmSecndryId::insertCisaCmSecondaryId($cisacmsecndryid->cmsecIDClientID, $cisacmsecndryid->cmsecIDBR_CODE, $cisacmsecndryid->cmsecID1Type,
        $cisacmsecndryid->cmsecID1Num, $cisacmsecndryid->cmsecID1IssueDate, $cisacmsecndryid->cmsecID1Country, $cisacmsecndryid->cmsecID1ExpiryDate,
        $cisacmsecndryid->cmsecID1IssuedBy, $cisacmsecndryid->cmsecID2Type, $cisacmsecndryid->cmsecID2Num, $cisacmsecndryid->cmsecID2IssueDate, 
        $cisacmsecndryid->cmsecID2Country, $cisacmsecndryid->cmsecID2ExpiryDate, $cisacmsecndryid->cmsecID2IssuedBy, $cisacmsecndryid->cmsecID3Type,
        $cisacmsecndryid->cmsecID3Num, $cisacmsecndryid->cmsecID3IssueDate, $cisacmsecndryid->cmsecID3Country, $cisacmsecndryid->cmsecID3ExpiryDate,
        $cisacmsecndryid->cmsecID3IssuedBy);
    }

    /**
     * Update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cisacmsecndryid = new CisaCmSecndryId;

        $cisacmsecndryid->cmsecIDClientID = $request->input('cmSecIdClientId');
        $cisacmsecndryid->cmsecIDBR_CODE = $request->input('cmSecIdBrCode');
        $cisacmsecndryid->cmsecID1Type = $request->input('cmSecId1Type');
        $cisacmsecndryid->cmsecID1Num = $request->input('cmSecId1Num');
        $cisacmsecndryid->cmsecID1IssueDate = $request->input('cmSecId1IssueDate');
        $cisacmsecndryid->cmsecID1Country = $request->input('cmSecId1Country');
        $cisacmsecndryid->cmsecID1ExpiryDate = $request->input('cmSecId1ExpiryDate');
        $cisacmsecndryid->cmsecID1IssuedBy = $request->input('cmSecId1IssuedBy');
        $cisacmsecndryid->cmsecID2Type = $request->input('cmSecId2Type');
        $cisacmsecndryid->cmsecID2Num = $request->input('cmSecId2Num');
        $cisacmsecndryid->cmsecID2IssueDate = $request->input('cmSecId2IssueDate');
        $cisacmsecndryid->cmsecID2Country = $request->input('cmSecId2Country');
        $cisacmsecndryid->cmsecID2ExpiryDate = $request->input('cmSecId2ExpiryDate');
        $cisacmsecndryid->cmsecID2IssuedBy = $request->input('cmSecId2IssuedBy');
        $cisacmsecndryid->cmsecID3Type = $request->input('cmSecId3Type');
        $cisacmsecndryid->cmsecID3Num = $request->input('cmSecId3Num');
        $cisacmsecndryid->cmsecID3IssueDate = $request->input('cmSecId3IssueDate');
        $cisacmsecndryid->cmsecID3Country = $request->input('cmSecId3Country');
        $cisacmsecndryid->cmsecID3ExpiryDate = $request->input('cmSecId3ExpiryDate');
        $cisacmsecndryid->cmsecID3IssuedBy = $request->input('cmSecId3IssuedBy');

        CisaCmSecndryId::updateCisaSecondaryId($cisacmsecndryid->cmsecIDClientID, $cisacmsecndryid->cmsecIDBR_CODE, $cisacmsecndryid->cmsecID1Type,
        $cisacmsecndryid->cmsecID1Num, $cisacmsecndryid->cmsecID1IssueDate, $cisacmsecndryid->cmsecID1Country, $cisacmsecndryid->cmsecID1ExpiryDate,
        $cisacmsecndryid->cmsecID1IssuedBy, $cisacmsecndryid->cmsecID2Type, $cisacmsecndryid->cmsecID2Num, $cisacmsecndryid->cmsecID2IssueDate, 
        $cisacmsecndryid->cmsecID2Country, $cisacmsecndryid->cmsecID2ExpiryDate, $cisacmsecndryid->cmsecID2IssuedBy, $cisacmsecndryid->cmsecID3Type,
        $cisacmsecndryid->cmsecID3Num, $cisacmsecndryid->cmsecID3IssueDate, $cisacmsecndryid->cmsecID3Country, $cisacmsecndryid->cmsecID3ExpiryDate,
        $cisacmsecndryid->cmsecID3IssuedBy);
    }

}
