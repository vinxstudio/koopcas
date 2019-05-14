<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PlayToSave extends Model
{

    /** SIX DIGIT QUERIES */
    public static function getSixDigitNumbers($term)
    {
        return DB::table('p2ssixdigitnum')
                    ->where('SDDateOfDraw', '=', $term)
                    ->orWhere('PTSSDNumDOC_NO', '=', $term)
                    ->get();
    }

    public static function getSixDigit($ptsSdId)
    {
        return DB::table('p2ssixdigitnum')
                    ->where('PTSSDID', '=', $ptsSdId)
                    ->get();
    }

    public static function insertSixDigit($ptsSdNumBrCode, $ptsSdNumDocNo, $sixDigitNumber, $sixDigitNumber2, $sixDigitWinPrize, $sdDateOfDraw, $sdTotalCollection, $sdDateTimeTrans)
    {
        return DB::table('p2ssixdigitnum')->insert(
            [
                'PTSSDNumBR_CODE' => $ptsSdNumBrCode,
                'PTSSDNumDOC_NO' => $ptsSdNumDocNo,
                'SixDigitNumber' => $sixDigitNumber,
                'SixDigitNumber2' => $sixDigitNumber2,
                'SixDigitWinPrize' => $sixDigitWinPrize,
                'SDDateOfDraw' => $sdDateOfDraw,
                'SDTotalCollection' => $sdTotalCollection,
                'SDDateTimeOfTrans' => $sdDateTimeTrans
            ]
        );
    }

    /** THREE DIGIT QUERIES */
    public static function getThreeDigitNumbers($term)
    {
        return DB::table('p2sthreedigitnum')
                    ->where('TDDateOfDraw', '=', $term)
                    ->orWhere('PTSTDNumDOC_NO', '=', $term)
                    ->get();
    }

    public static function getThreeDigit($ptsTdId)
    {
        return DB::table('p2sthreedigitnum')
                    ->where('PTSTDID', '=', $ptsTdId)
                    ->get();
    }

    public static function insertThreeDigit($ptsTdNumBrCode, $ptsTdNumDocNo, $threeDigitNum, $threeDigitWinPrizeSolo, $threeDigitWinPrizeRumble, $tdDateOfDraw, $tdTotalCollection, $tdDateTimeTrans)
    {
        return DB::table('p2sthreedigitnum')->insert(
            [
                'PTSTDNumBR_CODE' => $ptsTdNumBrCode,
                'PTSTDNumDOC_NO' => $ptsTdNumDocNo,
                'ThreeDigitNum' => $threeDigitNum,
                'ThreeDigitWinPrizeSolo' => $threeDigitWinPrizeSolo,
                'threeDigitWinPrizeRumble' => $threeDigitWinPrizeRumble,
                'TDDateOfDraw' => $tdDateOfDraw,
                'TDTotalCollection' => $tdTotalCollection,
                'TDDateTimeTrans' => $tdDateTimeTrans
            ]
        );
    }

    /** SIX DIGIT WINNER QUERIES */
    // public static function getSixDigitWinners($ptsSdId)
    // {
    //     return DB::table('p2ssixdigitwinners as pd')
    //                 ->join('p2ssixdigitnum as pn', function($join){
    //                     $join->on('pd.PTSSDID', '=', 'pn.PTSSDID');
    //                 })
    //                 ->where('pd.PTSSDID', '=', $ptsSdId)
    //                 ->get();
    // }

    // public static function insertSixDigitWinners($ptsSdWinBrCode, $ptsSdId, $clientAcctNum, $clientName, $winningNumber, $prizeWon, $dateOfWinning, $dateTimeOfTrans)
    // {
    //     return DB::table('p2ssixdigitwinners')->insert(
    //         [
    //             'PTSDWinBR_CODE' => $ptsSdWinBrCode,
    //             'PTSSDID' => $ptsSdId,
    //             'ClientAcctNum' => $clientAcctNum,
    //             'ClientName' => $clientName,
    //             'WinningNumber' => $winningNumber,
    //             'PrizeWon' => $prizeWon,
    //             'DateOfWinning' => $dateOfWinning,
    //             'DateTimeOfTrans' => $dateTimeOfTrans
    //         ]
    //     );
    // }

    // /** THREE DIGIT WINNER QUERIES */
    // public static function getThreeDigitWinners($ptsTdId)
    // {
    //     return DB::table('p2sthreedigitwinners as pd')
    //                 ->join('p2sthreedigitnum as pn', function($join){
    //                     $join->on('pd.PTSTDID', '=', 'pn.PTSTDID');
    //                 })
    //                 ->where('pd.PTSTDID', '=', $ptsTdId)
    //                 ->get();
    // }

    // public static function insertThreeDigitWinners($ptsTdWinBrCode, $ptsTdId, $clientAcctNum, $clientName, $winningNumber, $prizeWon, $dateOfWinning, $dateTimeOfTrans)
    // {
    //     return DB::table('p2sthreedigitwinners')->insert(
    //         [
    //             'PTSTDWinBR_CODE' => $ptsTdWinBrCode,
    //             'PTSTDID' => $ptsTdId,
    //             'ClientAcctNum' => $clientAcctNum,
    //             'ClientName' => $clientName,
    //             'WinningNumber' => $winningNumber,
    //             'PrizeWon' => $prizeWon,
    //             'DateOfWinning' => $dateOfWinning,
    //             'DateTimeOfTrans' => $dateTimeOfTrans,
    //         ]
    //     );
    // }

    /** SIX DIGIT ENTRY */
    public static function getSixDigitEntry($clientId)
    {
        return DB::table('p2ssixdigitentries as psd')
                    ->join('client as c', function($join){
                        $join->on('psd.PTSSDClientID', '=', 'c.ClientID');
                    })
                    ->where('psd.PTSSDClientID', '=', $clientId)
                    ->orderBy('psd.PTSSDDateTrans', 'desc')
                    ->get();
    }

    public static function getAllSixDigitEntries($sixdigit)
    {
        return DB::table('p2ssixdigitentries as psd')
                    ->join('client as c', function($join){
                        $join->on('psd.PTSSDClientID', '=', 'c.ClientID');
                    })
                    ->where('psd.PTSSixDigitNum2', '=', $sixdigit)
                    ->get();
    }

    public static function getAllSixDigitByDate($date)
    {
        return DB::table('p2ssixdigitentries as psd')
                    ->join('client as c', function($join){
                        $join->on('psd.PTSSDClientID', '=', 'c.ClientID');
                    })
                    ->select(DB::raw('psd.PTSStabsNumber, c.ClientID, psd.PTSSDTRDOC_NO, psd.PTSSDDateOfTrans, psd.PTSSixDigitNum, psd.PTSSDDateTime'))
                    ->where('psd.PTSSDDateOfTrans', '=', $date)
                    ->get();
    }

    public static function getSixDigitByTicket($serialId, $branch, $serialNum)
    {
        return DB::table('p2ssixdigitentries as psd')
                    ->join('client as c', function($join){
                        $join->on('psd.PTSSDClientID', '=', 'c.ClientID');
                    })
                    ->where('psd.PTSSerialID', '=', $serialId)
                    ->where('psd.PTSSDEBR_CODE', '=', $branch)
                    ->where('psd.PTSStabsNumber', '=', $serialNum)
                    ->get();
    }

    public static function insertSixDigitEntry($ptsSdTrId,$ptsSdeBrCode, $ptsSerialId, $ptsStabsNumber, $ptsSdClientId, $ptsSdTrDocNo, $ptsSdNumOfEntries, $ptsSsdDateOfTrans, $ptsSixDigitNum, $ptsSixDigitNum2, $ptsSdDateTrans, $ptsSdAdvance, $ptsSdDateTime)
    {
        return DB::table('p2ssixdigitentries')->insert(
            [
                'PTSSDTR_ID' => $ptsSdTrId,
                'PTSSDEBR_CODE' => $ptsSdeBrCode,
                'PTSSerialID' => $ptsSerialId,
                'PTSStabsNumber' => $ptsStabsNumber,
                'PTSSDClientID' => $ptsSdClientId,
                'PTSSDTRDOC_NO' => $ptsSdTrDocNo,
                'PTSSDNumOfEntries' => $ptsSdNumOfEntries,
                'PTSSDDateOfTrans' => $ptsSsdDateOfTrans,
                'PTSSixDigitNum' => $ptsSixDigitNum,
                'PTSSixDigitNum2' => $ptsSixDigitNum2,
                'PTSSDDateTrans' => $ptsSdDateTrans,
                'PTSSDAdvance' => $ptsSdAdvance,
                'PTSSDDateTime' => $ptsSdDateTime,
            ]
        );
    }

    /** THREE DIGIT ENTRY */
    public static function getThreeDigitEntry($clientId)
    {
        return DB::table('p2sthreedigitentries as ptd')
                    ->join('client as c', function($join){
                        $join->on('ptd.PTSTDClientID', '=', 'c.ClientID');
                    })
                    ->where('ptd.PTSTDClientID', '=', $clientId)
                    ->orderBy('ptd.PTSTDDateTrans', 'desc')
                    ->get();
    }

    public static function getAllThreeDigitEntries($threedigit)
    {
        return DB::table('p2sthreedigitentries as ptd')
                    ->join('client as c', function($join){
                        $join->on('ptd.PTSTDClientID', '=', 'c.ClientID');
                    })
                    ->where('ptd.PTSThreeDigitNum', '=', $threedigit)
                    ->get();
    }

    public static function getThreeDigitById($serialId, $branch, $serialNum)
    {
        return DB::table('p2sthreedigitentries as ptd')
                    ->join('client as c', function($join){
                        $join->on('ptd.PTSTDClientID', '=', 'c.ClientID');
                    })
                    ->where('ptd.PTSSerialID', '=', $serialId)
                    ->where('ptd.PTSTDEBR_CODE', '=', $branch)
                    ->where('ptd.PTSStabsNumber', '=', $serialNum)
                    ->get();
    }

    public static function getAllThreeDigitByDate($date)
    {
        return DB::table('p2sthreedigitentries as ptd')
                    ->join('client as c', function($join){
                        $join->on('ptd.PTSTDClientID', '=', 'c.ClientID');
                    })
                    ->select(DB::raw('ptd.PTSStabsNumber, c.ClientID, ptd.PTSTDTRDOC_NO, ptd.PTSTDDateOfTrans, ptd.PTSThreeDigitNum, ptd.PTSTDRumbleSolo, ptd.PTSTDDateTime'))
                    ->where('ptd.PTSTDDateOfTrans', '=', $date)
                    ->get();
    }

    public static function insertThreeDigitEntry($ptsTdTrId,$ptsTdeBrCode, $ptsSerialId, $ptsStabsNumber, $ptsTdClientId, $ptsTdTrDocNo, $ptsTdNumOfEntries, $ptsTdDateOfTrans, $ptsThreeDigitNum,
    $ptsTdRumbleSolo, $ptsTdDateTrans, $ptsTdAdvance, $ptsTdDatetime)
    {
        return DB::table('p2sthreedigitentries')->insert(
            [
                'PTSTDTR_ID' => $ptsTdTrId,
                'PTSTDEBR_CODE' => $ptsTdeBrCode,
                'PTSSerialID' => $ptsSerialId,
                'PTSStabsNumber' => $ptsStabsNumber,
                'PTSTDClientID' => $ptsTdClientId,
                'PTSTDTRDOC_NO' => $ptsTdTrDocNo,
                'PTSTDNumOfEntries' => $ptsTdNumOfEntries,
                'PTSTDDateOfTrans' => $ptsTdDateOfTrans,
                'PTSThreeDigitNum' => $ptsThreeDigitNum,
                'PTSTDRumbleSolo' => $ptsTdRumbleSolo,
                'PTSTDDateTrans' => $ptsTdDateTrans,
                'PTSTDAdvance' => $ptsTdAdvance,
                'PTSTDDateTime' => $ptsTdDatetime,
            ]
        );
    }

    /** LIST OF CLIENTS WHO PAY FOR PLAY TO SAVE */
    public static function getAllListOfClient() {
        return DB::table('transsum as tr')
                    ->join('client as c', function($join){
                        $join->on('tr.TR_CLIENTID', '=', 'c.ClientID');
                    })
                    ->get();
    }
}
