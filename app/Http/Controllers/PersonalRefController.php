<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalReference;
use App\Http\Resources\PersonalRefResource;

class PersonalRefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $prefs = PersonalReference::getAllPrefsById($id);
        return PersonalRefResource::collection($prefs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pref = new PersonalReference;
        $pref->PRefBR_CODE = 18;
        $pref->ClientIDPRef = $request->input('clientIdPRef');
        $pref->PRefName = $request->input('pRefName');
        $pref->PRefAddress = $request->input('pRefAddress');
        $pref->PRefTelNum = $request->input('pRefTelNum');
        $pref->PRefRelation = $request->input('pRefRelation');
        $pref->PRefRemarks = $request->input('pRefRemarks');
        $pref->PRefDateTimeAdded = $request->input('pRefDateTimeAdded');

        PersonalReference::insertPrefsById($pref->PRefBR_CODE, $pref->ClientIDPRef, $pref->PRefName, $pref->PRefAddress,
        $pref->PRefTelNum, $pref->PRefRelation, $pref->PRefRemarks, $pref->PRefDateTimeAdded);
    }

     /**
     * Update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $pref = new PersonalReference;
        $pref->PRefBR_CODE = 18;
        $pref->PRefID = $request->input('pRefId');
        $pref->ClientIDPRef = $request->input('clientIdPRef');
        $pref->PRefName = $request->input('pRefName');
        $pref->PRefAddress = $request->input('pRefAddress');
        $pref->PRefTelNum = $request->input('pRefTelNum');
        $pref->PRefRelation = $request->input('pRefRelation');
        $pref->PRefRemarks = $request->input('pRefRemarks');
        $pref->PRefDateTimeAdded = $request->input('pRefDateTimeAdded');

        PersonalReference::updatePrefsById( $pref->PRefID, $pref->PRefBR_CODE, $pref->ClientIDPRef, $pref->PRefName, $pref->PRefAddress,
        $pref->PRefTelNum, $pref->PRefRelation, $pref->PRefRemarks, $pref->PRefDateTimeAdded);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PersonalReference::deletePersonalRefById($id);
    }
}
