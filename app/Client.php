<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon;
class Client extends Model
{
    public static function getAllClients($term)
    {
        
        return DB::table('client as c')
                   ->join('clienttype as ct', function($join) {
                       $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                   })
                   ->join('acctstat as acs', function($join){
                       $join->on('c.AccountStatus', '=', 'acs.AcctStatID');
                   })
                   ->where('c.ClientID', '=', $term)
                   ->orWhere('c.FName', 'like', '%'.$term.'%')
                   ->orWhere('c.LName', 'like', '%'.$term.'%')
                //    ->where('c.AccountStatus', '=', $status)
                //    ->orWhere('c.AccountStatus', '=', $status)
                //    ->orWhere('c.AccountStatus', '=', $status)
                   ->paginate(10);
    }

    public static function getClientById($clientId)
    {
        return DB::table('client as c')
                   ->join('clienttype as ct', function($join) {
                        $join->on('c.ClientType', '=', 'ct.ClientTypeID');
                    })
                    ->join('acctstat as acs', function($join){
                        $join->on('c.AccountStatus', '=', 'acs.AcctStatID');
                    })
                   ->where('c.ClientID', '=', $clientId)
                   ->get();
    }

    public static function deleteClientById($clientId)
    {
        return DB::table('client')->where('ClientID', '=', $clientId)->delete();
    }

    public static function getClientLastId()
    {
        return DB::table('client')
                   ->select('ClientID')
                   ->orderBy('ClientID', 'desc')
                   ->limit(1)
                   ->get();
    }

    public static function getClientForBatchEdit($term,$clause)
    {
        return DB::table('client as c')
        ->join('clienttype as ct', function($join) {
            $join->on('c.ClientType', '=', 'ct.ClientTypeID');
        })
        ->join('acctstat as acs', function($join){
            $join->on('c.AccountStatus', '=', 'acs.AcctStatID');
        })
        ->where('c.ClientID', '=', $term)
        ->orWhere('c.FName', 'like', '%'.$term.'%')
        ->orWhere('c.LName', 'like', '%'.$term.'%')
        ->whereRaw($clause)
        ->get();
    }

    public static function insertClient($brCode, $clientId, $chkDgt, $lastName, $firstName, $middleName,
    $alertLevel, $referenceId, $oldPsbn, $suffix, $accountName, $collector, $dateOpened, $acctType, $clientType,
    $accountStatus, $jointType, $oldClientName, $dateOfBirth, $gender, $civilStatus, $education, $tin, $ctcno, $sss,
    $philHealth, $pagIbig, $atmBank, $atmNo, $schoolLastAttended, $profession, $sectoral, $occupational,
    $geographical, $remarks, $homeTelNo, $provinceTelNo, $cellphoneNo, $employerTelNo, $otherContactNo,
    $spouseCellNo, $emailAddress, $mailingAddress, $resAddStreet, $resAddBarangay, $resAddCity, $resAddProvince,
    $resAddZipCode, $resSince, $resType, $provAddStreet, $provAddBarangay, $provAddCity, $provAddProvince, $provAddZipCode,
    $provSince, $provType, $busAddStreet, $busAddBarangay, $busAddCity, $busAddProvince, $busAddZipCode, $spBusAddStreet,
    $spBusAddBarangay, $spBusAddCity, $spBusAddProvince, $spBusAddZipCode, $employerName, $nature, $since, $numberOfEmployees,
    $jobTitle, $jobStatus, $dateHired, $employmentLevel, $otherIncome, $busProfessionCode, $busProfessions, $busOccupationCode, $busOccupation,
    $spFName, $spMName, $spLName, $spSuffix, $spGender, $spDateOfBirth, $spOccupational, $businessName, $spJobTitle, $spJobStatus, $spSince, 
    $hired, $empLevel, $spNature, $spNumberOfEmployees, $spOtherIncome, $dateClosed, $reason, $dateTransferred, $closedDestBranch, 
    $originBranch, $updUser, $updDateTime, $driversLicense, $dateDeceased, $encdBy, $encdDateTime, $rating, $employmentId, 
    $sSpExcluded, $dosriTag, $dosriRelatedTo, $educationalAttainment, $degree, $occupation, $monthlyIncome, $height, $weight,
    $shareCapitalPledge, $shareDepositPledge, $isShowTotalPoints, $recruitedBy, $gsis, $nso, $votersId, $pmesBatchNum, $otherId,
    $pmesDate, $employerCode, $monthlySalary, $mealAllowance, $department, $smsBroadcastNo, $school, $section, $restriction, $religion, $cisaClientTitle,
    $cisaMothersFname, $cisaMothersLname, $cisaMothersMname, $cisaFathersFname, $cisaFathersLname, $cisaFathersNameExtnt, $cisaFathersMname,
    $cisaPsocCode, $cisaPsicCode, $cisaContactType, $cisaContactNum, $cisaBirthPlace, $isCisaUpdated, $resAddStrNo,  $provAddStrNo, $busAddStrNo, $sPouseStrNo, $subGroup)
    {
        return DB::table('client')->insert(
            [
                'ClientIDBrCode' => $brCode,
                'ClientID' => $clientId,
                'ClientIDChkDgt' => $chkDgt,
                'LName' => $lastName,
                'FName' => $firstName,
                'MName' => $middleName,
                'AlertLevel' => $alertLevel,
                'OldClientID' => $referenceId,
                'OldPSBN' => $oldPsbn,
                'SName' => $suffix,
                'AccountName' => $accountName,
                'Collector' => $collector,
                'DateOpened' => $dateOpened,
                'AccountType' => $acctType,
                'ClientType' => $clientType,
                'AccountStatus' => $accountStatus,
                'JointType' => $jointType,
                'OldClientName' => $oldClientName,
                'DateOfBirth' => $dateOfBirth,
                'Gender' => $gender,
                'CivilStatus' => $civilStatus,
                'EducAttained' => $education,
                'TINNum' => $tin,
                'CTCNumber' => $ctcno,
                'SSSGSISNum' => $sss,
                'PhilHealthNum' => $philHealth,
                'PagibigNum' => $pagIbig,
                'ATMBank' => $atmBank,
                'ATMNum' => $atmNo,
                'SchoolLastAttended' => $schoolLastAttended,
                'Profession' => $profession,
                'Sectoral' => $sectoral,
                'Occupational' => $occupational,
                'Geographical' => $geographical,
                'Remarks' => $remarks,
                'ResTelNum' => $homeTelNo,
                'ProvTelNum' => $provinceTelNo,
                'CellNum' => $cellphoneNo,
                'EmpBusTelNum' => $employerTelNo,
                'OtherContactNum' => $otherContactNo,
                'SpCellNum' => $spouseCellNo,
                'EmailAddress' => $emailAddress,
                'MailingAddress' => $mailingAddress,
                'ResAddStreet' => $resAddStreet,
                'ResAddBarangay' => $resAddBarangay,
                'ResAddCity' => $resAddCity,
                'ResAddProvince' => $resAddProvince,
                'ResAddZipCode' => $resAddZipCode,
                'ResSince' => $resSince,
                'ResType' => $resType,
                'ProvAddStreet' => $provAddStreet,
                'ProvAddBarangay' => $provAddBarangay,
                'ProvAddCity' => $provAddCity,
                'ProvAddProvince' => $provAddProvince,
                'ProvAddZipCode' => $provAddZipCode,
                'ProvSince' => $provSince,
                'ProvType' => $provType,
                'BusAddStreet' => $busAddStreet,
                'BusAddBarangay' => $busAddBarangay,
                'BusAddCity' => $busAddCity,
                'BusAddProvince' => $busAddProvince,
                'BusAddZipCode' => $busAddZipCode,
                'SpBusAddStreet' => $busAddStreet,
                'SpBusAddBarangay' => $spBusAddBarangay,
                'SpBusAddCity' => $spBusAddCity,
                'SpBusAddProvince' => $spBusAddProvince,
                'SpBusAddZipCode' => $spBusAddZipCode,
                'BusName' => $employerName,
                'BusNature' => $nature,
                'BusSince' => $since,
                'BusNumEmployees' => $numberOfEmployees,
                'BusJobTitle' => $jobTitle,
                'BusStatus' => $jobStatus,
                'BusDateHired' => $dateHired,
                'BusLevel' => $employmentLevel,
                'BusOtherSourceOfIncome' => $otherIncome,
                'BusProfessionCode' => $busProfessionCode,
                'BusProfession' => $busProfessions,
                'BusOccupationCode' => $busOccupationCode,
                'BusOccupation' => $busOccupation,
                'SpFName' => $spFName,
                'SpMName' => $spLName,
                'SpLName' => $spMName,
                'SpSName' => $spSuffix,
                'SpGender' => $spGender,
                'SpDateofBirth' => $spDateOfBirth,
                'SpOccupational' => $spOccupational,
                'SpBusName' => $businessName,
                'SpBusJobTitle' => $spJobTitle,
                'SpBusStatus' => $spJobStatus,
                'SpBusSince' => $spSince,
                'SpBusDateHired' => $hired,
                'SpBusLevel' => $empLevel,
                'SpBusNature' => $spNature,
                'SpBusNumEmployees' => $spNumberOfEmployees,
                'SpOtherSourceOfIncome' => $spOtherIncome,
                'ClosedDate' => $dateClosed,
                'ClosedReason' => $reason,
                'DateTransferred' => $dateTransferred,
                'ClosedDestBranch' => $closedDestBranch,
                'OriginBranch' => $originBranch,
                'UpdUser' => $updUser,
                'UpdDateTime' => $updDateTime,
                'DriverLicenseNum' => $driversLicense,
                'DateDeceased' => $dateDeceased,
                'EncdBy' => $encdBy,
                'EncdDateTime' => $encdDateTime,
                'Rating' => $rating,
                'BusEmpID' => $employmentId,
                'SSPExcluded' => $sSpExcluded,
                'DOSRITag' => $dosriTag,
                'DOSRIRelatedTo' => $dosriRelatedTo,
                'SpEducAttained' => $educationalAttainment,
                'SpDegreeCourse' => $degree,
                'SpOccupation' => $occupation,
                'SpMonthlyIncome' => $monthlyIncome,
                'Height' => $height,
                'Weight' => $weight,
                'SCPledge' => $shareCapitalPledge,
                'SDPledge' => $shareDepositPledge,
                'IsShowTotalPoints' => $isShowTotalPoints,
                'RecruiterID' => $recruitedBy,
                'GSISNum' => $gsis,
                'NSONum' => $nso,
                'VotersID' => $votersId,
                'PMESBatchNum' => $pmesBatchNum,
                'OtherIDNum' => $otherId,
                'PMESDate' => $pmesDate,
                'EmpCode' => $employerCode,
                'BusinessIncome' => $monthlySalary,
                'MealAllowance' => $mealAllowance,
                'ClientDEPT' => $department,
                'SMSNumber' => $smsBroadcastNo,
                'SchoolID' => $school,
                'SectionID' => $section,
                'RestrikID' => $restriction,
                'Religion' => $religion,
                'CISAclientTitle' => $cisaClientTitle,
                'CISAmothersFname' => $cisaMothersFname,
                'CISAmothersLname' => $cisaMothersLname,
                'CISAmothersMname' => $cisaMothersMname,
                'CISAfathersFname' => $cisaFathersFname,
                'CISAfathersLname' => $cisaFathersLname,
                'CISAfathersNameExtnt' => $cisaFathersNameExtnt,
                'CISAfathersMname' => $cisaFathersMname,
                'CISAPSOC_CODE' => $cisaPsocCode,
                'CISAPSIC_CODE' => $cisaPsicCode,
                'CISA_ContactType' => $cisaContactType,
                'CISA_ContactNum' => $cisaContactNum,
                'CISA_BirthPlace' => $cisaBirthPlace,
                'isCISAUpdated' => $isCisaUpdated,
                'ResAddStrNo' => $resAddStrNo,
                'ProvAddStrNo' => $provAddStrNo,
                'BusAddStrNo' => $busAddStrNo,
                'SpouseStrNo' => $sPouseStrNo,
                'Geo_SubgroupID' => $subGroup,
            ]
        );
    }

    public static function updateClient($clientId, $chkDgt, $lastName, $firstName, $middleName,
    $alertLevel, $referenceId, $oldPsbn, $suffix, $accountName, $collector, $dateOpened, $acctType, $clientType,
    $accountStatus, $jointType, $oldClientName, $dateOfBirth, $gender, $civilStatus, $education, $tin, $ctcno, $sss,
    $philHealth, $pagIbig, $atmBank, $atmNo, $schoolLastAttended, $profession, $sectoral, $occupational,
    $geographical, $remarks, $homeTelNo, $provinceTelNo, $cellphoneNo, $employerTelNo, $otherContactNo,
    $spouseCellNo, $emailAddress, $mailingAddress, $resAddStreet, $resAddBarangay, $resAddCity, $resAddProvince,
    $resAddZipCode, $resSince, $resType, $provAddStreet, $provAddBarangay, $provAddCity, $provAddProvince, $provAddZipCode,
    $provSince, $provType, $busAddStreet, $busAddBarangay, $busAddCity, $busAddProvince, $busAddZipCode, $spBusAddStreet,
    $spBusAddBarangay, $spBusAddCity, $spBusAddProvince, $spBusAddZipCode, $employerName, $nature, $since, $numberOfEmployees,
    $jobTitle, $jobStatus, $dateHired, $employmentLevel, $otherIncome, $busProfessionCode, $busProfessions, $busOccupationCode, $busOccupation,
    $spFName, $spMName, $spLName, $spSuffix, $spGender, $spDateOfBirth, $spOccupational, $businessName, $spJobTitle, $spJobStatus, $spSince, 
    $hired, $empLevel, $spNature, $spNumberOfEmployees, $spOtherIncome, $dateClosed, $reason, $dateTransferred, $closedDestBranch, 
    $originBranch, $updUser, $updDateTime, $driversLicense, $dateDeceased, $encdBy, $encdDateTime, $rating, $employmentId, 
    $sSpExcluded, $dosriTag, $dosriRelatedTo, $educationalAttainment, $degree, $occupation, $monthlyIncome, $height, $weight,
    $shareCapitalPledge, $shareDepositPledge, $isShowTotalPoints, $recruitedBy, $gsis, $nso, $votersId, $pmesBatchNum, $otherId,
    $pmesDate, $employerCode, $monthlySalary, $mealAllowance, $department, $smsBroadcastNo, $school, $section, $restriction, $religion, $cisaClientTitle,
    $cisaMothersFname, $cisaMothersLname, $cisaMothersMname, $cisaFathersFname, $cisaFathersLname, $cisaFathersNameExtnt, $cisaFathersMname,
    $cisaPsocCode, $cisaPsicCode, $cisaContactType, $cisaContactNum, $cisaBirthPlace, $isCisaUpdated, $resAddStrNo,  $provAddStrNo, $busAddStrNo, $sPouseStrNo, $subGroup)
    {
        return DB::table('client')
                   ->where('ClientID', $clientId)
                   ->update(
                       [
                        'ClientIDChkDgt' => $chkDgt,
                        'LName' => $lastName,
                        'FName' => $firstName,
                        'MName' => $middleName,
                        'AlertLevel' => $alertLevel,
                        'OldClientID' => $referenceId,
                        'OldPSBN' => $oldPsbn,
                        'SName' => $suffix,
                        'AccountName' => $accountName,
                        'Collector' => $collector,
                        'DateOpened' => $dateOpened,
                        'AccountType' => $acctType,
                        'ClientType' => $clientType,
                        'AccountStatus' => $accountStatus,
                        'JointType' => $jointType,
                        'OldClientName' => $oldClientName,
                        'DateOfBirth' => $dateOfBirth,
                        'Gender' => $gender,
                        'CivilStatus' => $civilStatus,
                        'EducAttained' => $education,
                        'TINNum' => $tin,
                        'CTCNumber' => $ctcno,
                        'SSSGSISNum' => $sss,
                        'PhilHealthNum' => $philHealth,
                        'PagibigNum' => $pagIbig,
                        'ATMBank' => $atmBank,
                        'ATMNum' => $atmNo,
                        'SchoolLastAttended' => $schoolLastAttended,
                        'Profession' => $profession,
                        'Sectoral' => $sectoral,
                        'Occupational' => $occupational,
                        'Geographical' => $geographical,
                        'Remarks' => $remarks,
                        'ResTelNum' => $homeTelNo,
                        'ProvTelNum' => $provinceTelNo,
                        'CellNum' => $cellphoneNo,
                        'EmpBusTelNum' => $employerTelNo,
                        'OtherContactNum' => $otherContactNo,
                        'SpCellNum' => $spouseCellNo,
                        'EmailAddress' => $emailAddress,
                        'MailingAddress' => $mailingAddress,
                        'ResAddStreet' => $resAddStreet,
                        'ResAddBarangay' => $resAddBarangay,
                        'ResAddCity' => $resAddCity,
                        'ResAddProvince' => $resAddProvince,
                        'ResAddZipCode' => $resAddZipCode,
                        'ResSince' => $resSince,
                        'ResType' => $resType,
                        'ProvAddStreet' => $provAddStreet,
                        'ProvAddBarangay' => $provAddBarangay,
                        'ProvAddCity' => $provAddCity,
                        'ProvAddProvince' => $provAddProvince,
                        'ProvAddZipCode' => $provAddZipCode,
                        'ProvSince' => $provSince,
                        'ProvType' => $provType,
                        'BusAddStreet' => $busAddStreet,
                        'BusAddBarangay' => $busAddBarangay,
                        'BusAddCity' => $busAddCity,
                        'BusAddProvince' => $busAddProvince,
                        'BusAddZipCode' => $busAddZipCode,
                        'SpBusAddStreet' => $busAddStreet,
                        'SpBusAddBarangay' => $spBusAddBarangay,
                        'SpBusAddCity' => $spBusAddCity,
                        'SpBusAddProvince' => $spBusAddProvince,
                        'SpBusAddZipCode' => $spBusAddZipCode,
                        'BusName' => $employerName,
                        'BusNature' => $nature,
                        'BusSince' => $since,
                        'BusNumEmployees' => $numberOfEmployees,
                        'BusJobTitle' => $jobTitle,
                        'BusStatus' => $jobStatus,
                        'BusDateHired' => $dateHired,
                        'BusLevel' => $employmentLevel,
                        'BusOtherSourceOfIncome' => $otherIncome,
                        'BusProfessionCode' => $busProfessionCode,
                        'BusProfession' => $busProfessions,
                        'BusOccupationCode' => $busOccupationCode,
                        'BusOccupation' => $busOccupation,
                        'SpFName' => $spFName,
                        'SpMName' => $spLName,
                        'SpLName' => $spMName,
                        'SpSName' => $spSuffix,
                        'SpGender' => $spGender,
                        'SpDateofBirth' => $spDateOfBirth,
                        'SpOccupational' => $spOccupational,
                        'SpBusName' => $businessName,
                        'SpBusJobTitle' => $spJobTitle,
                        'SpBusStatus' => $spJobStatus,
                        'SpBusSince' => $spSince,
                        'SpBusDateHired' => $hired,
                        'SpBusLevel' => $empLevel,
                        'SpBusNature' => $spNature,
                        'SpBusNumEmployees' => $spNumberOfEmployees,
                        'SpOtherSourceOfIncome' => $spOtherIncome,
                        'ClosedDate' => $dateClosed,
                        'ClosedReason' => $reason,
                        'DateTransferred' => $dateTransferred,
                        'ClosedDestBranch' => $closedDestBranch,
                        'OriginBranch' => $originBranch,
                        'UpdUser' => $updUser,
                        'UpdDateTime' => $updDateTime,
                        'DriverLicenseNum' => $driversLicense,
                        'DateDeceased' => $dateDeceased,
                        'EncdBy' => $encdBy,
                        'EncdDateTime' => $encdDateTime,
                        'Rating' => $rating,
                        'BusEmpID' => $employmentId,
                        'SSPExcluded' => $sSpExcluded,
                        'DOSRITag' => $dosriTag,
                        'DOSRIRelatedTo' => $dosriRelatedTo,
                        'SpEducAttained' => $educationalAttainment,
                        'SpDegreeCourse' => $degree,
                        'SpOccupation' => $occupation,
                        'SpMonthlyIncome' => $monthlyIncome,
                        'Height' => $height,
                        'Weight' => $weight,
                        'SCPledge' => $shareCapitalPledge,
                        'SDPledge' => $shareDepositPledge,
                        'IsShowTotalPoints' => $isShowTotalPoints,
                        'RecruiterID' => $recruitedBy,
                        'GSISNum' => $gsis,
                        'NSONum' => $nso,
                        'VotersID' => $votersId,
                        'PMESBatchNum' => $pmesBatchNum,
                        'OtherIDNum' => $otherId,
                        'PMESDate' => $pmesDate,
                        'EmpCode' => $employerCode,
                        'BusinessIncome' => $monthlySalary,
                        'MealAllowance' => $mealAllowance,
                        'ClientDEPT' => $department,
                        'SMSNumber' => $smsBroadcastNo,
                        'SchoolID' => $school,
                        'SectionID' => $section,
                        'RestrikID' => $restriction,
                        'Religion' => $religion,
                        'CISAclientTitle' => $cisaClientTitle,
                        'CISAmothersFname' => $cisaMothersFname,
                        'CISAmothersLname' => $cisaMothersLname,
                        'CISAmothersMname' => $cisaMothersMname,
                        'CISAfathersFname' => $cisaFathersFname,
                        'CISAfathersLname' => $cisaFathersLname,
                        'CISAfathersNameExtnt' => $cisaFathersNameExtnt,
                        'CISAfathersMname' => $cisaFathersMname,
                        'CISAPSOC_CODE' => $cisaPsocCode,
                        'CISAPSIC_CODE' => $cisaPsicCode,
                        'CISA_ContactType' => $cisaContactType,
                        'CISA_ContactNum' => $cisaContactNum,
                        'CISA_BirthPlace' => $cisaBirthPlace,
                        'isCISAUpdated' => $isCisaUpdated,
                        'ResAddStrNo' => $resAddStrNo,
                        'ProvAddStrNo' => $provAddStrNo,
                        'BusAddStrNo' => $busAddStrNo,
                        'SpouseStrNo' => $sPouseStrNo,
                        'Geo_SubgroupID' => $subGroup,
                       ]
                    );
    }
}
