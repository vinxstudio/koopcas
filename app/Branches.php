<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Branches extends Model
{
    public static function getAllBranches()
    {
        return DB::table('branches')->get();
    }

    public static function getAllBranchesById($branchid)
    {
        return DB::table('branches')
                ->where('BranchesID', '=', $branchid)
                ->get();
    }

    public static function insertBranch($branchesId, $branchesDesc, $address, $manager, $poContactName, $contactNumbers, $tin, $posSerialNumber, $posMin, $emailAddress, $posPermitNumber,
    $isEnableRebates, $rebSlcCode, $rebSltCode, $rebExpAcct, $isConsolidateRebateEntries, $cdARegNum, $acronym, $pnLocation, $pnSsAt, $lottoNumDigt, $lottoDepositLimit)
    {
        return DB::table('branches')->insert(
            [
                'BranchesID' => $branchesId,
                'BranchesDesc' => $branchesDesc,
                'Address' => $address,
                'Manager' => $manager,
                'PO_ContactName' => $poContactName,
                'ContactNumbers' => $contactNumbers,
                'TIN' => $tin,
                'POS_SerialNumber' => $posSerialNumber,
                'POS_MIN' => $posMin,
                'EmailAddress' => $emailAddress,
                'POS_PermitNumber' => $posPermitNumber,
                'IsEnableRebates' => $isEnableRebates,
                'REB_SLT_CODE' => $rebSlcCode,
                'REB_SLT_CODE' => $rebSltCode,
                'REB_EXPACCT' => $rebExpAcct,
                'IsConsolidateRebateEntries' => $isConsolidateRebateEntries,
                'CDAREGNUM' => $cdARegNum,
                'ACRONYM' => $acronym,
                'PN_LOCATION' => $pnLocation,
                'PN_SS_AT' => $pnSsAt,
                'LottoNumDigit' => $lottoNumDigt,
                'LottoDepositLimit' => $lottoDepositLimit
            ]
        );
    }
}
