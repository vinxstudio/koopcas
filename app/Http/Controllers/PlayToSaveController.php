<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlayToSave;
use App\Http\Resources\PlayToSaveSixDigitResource;
use App\Http\Resources\PlayToSaveThreeDigitResource;
use App\Http\Resources\PlayToSaveSixDigitNumWinResource;
use App\Http\Resources\PlayToSaveThreeDigitNumWinResource;
use App\Http\Resources\PlayToSaveSixDigitEntries;
use App\Http\Resources\PlayToSaveThreeDigitEntries;

class PlayToSaveController extends Controller
{

    /** SIX DIGIT METHODS */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($term)
    {
        $playsix = PlayToSave::getSixDigitNumbers($term);
        return PlayToSaveSixDigitResource::collection($playsix);
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($ptsDnId)
    {
        $playsix = PlayToSave::getSixDigit($ptsDnId);
        return PlayToSaveSixDigitResource::collection($playsix);
    }

    /**
     * Display all resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll($sixdigit)
    {
        $sixdigitentry = PlayToSave::getAllSixDigitEntries($sixdigit);
        return PlayToSaveSixDigitEntries::collection($sixdigitentry);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sixdigit = new PlayToSave;

        $sixdigit->PTSSDNumBR_CODE = 18;
        $sixdigit->PTSSDNumDOC_NO = $request->input('ptsSdNumDocNo');
        $sixdigit->SixDigitNumber = $request->input('sixDigitNumber');
        $sixdigit->SixDigitNumber2 = $request->input('sixDigitNumber2');
        $sixdigit->SixDigitWinPrize = $request->input('sixDigitWinPrize');
        $sixdigit->SDDateOfDraw = $request->input('sdDateOfDraw');
        $sixdigit->SDTotalCollection = $request->input('sdTotalCollection');
        $sixdigit->SDDateTimeOfTrans = $request->input('sdDateTimeTrans');

        PlayToSave::insertSixDigit($sixdigit->PTSSDNumBR_CODE, $sixdigit->PTSSDNumDOC_NO, $sixdigit->SixDigitNumber, $sixdigit->SixDigitNumber2, $sixdigit->SixDigitWinPrize, $sixdigit->SDDateOfDraw,
        $sixdigit->SDTotalCollection, $sixdigit->SDDateTimeOfTrans);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /** THREE DIGIT METHODS */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexThree($term)
    {
        $playthree = PlayToSave::getThreeDigitNumbers($term);
        return PlayToSaveThreeDigitResource::collection($playthree);
    }

    /**
     * Display all resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAllThree($threedigit)
    {
        $threedigitentry = PlayToSave::getAllThreeDigitEntries($threedigit);
        return PlayToSaveThreeDigitEntries::collection($threedigitentry);
    }

    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showThree($ptsDnId)
    {
        $playthree = PlayToSave::getThreeDigit($ptsDnId);
        return PlayToSaveThreeDigitResource::collection($playthree);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeThree(Request $request)
    {
        $threedigit = new PlayToSave;

        $threedigit->PTSTDNumBR_CODE = 18;
        
        $threedigit->PTSTDNumDOC_NO = $request->input('ptsTdNumDocNo');
        $threedigit->ThreeDigitNum = $request->input('threeDigitNum');
        $threedigit->ThreeDigitWinPrizeSolo = $request->input('threeDigitWinPrizeSolo');
        $threedigit->threeDigitWinPrizeRumble = $request->input('threeDigitWinPrizeRumble');
        $threedigit->TDDateOfDraw = $request->input('tdDateOfDraw');
        $threedigit->TDTotalCollection = $request->input('tdTotalCollection');
        $threedigit->TDDateTimeTrans = $request->input('tdDateTimeTrans');

        PlayToSave::insertThreeDigit($threedigit->PTSTDNumBR_CODE, $threedigit->PTSTDNumDOC_NO, $threedigit->ThreeDigitNum, $threedigit->ThreeDigitWinPrizeSolo,
        $threedigit->threeDigitWinPrizeRumble, $threedigit->TDDateOfDraw, $threedigit->TDTotalCollection, $threedigit->TDDateTimeTrans);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateThree(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyThree($id)
    {
        //
    }

    /** SIX DIGIT WINNER METHODS */
    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sixDigitWinners($ptsDnId)
    {
        $sixdigiwinners = PlayToSave::getSixDigitWinners($ptsDnId);
        return PlayToSaveSixDigitNumWinResource::collection($sixdigiwinners);
    }

    public function storeSixDigitWinners(Request $request)
    {
        $sixdigitwinners = new PlayToSave;

        $sixdigitwinners->PTSDWinBR_CODE = 18;
        $sixdigitwinners->PTSSDID = $request->input('ptsSdId');
        $sixdigitwinners->ClientAcctNum = $request->input('clientAcctNum');
        $sixdigitwinners->ClientName = $request->input('clientName');
        $sixdigitwinners->WinningNumber = $request->input('winningNumber');
        $sixdigitwinners->PrizeWon = $request->input('prizeWon');
        $sixdigitwinners->DateOfWinning = $request->input('dateOfWinning');
        $sixdigitwinners->DateTimeOfTrans = $request->input('dateTimeOfTrans');

        PlayToSave::insertSixDigitWinners($sixdigitwinners->PTSDWinBR_CODE, $sixdigitwinners->PTSSDID, $sixdigitwinners->ClientAcctNum, $sixdigitwinners->ClientName, $sixdigitwinners->WinningNumber,
        $sixdigitwinners->PrizeWon, $sixdigitwinners->DateOfWinning, $sixdigitwinners->DateTimeOfTrans);
    }

    /** THREE DIGIT WINNER METHODS */
    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function threeDigitWinners($threedigit)
    {
        $threedigitwinners = PlayToSave::getThreeDigitWinners($threedigit);
        return PlayToSaveThreeDigitNumWinResource::collection($threedigitwinners);
    }

    public function storeThreeDigitWinners(Request $request)
    {
        $threedigitwinners = new PlayToSave;

        $threedigitwinners->PTSTDWinBR_CODE = 18;
        $threedigitwinners->PTSTDID = $request->input('ptsTdId');
        $threedigitwinners->ClientAcctNum = $request->input('clientAcctNum');
        $threedigitwinners->ClientName = $request->input('clientName');
        $threedigitwinners->WinningNumber = $request->input('winningNumber');
        $threedigitwinners->PrizeWon = $request->input('prizeWon');
        $threedigitwinners->DateOfWinning = $request->input('dateOfWinning');
        $threedigitwinners->DateTimeOfTrans = $request->input('dateTimeOfTrans');

        PlayToSave::insertThreeDigitWinners($threedigitwinners->PTSTDWinBR_CODE, $threedigitwinners->PTSTDID, $threedigitwinners->ClientAcctNum, $threedigitwinners->ClientName, $threedigitwinners->WinningNumber,
        $threedigitwinners->PrizeWon, $threedigitwinners->DateOfWinning, $threedigitwinners->DateTimeOfTrans);
    }

    /** SIX DIGIT ENTRY METHODS */
    /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSixDigitEntryById($clientId)
    {
        $sixdigitentry = PlayToSave::getSixDigitEntry($clientId);
        return PlayToSaveSixDigitEntries::collection($sixdigitentry);
    }

    public function getSixDigitById($serialId, $branch, $serialNum)
    {
        $sixdigitnum = PlayToSave::getSixDigitByTicket($serialId, $branch, $serialNum);
        return PlayToSaveSixDigitEntries::collection($sixdigitnum);
    }

    public function insertSixDigitEntry(Request $request)
    {
        $sixdigitentry = new PlayToSave;

        $sixdigitentry->PTSSDTR_ID = $request->input('ptsTrId');
        $sixdigitentry->PTSSDEBR_CODE = $request->input('ptsSdeBrCode');
        $sixdigitentry->PTSSerialID = $request->input('ptsSerialId');
        $sixdigitentry->PTSStabsNumber = $request->input('ptsStabsNumber');
        $sixdigitentry->PTSSDClientID = $request->input('ptsSdClientId');
        $sixdigitentry->PTSSDTRDOC_NO = $request->input('ptsSdTrDocNo');
        $sixdigitentry->PTSSDNumOfEntries = $request->input('ptsSdNumOfEntries');
        $sixdigitentry->PTSSDDateOfTrans = $request->input('ptsSsdDateOfTrans');
        $sixdigitentry->PTSSixDigitNum = $request->input('ptsSixDigitNum');
        $sixdigitentry->PTSSixDigitNum2 = $request->input('ptsSixDigitNum2');
        $sixdigitentry->PTSSDDateTrans = $request->input('ptsSdDateTrans');
        $sixdigitentry->PTSSDAdvance = $request->input('ptsSdAdvance');
        $sixdigitentry->PTSSDDateTime = $request->input('ptsSdDateTime');

        PlayToSave::insertSixDigitEntry($sixdigitentry->PTSSDTR_ID,$sixdigitentry->PTSSDEBR_CODE, $sixdigitentry->PTSSerialID, $sixdigitentry->PTSStabsNumber, $sixdigitentry->PTSSDClientID, $sixdigitentry->PTSSDTRDOC_NO, $sixdigitentry->PTSSDNumOfEntries,
        $sixdigitentry->PTSSDDateOfTrans, $sixdigitentry->PTSSixDigitNum, $sixdigitentry->PTSSixDigitNum2, $sixdigitentry->PTSSDDateTrans, $sixdigitentry->PTSSDAdvance, $sixdigitentry->PTSSDDateTime);
    }

    /** THREE DIGIT ENTRY METHODS */
     /**
     * Display the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getThreeDigitEntryById($clientId)
    {
        $threedigitentry = PlayToSave::getThreeDigitEntry($clientId);
        return PlayToSaveThreeDigitEntries::collection($threedigitentry);
    }

    public function getThreeDigitById($serialId, $branch, $serialNum)
    {
        $threedigitnum = PlayToSave::getThreeDigitById($serialId, $branch, $serialNum);
        return PlayToSaveThreeDigitEntries::collection($threedigitnum);
    }

    public function insertThreedigitEntry(Request $request)
    {
        $threedigitentry = new PlayToSave;

        $threedigitentry->PTSTDTR_ID = $request->input('ptsTrId');
        $threedigitentry->PTSTDEBR_CODE = $request->input('ptsTdeBrCode');
        $threedigitentry->PTSSerialID = $request->input('ptsSerialId');
        $threedigitentry->PTSStabsNumber = $request->input('ptsStabsNumber');
        $threedigitentry->PTSTDClientID = $request->input('ptsTdClientId');
        $threedigitentry->PTSTDTRDOC_NO = $request->input('ptsTdTrDocNo');
        $threedigitentry->PTSTDNumOfEntries = $request->input('ptsTdNumOfEntries');
        $threedigitentry->PTSTDDateOfTrans = $request->input('ptsTdDateOfTrans');
        $threedigitentry->PTSThreeDigitNum = $request->input('ptsThreeDigitNum');
        $threedigitentry->PTSTDRumbleSolo = $request->input('ptsTdRumbleSolo');
        $threedigitentry->PTSTDDateTrans = $request->input('ptsTdDateTrans');
        $threedigitentry->PTSTDAdvance = $request->input('ptsTdAdvance');
        $threedigitentry->PTSTDDateTime = $request->input('ptsTdDatetime');

        PlayToSave::insertThreeDigitEntry($threedigitentry->PTSTDTR_ID, $threedigitentry->PTSTDEBR_CODE, $threedigitentry->PTSSerialID, $threedigitentry->PTSStabsNumber, $threedigitentry->PTSTDClientID, $threedigitentry->PTSTDTRDOC_NO, $threedigitentry->PTSTDNumOfEntries,
        $threedigitentry->PTSTDDateOfTrans, $threedigitentry->PTSThreeDigitNum, $threedigitentry->PTSTDRumbleSolo, $threedigitentry->PTSTDDateTrans, $threedigitentry->PTSTDAdvance, $threedigitentry->PTSTDDateTime);
    }
}
