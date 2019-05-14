<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branches;
use App\Http\Resources\BranchesResource;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branches::getAllBranches();
        return BranchesResource::collection($branches);
    }

    public function show($branchid)
    {
        $branch = Branches::getAllBranchesById($branchid);
        return BranchesResource::collection($branch);
    }

    public function insert(Request $request)
    {
        $branch = new Branches;

        $branch->BranchesID = $request->input('branchesId');
        $branch->BranchesDesc = $request->input('branchesDesc');
        $branch->Address = $request->input('address');
        $branch->Manager = $request->input('manager');
        $branch->PO_ContactName = $request->input('poContactName');
        $branch->ContactNumbers = $request->input('contactNumbers');
        $branch->TIN = $request->input('tin');
        $branch->POS_SerialNumber = $request->input('posSerialNumber');
        $branch->POS_MIN = $request->input('posMin');
        $branch->EmailAddress = $request->input('emailAddress');
        $branch->POS_PermitNumber = $request->input('posPermitNumber');
        $branch->IsEnableRebates = $request->input('isEnableRebates');
        $branch->REB_SLC_CODE = $request->input('rebSlcCode');
        $branch->REB_SLT_CODE = $request->input('rebSltCode');
        $branch->REB_EXPACCT = $request->input('rebExpAcct');
        $branch->IsConsolidateRebateEntries = $request->input('isConsolidateRebateEntries');
        $branch->CDAREGNUM = $request->input('cdARegNum');
        $branch->ACRONYM = $request->input('acronym');
        $branch->PN_LOCATION = $request->input('pnLocation');
        $branch->PN_SS_AT = $request->input('pnSsAt');
        $branch->LottoNumDigit = $request->input('lottoNumDigt');
        $branch->LottoDepositLimit = $request->input('lottoDepositLimit');

        Branches::insertBranch($branch->BranchesID, $branch->BranchesDesc, $branch->Address, $branch->Manager, $branch->PO_ContactName, $branch->ContactNumbers, $branch->TIN, $branch->POS_SerialNumber,
        $branch->POS_MIN, $branch->EmailAddress, $branch->POS_PermitNumber, $branch->IsEnableRebates, $branch->REB_SLC_CODE, $branch->REB_SLT_CODE, $branch->REB_EXPACCT, $branch->IsConsolidateRebateEntries,
        $branch->CDAREGNUM, $branch->ACRONYM, $branch->PN_LOCATION, $branch->PN_SS_AT, $branch->LottoNumDigit, $branch->LottoDepositLimit);
    }

   
}
