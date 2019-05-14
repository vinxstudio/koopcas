<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoanApp;
use App\Http\Resources\LoanAppResource;
use App\Http\Resources\LoanAppsDisplayResource;

class LoanAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $loanapps = LoanApp::getLoanAppById($id);
        return LoanAppsDisplayResource::collection($loanapps);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loanapp = new LoanApp;

        $loanapp->BR_CODE = 18;
        $loanapp->ID = $request->input('id');
        $loanapp->SLC_CODE = $request->input('slcCode');
        $loanapp->SLT_CODE = $request->input('sltCode');
        $loanapp->REF_NO = $request->input('refNo');
        $loanapp->CLIENTID = $request->input('clientId');
        $loanapp->STATUSID = $request->input('statusId');
        $loanapp->TR_DATE = $request->input('trDate');
        $loanapp->TR_TIME = $request->input('trTime');
        $loanapp->RTR_DATE = $request->input('rTrDate');
        $loanapp->ENCDBY = $request->input('encdBy');
        $loanapp->APPRV_DATE = $request->input('apprvDate');
        $loanapp->APPRVBY = $request->input('apprvBy');
        $loanapp->TR_CODE = $request->input('trCode');
        $loanapp->TR_CTLNO = $request->input('trCtlNo');
        $loanapp->NPSLC_CODE = $request->input('npSlcCode');
        $loanapp->NPSLT_CODE = $request->input('npSltCode');
        $loanapp->NPREF_NO = $request->input('npRefNo');
        $loanapp->NPACCT_CODE = $request->input('npAcctCode');
        $loanapp->DEDUCGROUP = $request->input('deducGroup');
        $loanapp->DOC_NO = $request->input('docNo');
        $loanapp->PROPOSAL = $request->input('proposal');
        $loanapp->CIREPORT = $request->input('ciReport');
        $loanapp->BASISRECOMM = $request->input('basiscRecomm');
        $loanapp->REMARKS = $request->input('remarks');
        $loanapp->REPAYMENT = $request->input('repayment');

        LoanApp::insertLoanApp($loanapp->BR_CODE, $loanapp->ID, $loanapp->SLC_CODE, $loanapp->SLT_CODE, $loanapp->REF_NO, $loanapp->CLIENTID,
        $loanapp->STATUSID, $loanapp->TR_DATE, $loanapp->TR_TIME, $loanapp->RTR_DATE, $loanapp->ENCDBY, $loanapp->APPRV_DATE, $loanapp->APPRVBY,
        $loanapp->TR_CODE, $loanapp->TR_CTLNO, $loanapp->NPSLC_CODE, $loanapp->NPSLT_CODE, $loanapp->NPREF_NO, $loanapp->NPACCT_CODE, 
        $loanapp->DEDUCGROUP, $loanapp->DOC_NO, $loanapp->PROPOSAL, $loanapp->CIREPORT, $loanapp->BASISRECOMM, $loanapp->REMARKS, $loanapp->REPAYMENT);
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
        $loanapp = new LoanApp;

        $loanapp->BR_CODE = $request->input('brCode');
        $loanapp->ID = $request->input('id');
        $loanapp->SLC_CODE = $request->input('slcCode');
        $loanapp->SLT_CODE = $request->input('sltCode');
        $loanapp->REF_NO = $request->input('refNo');
        $loanapp->CLIENTID = $request->input('clientId');
        $loanapp->STATUSID = $request->input('statusId');
        $loanapp->TR_DATE = $request->input('trDate');
        $loanapp->TR_TIME = $request->input('trTime');
        $loanapp->RTR_DATE = $request->input('rTrDate');
        $loanapp->ENCDBY = $request->input('encdBy');
        $loanapp->APPRV_DATE = $request->input('apprvDate');
        $loanapp->APPRVBY = $request->input('apprvBy');
        $loanapp->TR_CODE = $request->input('trCode');
        $loanapp->TR_CTLNO = $request->input('trCtlNo');
        $loanapp->NPSLC_CODE = $request->input('npSlcCode');
        $loanapp->NPSLT_CODE = $request->input('npSltCode');
        $loanapp->NPREF_NO = $request->input('npRefNo');
        $loanapp->NPACCT_CODE = $request->input('npAcctCode');
        $loanapp->DEDUCGROUP = $request->input('deducGroup');
        $loanapp->DOC_NO = $request->input('docNo');
        $loanapp->PROPOSAL = $request->input('proposal');
        $loanapp->CIREPORT = $request->input('ciReport');
        $loanapp->BASISRECOMM = $request->input('basiscRecomm');
        $loanapp->REMARKS = $request->input('remarks');
        $loanapp->REPAYMENT = $request->input('repayment');

        LoanApp::editLoanApp($loanapp->BR_CODE, $loanapp->ID, $loanapp->SLC_CODE, $loanapp->SLT_CODE, $loanapp->REF_NO, $loanapp->CLIENTID,
        $loanapp->STATUSID, $loanapp->TR_DATE, $loanapp->TR_TIME, $loanapp->RTR_DATE, $loanapp->ENCDBY, $loanapp->APPRV_DATE, $loanapp->APPRVBY,
        $loanapp->TR_CODE, $loanapp->TR_CTLNO, $loanapp->NPSLC_CODE, $loanapp->NPSLT_CODE, $loanapp->NPREF_NO, $loanapp->NPACCT_CODE, 
        $loanapp->DEDUCGROUP, $loanapp->DOC_NO, $loanapp->PROPOSAL, $loanapp->CIREPORT, $loanapp->BASISRECOMM, $loanapp->REMARKS, $loanapp->REPAYMENT);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($brCode, $id)
    {
        LoanApp::deleteLoanApp($brCode, $id);
    }

    public function count(){
        $countLoanApps=LoanApp::countLoanApp();
        return $countLoanApps;
        
    }

    public function showLoansByStatus($status){
        $loanApps = LoanApp::getAllLoanAppByStatus($status);
        return LoanAppsDisplayResource::collection($loanApps);
    }
}
