<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beneficiary;
use App\Http\Resources\BeneificiaryResource;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $benef = Beneficiary::getAllBenefById($id);
        return BeneificiaryResource::collection($benef);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $benef = new Beneficiary;
        $benef->BenefBR_CODE = 18;
        $benef->ClientIDBenef = $request->input('clientIdBenef');
        $benef->BenefName = $request->input('benefName');
        $benef->BenefRelation = $request->input('benefRelation');
        $benef->BenefDateofBirth = $request->input('benefDateofBirth');
        $benef->benefOccu = $request->input('benefOccu');
        $benef->benefDateTimeAdded = $request->input('benefDateTimeAdded');

        Beneficiary::insertBenefById( $benef->BenefBR_CODE, $benef->ClientIDBenef, $benef->BenefName, $benef->BenefRelation,
        $benef->BenefDateofBirth, $benef->benefOccu, $benef->benefDateTimeAdded);
    }

     /**
     * Update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $benef = new Beneficiary;
        $benef->BenefBR_CODE = 18;
        $benef->BenefID = $request->input('benefID');
        $benef->ClientIDBenef = $request->input('clientIdBenef');
        $benef->BenefName = $request->input('benefName');
        $benef->BenefRelation = $request->input('benefRelation');
        $benef->BenefDateofBirth = $request->input('benefDateofBirth');
        $benef->benefOccu = $request->input('benefOccu');

        Beneficiary::updateBenefById( $benef->BenefID, $benef->BenefBR_CODE, $benef->ClientIDBenef, $benef->BenefName, $benef->BenefRelation,
        $benef->BenefDateofBirth, $benef->benefOccu);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Beneficiary::deleteBenefById($id);
    }
}
