<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// User Registration
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::get('profile', 'UserController@getAuthenticatedUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Clients
Route::get('client/term={term}', 'ClientController@index');

// Get Client
Route::get('client/{id}', 'ClientController@show');

// Store Client
Route::post('client', 'ClientController@store');

// Update Client
Route::put('client', 'ClientController@update');

// Get Account Levels
Route::get('acctLevels', 'AccountLevelController@index');

// Get Account Statuses
Route::get('acctStatuses', 'AccountStatusController@index');

// Get Account Types
Route::get('acctTypes', 'AccountTypesController@index');

// Get Alert Levels
Route::get('alertLevels', 'AlertLevelController@index');

// Get Joint Types
Route::get('jointTypes', 'JointTypesController@index');

// Get Mailing Addresses
Route::get('mailingAddresses', 'MailingAddressController@index');

// Get Departments
Route::get('departments', 'DepartmentController@index');

// Get Genders
Route::get('genders', 'GenderController@index');

// Get Employee Code
Route::get('empCodes', 'EmpCodeController@index');

// Get Professions
Route::get('professions', 'ProfessionController@index');

// Get Occupations
Route::get('occupations', 'OccupationController@index');

// Get Employee Level
Route::get('empLevels', 'EmpLevelController@index');

// Get Education Attains
Route::get('educAttains', 'EducAttainController@index');

// Get Schools
Route::get('schools', 'SchoolController@index');

// Get Bus Statuses
Route::get('bus-statuses', 'BusStatusController@index');

// Get Sectors
Route::get('sectors', 'SectorController@index');

// Get Geo Subgroups
Route::get('geo-subgroups', 'GeoSubgroupController@index');

// Get Restriks
Route::get('restriks', 'RestrikController@index');

// Get Closed Reasons
Route::get('closed-reasons', 'ClosedReasonController@index');

// Get Relations
Route::get('relations', 'RelationController@index');

// Get CoMakerToInquiry
Route::get('comakers/clientId={id}', 'CoMakerController@index');

// Get GenerationVerificationCode
Route::get('client/clientId={id}', 'GenerationVerificationCodeController@index');

// Get ActivityLogs
Route::get('actvtlogs/clientId={id}', 'ActivityLogsController@index');

// Get Beneficiaries
Route::get('benefs/clientId={id}', 'BeneficiaryController@index');

// Insert Beneficiaries
Route::post('benef', 'BeneficiaryController@store');

// Delete Beneficiaries
Route::delete('benef/{id}', 'BeneficiaryController@destroy');

// Update Beneficiaries
Route::put('benef', 'BeneficiaryController@update');

// Get Personal Refenrences
Route::get('prefs/clientId={id}', 'PersonalRefController@index');

// Insert Personal References
Route::post('pref', 'PersonalRefController@store');

// Delete Personal Refence
Route::delete('pref/{id}', 'PersonalRefController@destroy');

// Update Beneficiaries
Route::put('pref', 'PersonalRefController@update');

// Get Credit Bank References
Route::get('cbrefs/clientId={id}', 'CBrefController@index');

// Insert Credit Bank Rerefences
Route::post('cbref', 'CBrefController@store');

// Delete Credit Bank References
Route::delete('cbref/{id}', 'CBrefController@destroy');

// Get Industry Sections
Route::get('indSections', 'IndSectionController@index');

// Get Activity Fields
Route::get('actvtFields', 'ActivityFieldController@index');

// Get Activity Lists
Route::get('actvtLists', 'ActivityListController@index');

// Get Amor Types
Route::get('amorTypes', 'AmorTypeController@index');

// Get Balance Sheets
Route::get('balanceSheets', 'BalanceSheetController@index');

// Get Balance Types
Route::get('balTypes', 'BalTypeController@index');

// Get Bank Codes
Route::get('bankCodes', 'BankCodeController@index');

// Get Borrower Classes
Route::get('borrowerClasses', 'BorrowerClassController@index');

// Get Branches Closeds
Route::get('branches-closed', 'BranchesClosedController@index');

// Get Bus Levels
Route::get('busLevels', 'BusLevelController@index');

// Get Check Types
Route::get('chkTypes', 'ChkTypeController@index');

// Get Cisa Client Title
Route::get('cisaClientTitles', 'CisaClientTitleController@index');

// Get Cisa Contact Type
Route::get('cisaContactTypes', 'CisaContactTypeController@index');

// Get Cisa Country
Route::get('cisaCountries', 'CisaCountryController@index');

// Get Cisa House
Route::get('cisaHouseTypes', 'CisaHouseTypeController@index');

// Get Cisa Occupation Stat
Route::get('cisaOccupationStats', 'CisaOccupationStatController@index');

// Get Cisa Primary Id
Route::get('cisaPrimaryIds', 'CisaPrimaryIdController@index');

// Get Cisa Psic Code
Route::get('cisaPsicCodes', 'CisaPsicCodeController@index');

// Get Cisa Psic Sector
Route::get('cisaPsicSectors', 'CisaPsicSectorController@index');

// Get Cisa Psoc Code
Route::get('cisaPsocCodes', 'CisaPsocCodeController@index');

// Get Cisa Psoc Division
Route::get('cisaPsocDivs', 'CisaPsocDivController@index');

// Get Cisa Psoc Sector
Route::get('cisaPsocSectors', 'CisaPsocSectorController@index');

// Get Cisa Secondary Id
Route::get('cisaSecondaryIds', 'CisaSecondaryIdController@index');

// Get Cisa Sl Type
 Route::get('cisaSlTypes', 'CisaSlTypeController@index');

// Get Activity Logs
Route::get('actvtLogs/userId={id}', 'ActvtLogController@index');

// Get Cisa Sole Trader
Route::get('cisaSoleTrader/{id}', 'CisaSoleTraderController@index');

// Insert Cisa Sole Trader
Route::post('cisaSoleTrader', 'CisaSoleTraderController@store');

// Update Cisa Sole Trader
Route::put('cisaSoleTrader', 'CisaSoleTraderController@update');

// Get Civil Stat
Route::get('civilStats', 'CivilStatController@index');

// Get Client Type
Route::get('clientTypes', 'ClientTypeController@index');

// Get Cl Stat
Route::get('clStats', 'ClStatController@index');

// Get Cluster
Route::get('clusters', 'ClusterController@index');

// Get Coa
Route::get('coas', 'CoaController@index');

// Get Coac
Route::get('coacs', 'CoacController@index');

// Get Coci Type
Route::get('cociTypes', 'CociTypeController@index');

// Get Code Storage
Route::get('codeStorages', 'CodeStorageController@index');

// Get Collateral Type
Route::get('collateralTypes', 'CollateralTypeController@index');

// Get Coll Chart
Route::get('collCharts', 'CollChartController@index');

// Get Connection
Route::get('conns', 'ConnController@index');

// Get Creditor Type
Route::get('creditorTypes', 'CreditorTypeController@index');

// Get Cts Type
Route::get('ctsTypes', 'CtsTypeController@index');

//Get Specific Cts Type
Route::get('spefCtsTypes', 'CtsTypeController@show');

// Get Dimfreq
Route::get('dimFreqs', 'DimFreqController@index');

// Get Dosritags
Route::get('dosritags', 'DosritagController@index');

// Get Due Date Type
Route::get('dueDateTypes', 'DueDateTypeController@index');

// Get Gl Account Type
Route::get('glAcctTypes', 'GlAcctTypeController@index');

// Get Gl Control
Route::get('glControls', 'GlControlController@index');

// Get Gl Trans
Route::get('glTrans', 'GlTransController@index');

// Get Hold Code
Route::get('holdCodes', 'HoldCodeController@index');

// Get Holidays
Route::get('holidays', 'HolidaysController@index');

// Get Industry Code
Route::get('indCodes', 'IndCodeController@index');

// Get Industry Division
Route::get('indDivisions', 'IndDivisionController@index');

// Get Inv AdjReason
Route::get('invAdjReasons', 'InvAdjReasonController@index');

// Get Inv Brand
Route::get('invBrands', 'InvBrandController@index');

// Get Inv Category
Route::get('invCategories', 'InvCategoryController@index');

// Get Inv Common Name
Route::get('invCommonNames', 'InvCommonNameController@index');

// Get Inv Department
Route::get('invDepartments', 'InvDepartmentController@index');

// Get Inv Item Class
Route::get('invItemClasses', 'InvItemClassController@index');

// Get Inv Status
Route::get('invItemStatuses', 'InvItemStatusController@index');

// Get Inv Itemsub Class
Route::get('invItemSubClasses', 'InvItemSubClassController@index');

// Get Inv Item Type
Route::get('invItemTypes', 'InvItemTypeController@index');

// Get Inv Item Unit
Route::get('invItemUnits', 'InvItemUnitController@index');

// Get Inv Location
Route::get('invLocations', 'InvLocationController@index');

// Get Inv Pidtl
Route::get('invPidtls', 'InvPidtlController@index');

// Get Inv Pistatus
Route::get('invPiStatuses', 'InvPiStatusController@index');

// Get Inv Pisum
Route::get('invPiSums', 'InvPiSumController@index');

// Get Inv Podtl
Route::get('invPodtls', 'InvPodtlController@index');

// Get Inv Points
Route::get('invPoints', 'InvPointController@index');

// Get Inv Postatus
Route::get('invPoStatuses', 'InvPoStatusController@index');

// Get Inv Posum
Route::get('invPoSums', 'InvPoSumController@index');

// Get Inv Prices
Route::get('invPrices', 'InvPricesController@index');

// Get Inv Product
Route::get('invProducts', 'InvProductController@index');

// Get Inv Sldtl
Route::get('invSldtls', 'InvSldtlController@index');

// Get Inv Sttdtl
Route::get('invSttdtls', 'InvSttdtlController@index');

// Get Inv Stt Status
Route::get('invSttStatuses', 'InvSttStatusController@index');

// Get Inv Stt Sums
Route::get('invSttSums', 'InvSttSumController@index');

// Get Inv Tax
Route::get('invTaxes', 'InvTaxController@index');

// Get Job Position
Route::get('jobPositions', 'JobPositionController@index');

// Get Loan App Status
Route::get('loanAppStatuses', 'LoanAppStatusController@index');

// Get Loan Class
Route::get('loanClasses', 'LoanClassController@index');

// Get Loan Deduction Group
Route::get('loanDeducGroups', 'LoanDeducGroupController@index');

// Get Loan Purpose
Route::get('loanPurposes', 'LoanPurposeController@index');

// Get Loan Security
Route::get('loanSecurities', 'LoanSecurityController@index');

// Get Loan Sl Behavior
Route::get('loanSlBehaviors', 'LoanSlBehaviorController@index');

// Get Loan Sub Type
Route::get('loanSubTypes', 'LoanSubTypeController@index');

// Get Number of Days
Route::get('numDays', 'NumDaysController@index');

// Get Passbk Types
Route::get('passBkTypes', 'PassBkTypeController@index');

// Get Payment Mode
Route::get('paymentModes', 'PaymentModeController@index');

// Get Party Object
Route::get('prtyObjects', 'PrtyObjectController@index');

// Get Rating
Route::get('ratings', 'RatingController@index');

// Get Religion
Route::get('religions', 'ReligionController@index');

// Get Request Code
Route::get('reqCodes', 'ReqCodeController@index');

// Get Request Status
Route::get('reqStatuses', 'ReqStatusController@index');

// Get Res Type
Route::get('resTypes', 'ResTypeController@index');

// Get Sav Class
Route::get('savClasses', 'SavClassController@index');

// Get Sc Stocks Price
Route::get('scStocksPrices', 'ScStocksPriceController@index');

// Get Section 
Route::get('sections', 'SectionController@index');

// Get Semaphor
Route::get('semaphors', 'SemaphorController@index');

// Get Semcond
Route::get('semConds', 'SemCondController@index');

// Get Sl Class
Route::get('slClasses', 'SlClassController@index');

// Get Sle Type
Route::get('sleTypes', 'SleTypeController@index');

// Get Slg Class
Route::get('slgClasses', 'SlgClassController@index');

// Get Sl Type
Route::get('slTypes', 'SlTypeController@index');

// Get SL Type for Share Capital
Route::get('slTypesSc', 'SlTypeController@showSlShareCapital');

// Get Sl Type La Deduc
Route::get('slTypeLaDeducs', 'SlTypeLaDeducController@index');

// Get Term 
Route::get('terms', 'TermController@index');

// Get Trans Atm 
Route::get('transAtms', 'TransAtmsController@index');

// Get Trans Ck
Route::get('transCks', 'TransCkController@index');

// Get Trans Status
Route::get('transStatuses', 'TransStatusController@index');

// Get Trans Type
Route::get('transTypes', 'TransTypeController@index');
Route::get('transTypes/{transModule}', 'TransTypeController@show');

// Get Trans Type Atm
Route::get('transTypeAtms', 'TransTypeAtmController@index');

// Get TR Module
Route::get('trModules', 'TrModuleController@index');

// Get Update Tag
Route::get('updTags', 'UpdTagController@index');

// Get Wfk Gl Trans
Route::get('wkfGlTrans', 'WkfGlTransController@index');

// Get Adjacent Flag
Route::get('adjFlags', 'AdjFlagController@index');

// Get AP
 Route::get('aps/clientId={id}', 'ApController@index');

// Get List of Ar
Route::get('ars/{id}', 'ArController@index');

// Get Ar
Route::get('ar/{arBrCode}/{arSlcCode}/{arSltCode}/{arRefNo}/{clientIdAr}', 'ArController@show');

// Insert Ar
Route::post('ars', 'ArController@store');

// Update Ar
Route::put('ar', 'ArController@update');

// Delete Ar
Route::delete('ar/{arBrCode}/{arSlcCode}/{arSltCode}/{arRefNo}/{clientIdAr}', 'ArController@destroy');

// Get Attendance
Route::get('attendances/clientId={id}', 'AttendanceController@index');

// Get Att Events
Route::get('attEvents', 'AttEventsController@index');

// Get Att Status
Route::get('attStatuses', 'AttStatusController@index');

// Get Cisa Add Primary Id
Route::get('cisaAddPrimaryIds/clientId={id}', 'CisaAddPrimaryIdController@index');

// Get Cisa Cm Secondary Id
Route::get('cisaCmSecndryId/{id}', 'CisaCmSecndryIdController@index');

// Insert Cisa CM Secondary ID
Route::post('cisaCmSecndryId', 'CisaCmSecndryIdController@store');

// Update Cisa CM Secondary ID
Route::put('cisaCmSecndryId', 'CisaCmSecndryIdController@update');

// Get Cisa Members Name
Route::get('cisaMembersNames/{id}', 'CisaMembersNameController@index');

// Insert Cisa Members Name
Route::post('cisaMembersName', 'CisaMembersNameController@store');

// Update Cisa Members Name
Route::put('cisaMembersName', 'CisaMembersNameController@update');

// Get Cl Stat His
Route::get('clStatHis/clientId={id}', 'ClStatHisController@index');

// Get Collect Type
Route::get('collectTypes', 'CollectTypeController@index');

// Get Comaker
Route::get('coMakers/clientId={id}', 'CoMakerController@index');

// Get Conn Sum
Route::get('connSums', 'ConnSumController@index');

// Get All Geo
Route::get('geos', 'GeoController@index');

// Get Geo
Route::get('geo/{geoId}/{geoBrCode}', 'GeoController@show');

// Insert Geo
Route::post('geo', 'GeoController@store');

// Update Geo
Route::put('geo', 'GeoController@update');

// Get Hold
Route::get('holds/clientId={id}', 'HoldController@index');

// Get Inv Paymethod
Route::get('invPayMethods/clientId={id}', 'InvPayMethodController@index');

// Get Images By Id
Route::get('images/clientId={id}', 'ImageController@index');

Route::post('imageInsert','ImageController@store');

Route::put('imageUpdate','ImageController@update');

// Get Inv Vendor
Route::get('invVendors/clientId={id}', 'InvVendorController@index');

// Get Inv Vendor
Route::get('invVendors', 'InvVendorController@show');

// Get Joints
Route::get('joints/clientId={id}', 'JointController@index');

// Insert Joints
Route::post('joints', 'JointController@store');

// Delete Joints
Route::delete('joints/{id}', 'JointController@destroy');

// Get Loan
Route::get('loans/{id}', 'LoanController@show');

// Get Loan by Id
Route::get('loan/{loanBrCode}/{loanSlcCode}/{loanSltCode}/{loanRefNo}/{clientIdLoan}', 'LoanController@index');

// Insert Loan
Route::post('loan', 'LoanController@store');

// Update Loan
Route::put('loan', 'LoanController@update');

// Delete Loan
Route::delete('loan/{loanBrCode}/{loanSlcCode}/{loanSltCode}/{loanRefNo}/{clientIdLoan}', 'LoanController@destroy');

// Get Loan Search
Route::get('loansearch/{id}', 'LoanSearchController@index');

// Get Loan Search Loan
Route::get('loansearch/{id}/loan-search-loan', 'LoanSearchLoanController@index');

// Get Loan App
Route::get('loanApp/{id}', 'LoanAppController@index');

// Insert Loan Application
Route::post('loanApp', 'LoanAppController@store');

// Update Loan Application
Route::put('loanApp', 'LoanAppController@update');

// Delete Loan App
Route::delete('loanApp/{brCode}/{id}', 'LoanAppController@destroy');

// Get Loan Deduc
Route::get('loanDeducs/clientId={id}', 'LoanDeducController@index');

// Get Loan Sl Deduc
Route::get('loanSlDeducs/clientId={id}', 'LoanSlDeducController@index');

// Get Member Client
Route::get('memClients/clientId={id}', 'MemClientController@index');

// Get Member Sl Mastersum
Route::get('memSlMasterSums/clientId={id}', 'MemSlMasterSumController@index');

// Get Member Trans Sum
Route::get('memTransSums/clientId={id}', 'MemTransSumController@index');

// Get Osl
Route::get('osls/clientId={id}', 'OslController@index');

// Get Passbk
Route::get('passBks/{id}', 'passBkController@index');

// Get Passbk By Ids
Route::get('passBk/{passBkBrCode}/{passBkClientId}/{passBkSlcCode}/{passBkSltCode}/{passBkRefNo}', 'passBkController@show');

// Get Request
Route::get('requests/clientId={id}', 'RequestController@index');

// Get All Sc
Route::get('scs/{id}', 'ScController@index');

//Get All Empty Sc of Client
Route::get('scsEmpty/{id}','ScController@showEmptySc');

// Get Sc
Route::get('sc/{scBrCode}/{scSlcCode}/{scSltCode}/{scRefNo}/{clientIdSc}', 'ScController@show');

// Insert Sc
Route::post('sc', 'ScController@store');

// Update Sc
Route::put('sc', 'ScController@update');

// Delete Sc
Route::delete('sc/{scBrCode}/{scSlcCode}/{scSltCode}/{scRefNo}/{clientIdSc}', 'ScController@destroy');

// Get Sc Stocks History
Route::get('scStocksHistories/clientId={id}', 'ScStocksHistoryController@index');

//  Get Sd
 Route::get('sd/clientId={id}', 'SdController@indexId');

// Get Sd By Id
Route::get('sd/{sdBrCode}/{sdSlcCode}/{sdSltCode}/{sdRefNo}/{clientIdSd}', 'SdController@index');

// Insert Sd
Route::post('sd', 'SdController@store');

// Update Sd
Route::put('sd', 'SdController@update');

// Delete
Route::delete('sd/{sdBrCode}/{sdSlcCode}/{sdSltCode}/{sdRefNo}/{clientIdSd}', 'SdController@destroy');

// Get Sd Search
Route::get('sdsearch/{id}', 'SdSearchController@index');

// Get Sd Search Redirect data to the Savings Deposit Page
Route::get('sdsearch/{id}/savings-deposit-search', 'DepositSearchController@index');

// Get Sd Inquiry Search Redirect data to the Savings Deposit Inquiry Page
Route::get('sdsearch/{id}/inquiry-savings-search', 'DepositSearchController@index');

//  Get Ap
// Route::get('aps/clientId={id}', 'ApController@index');

// Get Ap By Id
Route::get('ap/{apBrCode}/{apSlcCode}/{apSltCode}/{apRefNo}/{clientIdAp}', 'ApController@index');

// Get Ap Search
Route::get('apsearch/{id}', 'AccountsPayableSearchController@index');

// Get Ap Maintenance Search Redirect data to the Maintenance Ap Page
Route::get('apsearch/{id}/maintenance-ap-search', 'ApSearchController@index');

// Get Ap Inquiry Search Redirect data to the Inquiry Ap Page
Route::get('apsearch/{id}/inquiry-ap-search', 'ApSearchController@index');

// Insert Ap
Route::post('ap', 'ApController@store');

// Update Ap
Route::put('ap', 'ApController@update');

// Delete Loan
Route::delete('ap/{apBrCode}/{apSlcCode}/{apSltCode}/{apRefNo}/{clientIdAp}', 'ApController@destroy');

//  Get Osl
// Route::get('osls/clientId={id}', 'ApController@index');

// Get Osl By Id
Route::get('osl/{oslBrCode}/{oslSlcCode}/{oslSltCode}/{oslRefNo}/{clientIdOsl}', 'OslController@index');

// Get Osl Search
Route::get('oslsearch/{id}', 'SubsidiaryLedgerSearchController@index');

// Get Osl Search Redirect data to the Maintenance Osl Page
Route::get('oslsearch/{id}/maintenance-sl-search', 'OslSearchController@index');


// Get Osl Search Redirect data to the Inquiry Osl Page
Route::get('oslsearch/{id}/inquiry-sl-search', 'OslSearchController@index');

// Insert Osl
Route::post('osl', 'OslController@store');

// Update Osl
Route::put('osl', 'OslController@update');

// Delete Osl
Route::delete('osl/{oslBrCode}/{oslSlcCode}/{oslSltCode}/{oslRefNo}/{clientIdOsl}', 'OslController@destroy');

// Get Sematt
Route::get('semAtts/clientId={id}', 'SemAttController@index');

// Get Sldtl
Route::get('slDtls/clientId={id}', 'SlDtlController@index');

// Get Sl Master Sum
Route::get('slMasterSums/clientId={id}', 'SlMasterSumController@index');

// Get Sl Sum
Route::get('slSums/clientId={id}', 'SlSumController@index');

// Get Td
Route::get('tds/clientId={id}', 'TdController@show');

// Get Td By Id
Route::get('td/{tdBrCode}/{tdSlcCode}/{tdSltCode}/{tdRefNo}/{clientIdTd}', 'TdController@index');

// Insert Td
Route::post('td', 'TdController@store');

// Update Td
Route::put('td', 'TdController@update');

// Delete
Route::delete('td/{tdBrCode}/{tdSlcCode}/{tdSltCode}/{tdRefNo}/{clientIdTd}', 'TdController@destroy');

// Get Td Search
Route::get('tdsearch/{id}', 'TimeDepositSearchController@index');

// Td Search Redirect data to the time deposit Page
Route::get('tdsearch/{id}/time-deposit-search', 'TdSearchController@index');
Route::get('tdsearch/{id}/inquiry-time-search', 'TdSearchController@index');

// Get Trans DT
Route::get('transDts/clientId={id}', 'TransDtController@index');

// Get Trans Fo
Route::get('transFos/clientId={id}', 'TransFoController@index');

// Get Trans Sums
Route::get('transSums/{id}', 'TransSumController@index');

// Get Trans Sum
Route::get('transSum/{trCode}/{trYear}/{trCtlNo}/{trDocNo}', 'TransSumController@show');

// Insert Trans Sum
Route::post('transSums', 'TransSumController@store');

// Update Trans Sum
Route::put('transSum', 'TransSumController@update');

// Get Wkf Caid
Route::get('wkfCaids/clientId={id}', 'WkfCaidController@index');

// Get Wkf Cavg
Route::get('wkfCavgs/clientId={id}', 'WkfCavgController@index');

// Get Wkf Cisd
Route::get('wkfCisds/clientId={id}', 'WkfCisdController@index');

// Get Wkf Li Remit
Route::get('wkfLiRemits/clientId={id}', 'WkfLiRemitController@index');

// Get Wkf Pif
Route::get('wkfPifs/clientId={id}', 'WkfPifController@index');

// Get Wkf Sd List
Route::get('wkfSdLists/clientId={id}', 'WkfSdListController@index');

// Get Wkf Soa
Route::get('wkSoas/clientId={id}', 'WkSoaController@index');

// Get Wkf Analysis
Route::get('wkfAnalys/clientId={id}', 'WkfAnalysisController@index');

// Get Over Rides
Route::get('overRides', 'OverRideController@index');

//Get Trans Type by TransModule
Route::get('transtype/{transModule}', 'TransTypeController@show');

//Get Loans Accounts 
Route::get('loansAccNumInquiry/{id}/{branchCode}/loansAccNum', 'LoansAccNumInquiryController@index');

//Get Loans Account
Route::get('loansAccount/{clientId}/{branchCode}/{refNo}/{slcCode}/{sltCode}/loanAcc','LoansAccNumInquiryController@show');

//Get TransType for Loan
Route::get('transtypeLoan','TransTypeController@showTransType');

//Get SL Class for Loan App
Route::get('slClassLoan','SlClassController@show');

//Get SL Type for Loan App
Route::get('slTypeLoan/{branchCode}/{slcCode}','SLTypeController@show');

//Get coa for Loan App
Route::get('coaLoan/{branchCode}','CoaController@show');

//Get Ref No SL for Loan App
Route::get('loanAccSL/{clientId}/{branchCode}/{slcCode}/{sltCode}','LoanAppSLRefNoController@showLoanAccount');

Route::get('accReceivableSL/{clientId}/{branchCode}/{slcCode}/{sltCode}','LoanAppSLRefNoController@showAccReceivable');

Route::get('savingsDepositSL/{clientId}/{branchCode}/{slcCode}/{sltCode}','LoanAppSLRefNoController@showSavingsDeposit');

Route::get('timeDepositSL/{clientId}/{branchCode}/{slcCode}/{sltCode}','LoanAppSLRefNoController@showTimeDeposit');

Route::get('accPayableSL/{clientId}/{branchCode}/{slcCode}/{sltCode}','LoanAppSLRefNoController@showAccPayable');

Route::get('shareCapitalSL/{clientId}/{branchCode}/{slcCode}/{sltCode}','LoanAppSLRefNoController@showShareCapital');

Route::get('otherSL/{clientId}/{branchCode}/{slcCode}/{sltCode}','LoanAppSLRefNoController@showOtherSL');

// Get Inv Item
// Route::get('invItems/{id}', 'InvItemController@show');

// searching for the specific inventory item
Route::get('invItems/upc={upc}', 'InvItemController@index');

// refersh item 
Route::get('invItems/{id}', 'InvItemController@show');

// Adding for inventory
Route::post('invItems', 'InvItemController@store');

//Get Num Rows in loanapp
Route::get('countLoanApp','LoanAppController@count');

//Get Loan App details
Route::get('loanAppsDisplay/{status}','LoanAppController@showLoansByStatus');

//Get SLType by Branch
Route::get('sltBranch/{branchCode}','SLTypeController@showSL');

// Total Loan Amount
Route::get('totalAmountLoan/{clientIdLoan}', 'TotalAmountsController@loanTotal');

// Total AR Amount
Route::get('totalAmountAr/{clientIdAr}', 'TotalAmountsController@arTotal');

// Total Share Capital Amount
Route::get('totalAmountShareCapital/{clientIdSc}', 'TotalAmountsController@shareCapitalTotal');

// Total Savings Deposit Amount
Route::get('totalAmountSavingsDeposit/{clientIdSd}', 'TotalAmountsController@savingsDepositTotal');

// Total Time Deposit Amount
Route::get('totalAmountTimeDeposit/{clientIdTd}', 'TotalAmountsController@timeDepositTotal');

//Get Loan SLClass
Route::get('loanSlclass','SlClassController@showSLClassLoan');
//Get Geo By Branch
Route::get('geoByBranch/{branchCode}','GeoController@showGeo');

//Get Clients For Loan Batch Edit
Route::get('clientBatch/{name}/{clause}','ClientController@showClients');

//Get Override
Route::get('override/{brcode}/{userId}','OverRideController@show');

//Get SL Class for Client Listing
Route::get('slclassClientCISA','SlClassController@showSLClassClient');

// Get Cash In Vault
Route::geT('cashInVault', 'TotalAmountsController@cashInVault');

//Get SL Type for Client Listing
Route::get('slTypeClient/{brCode}/{slcCode}','SlTypeController@showSLCLient');

// Get All P2S Six Digit Numbers
Route::get('playtosavesix/{term}', 'PlayToSaveController@index');

// Get P2S Six Digit Number
Route::get('playtosavesixdigit/{ptsDnId}', 'PlayToSaveController@show');

// Get All P2S Three Digit Number
Route::get('playtosavethree/{term}', 'PlayToSaveController@indexThree');

// Get P2S Six Digit Number
Route::get('playtosavethreedigit/{ptsTdId}', 'PlayToSaveController@showThree');

// Insert Play To Save Six Digit Number
Route::post('playtosavesixdigits', 'PlayToSaveController@store');

// Insert Play To Save Three Digit Number
Route::post('playtosavethreedigits', 'PlayToSaveController@storeThree');

// Get Six Digit Winners
Route::get('playtosavesixdigitwinners/{ptsTdId}', 'PlayToSaveController@sixDigitWinners');

// Insert Six Digit Winners
Route::post('playtosavesixdigitwinners', 'PlayToSaveController@storeSixDigitWinners');

// Get Three Digit Winners
Route::get('playtosavethreedigitwinners/{threedigit}', 'PlayToSaveController@threeDigitWinners');

// Insert Three Digit Winners
Route::post('playtosavethreedigitwinners', 'PlayToSaveController@storeThreeDigitWinners');

// Get Serial Numbers
Route::get('playtosaveserialnumbers/{branch}', 'PlayToSaveSerialStabsController@index');

// Get Serial Number
Route::get('playtosaveserialnumbers/{id}/{branch}/{serial}', 'PlayToSaveSerialStabsController@get');

// Insert Serial Number
Route::post('playtosaveserialnumber', 'PlayToSaveSerialStabsController@store');

// Update Serial Number
Route::put('playtosaveserialnumber', 'PlayToSaveSerialStabsController@update');

// Get All Branches
// Route::get('playtosavebranches', 'PlayToSaveSerialStabsController@show');

// Insert Branch
Route::post('playtosavebranch', 'PlayToSaveSerialStabsController@insert');

// Get Six Digit Client Entry
Route::get('playtosavesixdigitentry/{clientId}', 'PlayToSaveController@getSixDigitEntryById');

// Get All Three Digit Entries Winner
Route::get('playtosavesixdigitentries/{sixdigit}', 'PlayToSaveController@showAll');

// Get Six Digit Num
Route::get('playtosavesixdigitnum/{serialid}/{branch}/{serialnum}', 'PlayToSaveController@getSixDigitById');

// Insert Six Digit Client Entry
Route::post('playtosavesixdigitentry', 'PlayToSaveController@insertSixDigitEntry');

// Get Three Digit Entry
Route::get('playtosavethreedigitentry/{clientId}', 'PlayToSaveController@getThreeDigitEntryById');

// Get All Three Digit Entries Winner
Route::get('playtosavethreedigitentries/{threedigit}', 'PlayToSaveController@showAllThree');

// Get Three Digit Number
Route::get('playtosavethreedigitnum/{serialid}/{branch}/{serialnum}', 'PlayToSaveController@getThreeDigitById');

// Insert Three Digit Entry
Route::post('playtosavethreedigitentry', 'PlayToSaveController@insertThreedigitEntry');

//Get All Three Digit Entries
Route::get('playtosaveregisterthree','ScController@showPlayToSaveThree');

//Get All Six Digit Entries
Route::get('playtosaveregistersix','ScController@showPlayToSaveSix');

// Get Branches
Route::get('branches', 'BranchesController@index');

// Get Branch By ID
Route::get('branch/{branchid}', 'BranchesController@show');

// Insert Branch
Route::post('branch', 'BranchesController@insert');

// Insert All Stabs
Route::post('playtosaveserialstabsall', 'PlayToSaveSerialStabsController@insertAllStabs');

// Get Ticket Info
Route::get('playtosaveserialstabsinfo/{serialNumber}', 'PlayToSaveSerialStabsController@ticketSearch');