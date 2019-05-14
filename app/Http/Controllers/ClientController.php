<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Resources\ClientResource;
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($term)
    {
        // Get Clients
        $clients = Client::getAllClients($term);
        return ClientResource::collection($clients);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;

        $id = Client::getClientLastId();
        foreach($id as $row){
            $clientid = $row->ClientID + 1;
        }

        $client->ClientID = $request->input('clientId');
        $client->ClientIDBrCode = $request->input('brCode');
        $client->ClientID = $clientid;
        $client->ClientIDChkDgt = 2;
        $client->LName = $request->input('lastName');
        $client->FName = $request->input('firstName');
        $client->MName = $request->input('middleName');
        $client->AlertLevel = $request->input('alertLevel');
        $client->OldClientID = $request->input('referenceId');
        $client->OldPSBN = $request->input('oldPsbn');
        $client->SName = $request->input('suffix');
        $client->AccountName = $request->input('accountName');
        $client->Collector = $request->input('collector');
        $client->DateOpened = $request->input('dateOpened');
        $client->AccountType = $request->input('acctType');
        $client->ClientType = $request->input('clientType');
        $client->AccountStatus = $request->input('accountStatus');
        $client->JointType = $request->input('jointType');
        $client->OldClientName = $request->input('oldClientName');
        $client->DateOfBirth = $request->input('dateOfBirth');
        $client->Gender = $request->input('gender');
        $client->CivilStatus = $request->input('civilStatus');
        $client->EducAttained = $request->input('education');
        $client->TINNum = $request->input('tin');
        $client->CTCNumber = $request->input('ctcno');
        $client->SSSGSISNum = $request->input('sss');
        $client->PhilHealthNum = $request->input('philHealth');
        $client->PagibigNum = $request->input('pagIbig');
        $client->ATMBank = $request->input('atmBank');
        $client->ATMNum = $request->input('atmNo');
        $client->SchoolLastAttended = $request->input('schoolLastAttended');
        $client->Profession = $request->input('profession');
        $client->Sectoral = $request->input('sectoral');
        $client->Occupational = $request->input('occupational');
        $client->Geographical = $request->input('geographical');
        $client->Remarks = $request->input('remarks');
        $client->ResTelNum = $request->input('homeTelNo');
        $client->ProvTelNum = $request->input('provinceTelNo');
        $client->CellNum = $request->input('cellphoneNo');
        $client->EmpBusTelNum = $request->input('employerTelNo');
        $client->OtherContactNum = $request->input('otherContactNo');
        $client->SpCellNum = $request->input('spouseCellNo');
        $client->EmailAddress = $request->input('emailAddress');
        $client->MailingAddress = $request->input('mailingAddress');
        $client->ResAddStreetv = $request->input('resAddStreet');
        $client->ResAddBaranga = $request->input('resAddBarangay');
        $client->ResAddCity = $request->input('resAddCity');
        $client->ResAddProvince = $request->input('resAddProvince');
        $client->ResAddZipCode = $request->input('resAddZipCode');
        $client->ResSince = $request->input('resSince');
        $client->ResType = $request->input('resType');
        $client->ProvAddStreet = $request->input('provAddStreet');
        $client->ProvAddBarangay = $request->input('provAddBarangay');
        $client->ProvAddCity = $request->input('provAddCity');
        $client->ProvAddProvince = $request->input('provAddProvince');
        $client->ProvAddZipCode = $request->input('provAddZipCode');
        $client->ProvSince = $request->input('provSince');
        $client->ProvType = $request->input('provType');
        $client->BusAddStreet = $request->input('busAddStreet');
        $client->BusAddBarangay = $request->input('busAddBarangay');
        $client->BusAddCity = $request->input('busAddCity');
        $client->BusAddProvince = $request->input('busAddProvince');
        $client->BusAddZipCode = $request->input('busAddZipCode');
        $client->SpBusAddStreet = $request->input('spBusAddStreet');
        $client->SpBusAddBarangay = $request->input('spBusAddBarangay');
        $client->SpBusAddCity = $request->input('spBusAddCity');
        $client->SpBusAddProvince = $request->input('spBusAddProvince');
        $client->SpBusAddZipCode = $request->input('spBusAddZipCode');
        $client->BusName = $request->input('employerName');
        $client->BusNature = $request->input('nature');
        $client->BusSince = $request->input('since');
        $client->BusNumEmployees = $request->input('numberOfEmployees');
        $client->BusJobTitle = $request->input('jobTitle');
        $client->BusStatus = $request->input('jobStatus');
        $client->BusDateHired = $request->input('dateHired');
        $client->BusLevel = $request->input('employmentLevel');
        $client->BusOtherSourceOfIncome = $request->input('otherIncome');
        $client->BusProfessionCode = $request->input('busProfessionCode');
        $client->BusProfession = $request->input('busProfessions');
        $client->BusOccupationCode = $request->input('busOccupationCode');
        $client->BusOccupation = $request->input('busOccupation');
        $client->SpFName = $request->input('spFName');
        $client->SpMName = $request->input('spMName');
        $client->SpLName = $request->input('spLName');
        $client->SpSName = $request->input('spSuffix');
        $client->SpGender = $request->input('spGender');
        $client->SpDateofBirth = $request->input('spDateOfBirth');
        $client->SpOccupational = $request->input('spOccupational');
        $client->SpBusName = $request->input('businessName');
        $client->SpBusJobTitle = $request->input('spJobTitle');
        $client->SpBusStatus = $request->input('spJobStatus');
        $client->SpBusSince = $request->input('spSince');
        $client->SpBusDateHired = $request->input('hired');
        $client->SpBusLevel = $request->input('empLevel');
        $client->SpBusNature = $request->input('spNature');
        $client->SpBusNumEmployees = $request->input('spNumberOfEmployees');
        $client->SpOtherSourceOfIncome = $request->input('spOtherIncome');
        $client->ClosedDate = $request->input('dateClosed');
        $client->ClosedReason = $request->input('reason');
        $client->DateTransferred = $request->input('dateTransferred');
        $client->ClosedDestBranch = $request->input('closedDestBranch');
        $client->OriginBranch = $request->input('originBranch');
        $client->UpdUser = $request->input('updUser');
        $client->UpdDateTime = $request->input('updDateTime');
        $client->DriverLicenseNum = $request->input('driversLicense');
        $client->DateDeceased = $request->input('dateDeceased');
        $client->EncdBy = $request->input('encdBy');
        $client->EncdDateTime = $request->input('encdDateTime');
        $client->Rating = $request->input('rating');
        $client->BusEmpID = $request->input('employmentId');
        $client->SSPExcluded = $request->input('sSpExcluded');
        $client->DOSRITag = $request->input('dosriTag');
        $client->DOSRIRelatedTo = $request->input('dosriRelatedTo');
        $client->SpEducAttained = $request->input('educationalAttainment');
        $client->SpDegreeCourse = $request->input('degree');
        $client->SpOccupation = $request->input('occupation');
        $client->SpMonthlyIncome = $request->input('monthlyIncome');
        $client->Height = $request->input('height');
        $client->Weight = $request->input('weight');
        $client->SCPledge = $request->input('shareCapitalPledge');
        $client->SDPledge = $request->input('shareDepositPledge');
        $client->IsShowTotalPoints = $request->input('isShowTotalPoints');
        $client->RecruiterID = $request->input('recruitedBy');
        $client->GSISNum = $request->input('gsis');
        $client->NSONum = $request->input('nso');
        $client->VotersID = $request->input('votersId');
        $client->PMESBatchNum = $request->input('pmesBatchNum');
        $client->OtherIDNum = $request->input('otherId');
        $client->PMESDate = $request->input('pmesDate');
        $client->EmpCode = $request->input('employerCode');
        $client->BusinessIncome = $request->input('monthlySalary');
        $client->MealAllowance = $request->input('mealAllowance');
        $client->ClientDEPT = $request->input('department');
        $client->SMSNumber = $request->input('smsBroadcastNo');
        $client->SchoolID = $request->input('school');
        $client->SectionID = $request->input('section');
        $client->RestrikID = $request->input('restriction');
        $client->Religion = $request->input('religion');
        $client->CISAclientTitle = $request->input('cisaClientTitle');
        $client->CISAmothersFname = $request->input('cisaMothersFname');
        $client->CISAmothersLname = $request->input('cisaMothersLname');
        $client->CISAmothersMname = $request->input('cisaMothersMname');
        $client->CISAfathersFname = $request->input('cisaFathersFname');
        $client->CISAfathersLname = $request->input('cisaFathersLname');
        $client->CISAfathersNameExtnt = $request->input('cisaFathersNameExtnt');
        $client->CISAfathersMname = $request->input('cisaFathersMname');
        $client->CISAPSOC_CODE = $request->input('cisaPsocCode');
        $client->CISAPSIC_CODE = $request->input('cisaPsicCode');
        $client->CISA_ContactType = $request->input('cisaContactType');
        $client->CISA_ContactNum = $request->input('cisaContactNum');
        $client->CISA_BirthPlace = $request->input('cisaBirthPlace');
        $client->isCISAUpdated = $request->input('isCisaUpdated');
        $client->ResAddStrNo = $request->input('resAddStrNo');
        $client->ProvAddStrNo = $request->input('provAddStrNo');
        $client->BusAddStrNo = $request->input('busAddStrNo');
        $client->SpouseStrNo = $request->input('sPouseStrNo');
        $client->Geo_SubgroupID = $request->input('subGroup');
        
        Client::insertClient($client->ClientIDBrCode, $client->ClientID, $client->ClientIDChkDgt, 
        $client->LName, $client->FName, $client->MName, $client->AlertLevel, $client->OldClientID,
        $client->OldPSBN, $client->SName, $client->AccountName, $client->Collector, $client->DateOpened,
        $client->AccountType, $client->ClientType, $client->AccountStatus, $client->JointType, $client->OldClientName,
        $client->DateOfBirth, $client->Gender, $client->CivilStatus, $client->EducAttained, $client->TINNum, $client->CTCNumber,
        $client->SSSGSISNum, $client->PhilHealthNum, $client->PagibigNum, $client->ATMBank, $client->ATMNum,
        $client->SchoolLastAttended, $client->Profession, $client->Sectoral, $client->Occupational,
        $client->Geographical, $client->Remarks, $client->ResTelNum, $client->ProvTelNum, $client->CellNum,
        $client->EmpBusTelNum, $client->OtherContactNum, $client->SpCellNum, $client->EmailAddress, $client->MailingAddress,
        $client->ResAddStreetv, $client->ResAddBaranga, $client->ResAddCity, $client->ResAddProvince, 
        $client->ResAddZipCode, $client->ResSince, $client->ResType, $client->ProvAddStreet, $client->ProvAddBarangay,
        $client->ProvAddCity, $client->ProvAddProvince, $client->ProvAddZipCode, $client->ProvSince,
        $client->ProvType, $client->BusAddStreet, $client->BusAddBarangay, $client->BusAddCity, $client->BusAddProvince,
        $client->BusAddZipCode, $client->SpBusAddStreet, $client->SpBusAddBarangay, $client->SpBusAddCity, $client->SpBusAddProvince,
        $client->SpBusAddZipCode, $client->BusName, $client->BusNature, $client->BusSince, $client->BusNumEmployees,
        $client->BusJobTitle, $client->BusStatus, $client->BusDateHired, $client->BusLevel, $client->BusOtherSourceOfIncome,
        $client->BusProfessionCode, $client->BusProfession, $client->BusOccupationCode, $client->BusOccupation,
        $client->SpFName, $client->SpMName, $client->SpLName, $client->SpSName, $client->SpGender, $client->SpDateofBirth,
        $client->SpOccupational, $client->SpBusName, $client->SpBusJobTitle, $client->SpBusStatus, $client->SpBusSince,
        $client->SpBusDateHired, $client->SpBusLevel, $client->SpBusNature, $client->SpBusNumEmployees, $client->SpOtherSourceOfIncome,
        $client->ClosedDate, $client->ClosedReason, $client->DateTransferred, $client->ClosedDestBranch, $client->OriginBranch,
        $client->UpdUser, $client->UpdDateTime, $client->DriverLicenseNum, $client->DateDeceased, $client->EncdBy, $client->EncdDateTime,
        $client->Rating, $client->BusEmpID, $client->SSPExcluded, $client->DOSRITag, $client->DOSRIRelatedTo, $client->SpEducAttained,
        $client->SpDegreeCourse, $client->SpOccupation, $client->SpMonthlyIncome, $client->Height, $client->Weight, $client->SCPledge,
        $client->SDPledge, $client->IsShowTotalPoints, $client->RecruiterID, $client->GSISNum, $client->NSONum, $client->VotersID,
        $client->PMESBatchNum, $client->OtherIDNum, $client->PMESDate, $client->EmpCode, $client->BusinessIncome, $client->MealAllowance, 
        $client->ClientDEPT, $client->SMSNumber, $client->SchoolID, $client->SectionID, $client->RestrikID, $client->Religion,
        $client->CISAclientTitle, $client->CISAmothersFname, $client->CISAmothersLname, $client->CISAmothersMname, $client->CISAfathersFname,
        $client->CISAfathersLname, $client->CISAfathersNameExtnt, $client->CISAfathersMname, $client->CISAPSOC_CODE, $client->CISAPSIC_CODE,
        $client->CISA_ContactType, $client->CISA_ContactNum, $client->CISA_BirthPlace, $client->isCISAUpdated, $client->ResAddStrNo, 
        $client->ProvAddStrNo, $client->BusAddStrNo, $client->SpouseStrNo, $client->Geo_SubgroupID);
    }

    /**
     * Update a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $client = new Client;

        $client->ClientID = $request->input('clientId');
        $client->ClientIDChkDgt = 2;
        $client->LName = $request->input('lastName');
        $client->FName = $request->input('firstName');
        $client->MName = $request->input('middleName');
        $client->AlertLevel = $request->input('alertLevel');
        $client->OldClientID = $request->input('referenceId');
        $client->OldPSBN = $request->input('oldPsbn');
        $client->SName = $request->input('suffix');
        $client->AccountName = $request->input('accountName');
        $client->Collector = $request->input('collector');
        $client->DateOpened = $request->input('dateOpened');
        $client->AccountType = $request->input('acctType');
        $client->ClientType = $request->input('clientType');
        $client->AccountStatus = $request->input('accountStatus');
        $client->JointType = $request->input('jointType');
        $client->OldClientName = $request->input('oldClientName');
        $client->DateOfBirth = $request->input('dateOfBirth');
        $client->Gender = $request->input('gender');
        $client->CivilStatus = $request->input('civilStatus');
        $client->EducAttained = $request->input('education');
        $client->TINNum = $request->input('tin');
        $client->CTCNumber = $request->input('ctcno');
        $client->SSSGSISNum = $request->input('sss');
        $client->PhilHealthNum = $request->input('philHealth');
        $client->PagibigNum = $request->input('pagIbig');
        $client->ATMBank = $request->input('atmBank');
        $client->ATMNum = $request->input('atmNo');
        $client->SchoolLastAttended = $request->input('schoolLastAttended');
        $client->Profession = $request->input('profession');
        $client->Sectoral = $request->input('sectoral');
        $client->Occupational = $request->input('occupational');
        $client->Geographical = $request->input('geographical');
        $client->Remarks = $request->input('remarks');
        $client->ResTelNum = $request->input('homeTelNo');
        $client->ProvTelNum = $request->input('provinceTelNo');
        $client->CellNum = $request->input('cellphoneNo');
        $client->EmpBusTelNum = $request->input('employerTelNo');
        $client->OtherContactNum = $request->input('otherContactNo');
        $client->SpCellNum = $request->input('spouseCellNo');
        $client->EmailAddress = $request->input('emailAddress');
        $client->MailingAddress = $request->input('mailingAddress');
        $client->ResAddStreetv = $request->input('resAddStreet');
        $client->ResAddBaranga = $request->input('resAddBarangay');
        $client->ResAddCity = $request->input('resAddCity');
        $client->ResAddProvince = $request->input('resAddProvince');
        $client->ResAddZipCode = $request->input('resAddZipCode');
        $client->ResSince = $request->input('resSince');
        $client->ResType = $request->input('resType');
        $client->ProvAddStreet = $request->input('provAddStreet');
        $client->ProvAddBarangay = $request->input('provAddBarangay');
        $client->ProvAddCity = $request->input('provAddCity');
        $client->ProvAddProvince = $request->input('provAddProvince');
        $client->ProvAddZipCode = $request->input('provAddZipCode');
        $client->ProvSince = $request->input('provSince');
        $client->ProvType = $request->input('provType');
        $client->BusAddStreet = $request->input('busAddStreet');
        $client->BusAddBarangay = $request->input('busAddBarangay');
        $client->BusAddCity = $request->input('busAddCity');
        $client->BusAddProvince = $request->input('busAddProvince');
        $client->BusAddZipCode = $request->input('busAddZipCode');
        $client->SpBusAddStreet = $request->input('spBusAddStreet');
        $client->SpBusAddBarangay = $request->input('spBusAddBarangay');
        $client->SpBusAddCity = $request->input('spBusAddCity');
        $client->SpBusAddProvince = $request->input('spBusAddProvince');
        $client->SpBusAddZipCode = $request->input('spBusAddZipCode');
        $client->BusName = $request->input('employerName');
        $client->BusNature = $request->input('nature');
        $client->BusSince = $request->input('since');
        $client->BusNumEmployees = $request->input('numberOfEmployees');
        $client->BusJobTitle = $request->input('jobTitle');
        $client->BusStatus = $request->input('jobStatus');
        $client->BusDateHired = $request->input('dateHired');
        $client->BusLevel = $request->input('employmentLevel');
        $client->BusOtherSourceOfIncome = $request->input('otherIncome');
        $client->BusProfessionCode = $request->input('busProfessionCode');
        $client->BusProfession = $request->input('busProfessions');
        $client->BusOccupationCode = $request->input('busOccupationCode');
        $client->BusOccupation = $request->input('busOccupation');
        $client->SpFName = $request->input('spFName');
        $client->SpMName = $request->input('spMName');
        $client->SpLName = $request->input('spLName');
        $client->SpSName = $request->input('spSuffix');
        $client->SpGender = $request->input('spGender');
        $client->SpDateofBirth = $request->input('spDateOfBirth');
        $client->SpOccupational = $request->input('spOccupational');
        $client->SpBusName = $request->input('businessName');
        $client->SpBusJobTitle = $request->input('spJobTitle');
        $client->SpBusStatus = $request->input('spJobStatus');
        $client->SpBusSince = $request->input('spSince');
        $client->SpBusDateHired = $request->input('hired');
        $client->SpBusLevel = $request->input('empLevel');
        $client->SpBusNature = $request->input('spNature');
        $client->SpBusNumEmployees = $request->input('spNumberOfEmployees');
        $client->SpOtherSourceOfIncome = $request->input('spOtherIncome');
        $client->ClosedDate = $request->input('dateClosed');
        $client->ClosedReason = $request->input('reason');
        $client->DateTransferred = $request->input('dateTransferred');
        $client->ClosedDestBranch = $request->input('closedDestBranch');
        $client->OriginBranch = $request->input('originBranch');
        $client->UpdUser = $request->input('updUser');
        $client->UpdDateTime = $request->input('updDateTime');
        $client->DriverLicenseNum = $request->input('driversLicense');
        $client->DateDeceased = $request->input('dateDeceased');
        $client->EncdBy = $request->input('encdBy');
        $client->EncdDateTime = $request->input('encdDateTime');
        $client->Rating = $request->input('rating');
        $client->BusEmpID = $request->input('employmentId');
        $client->SSPExcluded = $request->input('sSpExcluded');
        $client->DOSRITag = $request->input('dosriTag');
        $client->DOSRIRelatedTo = $request->input('dosriRelatedTo');
        $client->SpEducAttained = $request->input('educationalAttainment');
        $client->SpDegreeCourse = $request->input('degree');
        $client->SpOccupation = $request->input('occupation');
        $client->SpMonthlyIncome = $request->input('monthlyIncome');
        $client->Height = $request->input('height');
        $client->Weight = $request->input('weight');
        $client->SCPledge = $request->input('shareCapitalPledge');
        $client->SDPledge = $request->input('shareDepositPledge');
        $client->IsShowTotalPoints = $request->input('isShowTotalPoints');
        $client->RecruiterID = $request->input('recruitedBy');
        $client->GSISNum = $request->input('gsis');
        $client->NSONum = $request->input('nso');
        $client->VotersID = $request->input('votersId');
        $client->PMESBatchNum = $request->input('pmesBatchNum');
        $client->OtherIDNum = $request->input('otherId');
        $client->PMESDate = $request->input('pmesDate');
        $client->EmpCode = $request->input('employerCode');
        $client->BusinessIncome = $request->input('monthlySalary');
        $client->MealAllowance = $request->input('mealAllowance');
        $client->ClientDEPT = $request->input('department');
        $client->SMSNumber = $request->input('smsBroadcastNo');
        $client->SchoolID = $request->input('school');
        $client->SectionID = $request->input('section');
        $client->RestrikID = $request->input('restriction');
        $client->Religion = $request->input('religion');
        $client->CISAclientTitle = $request->input('cisaClientTitle');
        $client->CISAmothersFname = $request->input('cisaMothersFname');
        $client->CISAmothersLname = $request->input('cisaMothersLname');
        $client->CISAmothersMname = $request->input('cisaMothersMname');
        $client->CISAfathersFname = $request->input('cisaFathersFname');
        $client->CISAfathersLname = $request->input('cisaFathersLname');
        $client->CISAfathersNameExtnt = $request->input('cisaFathersNameExtnt');
        $client->CISAfathersMname = $request->input('cisaFathersMname');
        $client->CISAPSOC_CODE = $request->input('cisaPsocCode');
        $client->CISAPSIC_CODE = $request->input('cisaPsicCode');
        $client->CISA_ContactType = $request->input('cisaContactType');
        $client->CISA_ContactNum = $request->input('cisaContactNum');
        $client->CISA_BirthPlace = $request->input('cisaBirthPlace');
        $client->isCISAUpdated = $request->input('isCisaUpdated');
        $client->ResAddStrNo = $request->input('resAddStrNo');
        $client->ProvAddStrNo = $request->input('provAddStrNo');
        $client->BusAddStrNo = $request->input('busAddStrNo');
        $client->SpouseStrNo = $request->input('sPouseStrNo');
        $client->Geo_SubgroupID = $request->input('subGroup');
        
        Client::updateClient($client->ClientID, $client->ClientIDChkDgt, 
        $client->LName, $client->FName, $client->MName, $client->AlertLevel, $client->OldClientID,
        $client->OldPSBN, $client->SName, $client->AccountName, $client->Collector, $client->DateOpened,
        $client->AccountType, $client->ClientType, $client->AccountStatus, $client->JointType, $client->OldClientName,
        $client->DateOfBirth, $client->Gender, $client->CivilStatus, $client->EducAttained, $client->TINNum, $client->CTCNumber,
        $client->SSSGSISNum, $client->PhilHealthNum, $client->PagibigNum, $client->ATMBank, $client->ATMNum,
        $client->SchoolLastAttended, $client->Profession, $client->Sectoral, $client->Occupational,
        $client->Geographical, $client->Remarks, $client->ResTelNum, $client->ProvTelNum, $client->CellNum,
        $client->EmpBusTelNum, $client->OtherContactNum, $client->SpCellNum, $client->EmailAddress, $client->MailingAddress,
        $client->ResAddStreetv, $client->ResAddBaranga, $client->ResAddCity, $client->ResAddProvince, 
        $client->ResAddZipCode, $client->ResSince, $client->ResType, $client->ProvAddStreet, $client->ProvAddBarangay,
        $client->ProvAddCity, $client->ProvAddProvince, $client->ProvAddZipCode, $client->ProvSince,
        $client->ProvType, $client->BusAddStreet, $client->BusAddBarangay, $client->BusAddCity, $client->BusAddProvince,
        $client->BusAddZipCode, $client->SpBusAddStreet, $client->SpBusAddBarangay, $client->SpBusAddCity, $client->SpBusAddProvince,
        $client->SpBusAddZipCode, $client->BusName, $client->BusNature, $client->BusSince, $client->BusNumEmployees,
        $client->BusJobTitle, $client->BusStatus, $client->BusDateHired, $client->BusLevel, $client->BusOtherSourceOfIncome,
        $client->BusProfessionCode, $client->BusProfession, $client->BusOccupationCode, $client->BusOccupation,
        $client->SpFName, $client->SpMName, $client->SpLName, $client->SpSName, $client->SpGender, $client->SpDateofBirth,
        $client->SpOccupational, $client->SpBusName, $client->SpBusJobTitle, $client->SpBusStatus, $client->SpBusSince,
        $client->SpBusDateHired, $client->SpBusLevel, $client->SpBusNature, $client->SpBusNumEmployees, $client->SpOtherSourceOfIncome,
        $client->ClosedDate, $client->ClosedReason, $client->DateTransferred, $client->ClosedDestBranch, $client->OriginBranch,
        $client->UpdUser, $client->UpdDateTime, $client->DriverLicenseNum, $client->DateDeceased, $client->EncdBy, $client->EncdDateTime,
        $client->Rating, $client->BusEmpID, $client->SSPExcluded, $client->DOSRITag, $client->DOSRIRelatedTo, $client->SpEducAttained,
        $client->SpDegreeCourse, $client->SpOccupation, $client->SpMonthlyIncome, $client->Height, $client->Weight, $client->SCPledge,
        $client->SDPledge, $client->IsShowTotalPoints, $client->RecruiterID, $client->GSISNum, $client->NSONum, $client->VotersID,
        $client->PMESBatchNum, $client->OtherIDNum, $client->PMESDate, $client->EmpCode, $client->BusinessIncome, $client->MealAllowance, 
        $client->ClientDEPT, $client->SMSNumber, $client->SchoolID, $client->SectionID, $client->RestrikID, $client->Religion,
        $client->CISAclientTitle, $client->CISAmothersFname, $client->CISAmothersLname, $client->CISAmothersMname, $client->CISAfathersFname,
        $client->CISAfathersLname, $client->CISAfathersNameExtnt, $client->CISAfathersMname, $client->CISAPSOC_CODE, $client->CISAPSIC_CODE,
        $client->CISA_ContactType, $client->CISA_ContactNum, $client->CISA_BirthPlace, $client->isCISAUpdated, $client->ResAddStrNo, 
        $client->ProvAddStrNo, $client->BusAddStrNo, $client->SpouseStrNo, $client->Geo_SubgroupID);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Client
        $client = Client::getClientById($id);
        return ClientResource::collection($client);
    }

    public function showClients($name,$clause)
    {
        $client = Client::getClientForBatchEdit($name,$clause);
        return ClientResource::collection($client);
    }
}
