<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CisaMembersName;
use App\Http\Resources\CisaMembersNameResource;

class CisaMembersNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($memberClientId)
    {
        $cisamembersnames = CisaMembersName::getAllCisaMembersNameById($memberClientId);
        return CisaMembersNameResource::collection($cisamembersnames);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cisamembersname = new CisaMembersName;

        $id = CisaMembersName::getClientLastId();
        foreach($id as $row){
            $clientid = $row->ClientID + 1;
        }

        $cisamembersname->MemberBR_CODE = 18;
        $cisamembersname->MemberClientID = $clientid;
        $cisamembersname->Fname = $request->input('fName');
        $cisamembersname->Mname = $request->input('mName');
        $cisamembersname->Lname = $request->input('lName');
        $cisamembersname->NameExtnt = $request->input('nameExtnt');

        CisaMembersName::insertCisaMember($cisamembersname->MemberBR_CODE, $cisamembersname->MemberClientID, $cisamembersname->Fname,
        $cisamembersname->Mname, $cisamembersname->Lname, $cisamembersname->NameExtnt);
    }

    /**
     * Update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cisamembersname = new CisaMembersName;

        $cisamembersname->MemberBR_CODE = 18;
        $cisamembersname->MemberClientID = $request->input('memberClientId');
        $cisamembersname->Fname = $request->input('fName');
        $cisamembersname->Mname = $request->input('mName');
        $cisamembersname->Lname = $request->input('lName');
        $cisamembersname->NameExtnt = $request->input('nameExtnt');

        CisaMembersName::updateCisaMemberById($cisamembersname->MemberBR_CODE, $cisamembersname->MemberClientID, $cisamembersname->Fname,
        $cisamembersname->Mname, $cisamembersname->Lname, $cisamembersname->NameExtnt);
    }

}
