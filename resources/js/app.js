/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");


import VueRouter from "vue-router";
import Home from "./components/Home.vue";
import Login from "./components/Login.vue";
import Register from "./components/Register.vue";
import Client from "./components/Client.vue";
import FrontOffice from "./components/FrontOffice.vue";
import BackOffice from "./components/BackOffice.vue";
import Loans from "./components/Loans.vue";
import Deposits from "./components/Deposits.vue";
import DepositsDormancy from "./components/DepositsDormancy.vue";
import DepositsMemberGenerate from "./components/DepositsMemberGenerate.vue";
import DepositsMemberMaintenance from "./components/DepositsMemberMaintenance.vue";
import DepositsShareCapitalGenerate from "./components/DepositsShareCapitalGenerate.vue";
import DepositsShareCapitalControl from "./components/DepositsShareCapitalControl.vue";
import DepositsCompute from "./components/DepositsCompute.vue";
import DepositsJournalize from "./components/DepositsJournalize.vue";
import DepositsMaintenanceDividend from "./components/DepositsMaintenanceDividend.vue";
import DepositsMaintenancePatronage from "./components/DepositsMaintenancePatronage.vue";
import DepositsMaintenanceSpecial from "./components/DepositsMaintenanceSpecial.vue";
import Inventory from "./components/Inventory.vue";
import OtherMod from "./components/OtherMod.vue";
import OtherModSTOthersComputation from "./components/OtherModSTOthersComputation.vue";
import OtherModSTPayrollComputation from "./components/OtherModSTPayrollComputation.vue";
import OtherModSTMaintenance from "./components/OtherModSTMaintenance.vue";
import OtherModSTSetupAnnual from "./components/OtherModSTSetupAnnual.vue";
import OtherModReportAPListing from "./components/OtherModReportAPListing.vue";
import OtherModMaintenanceAccountsPayable from "./components/OtherModMaintenanceAccountsPayable.vue";
import OtherModMaintenanceAccountsPayableSearch from "./components/OtherModMaintenanceAccountsPayableSearch.vue";
import OtherModMaintenanceSubsidiaryLedger from "./components/OtherModMaintenanceSubsidiaryLedger.vue";
import OtherModMaintenanceSubsidiaryLedgerSearch from "./components/OtherModMaintenanceSubsidiaryLedgerSearch.vue";
import OtherModInquiryAccountsPayable from "./components/OtherModInquiryAccountsPayable.vue";
import OtherModInquiryAccountsPayableSearch from "./components/OtherModInquiryAccountsPayableSearch.vue";
import OtherModInquirySubsidiaryLedger from "./components/OtherModInquirySubsidiaryLedger.vue";
import OtherModInquirySubsidiaryLedgerSearch from "./components/OtherModInquirySubsidiaryLedgerSearch.vue";
import STOthersComputation from "./components/OtherModSTOthersComputation.vue";
import STPayrollComputation from "./components/OtherModSTPayrollComputation.vue";
import STMaintenance from "./components/OtherModSTMaintenance.vue";
import STSetupAnnual from "./components/OtherModSTSetupAnnual.vue";
import ReportAPListing from "./components/ReportsAccountsPayableListing.vue";
import Setup from "./components/Setup.vue";
import System from "./components/System.vue";
import Reports from "./components/Reports.vue";
import HomePage from "./components/HomePage.vue";
import StartOfDay from "./components/FOStartOfDay.vue";
import PassbkPrinting from "./components/FOPassbookPrinting.vue";
import EndOfDay from "./components/FOEndOfDay.vue";
import ATMGateway from "./components/FOATMGateway.vue";
import RequestServer from "./components/FORequestServer.vue";
import CCOITransaction from "./components/FOCCOITransaction.vue";
import FrontOfficeReport from "./components/FOFrontOfficeReport.vue";
import OverRide from "./components/FOOverRide.vue";
import ClearingAcUtility from "./components/FOClearingAcUtility.vue";
import Transaction from "./components/FOTransaction.vue";
import BackOfficeInquiry from "./components/BOInquiry.vue";
import ClientSearch from "./components/ClientSearch.vue";
import ClientBeneficiaries from "./components/ClientBeneficiaries.vue";
import ClientPersonalReferences from "./components/ClientPersonalReferences.vue";
import ClientCreditBankReferences from "./components/ClientCreditBankReferences.vue";
import ClientJoints from "./components/ClientJoints.vue";
import FsConsolidation from "./components/BOFsConsolidation.vue";
import GeneralJournal from "./components/BOGeneralJournal.vue";
import Disbursements from "./components/BODisbursements.vue";
import DisbursementsSearch from "./components/BODisbursementsSearch.vue";
import Upload from "./components/BOUpload.vue";
import BprMaintenance from "./components/BOBprMaintenance.vue";
import BprMaintenanceSearch from "./components/BOBprMaintenanceSearch.vue";
import GeneralJournalInquiry from "./components/BOGeneralJournalInquiry.vue";
import GeneralJournalInquirySearch from "./components/BOGeneralJournalInquirySearch.vue";
import DisbursementsInquiry from "./components/BODisbursementsInquiry.vue";
import CashReceiptsInquiry from "./components/BOCashReceiptsInquiry.vue";
import ReportGeneration from "./components/BOReportGeneration.vue";
import BalanceSheetReport from "./components/BOBalanceSheetReport.vue";
import IncomeStatementReport from "./components/BOIncomeStatementReport.vue";
import TrialBalanceReport from "./components/BOTrialBalanceReport.vue";
import GeneralLedgerReport from "./components/BOGeneralLedgerReport.vue";
import GlTransSummaryReport from "./components/BOGlTransSummaryReport.vue";
import General from "./components/BOGeneral.vue";
import SlOption from "./components/BOSlOption.vue";
import Advanced from "./components/BOAdvanced.vue";
import Maintenance from "./components/BOMaintenance.vue";
import SavingsDeposit from "./components/DepositsSavingsDeposit.vue";
import TimeDeposit from "./components/DepositsTimeDeposit.vue";
import ShareCapital from "./components/DepositsShareCapital.vue";
import InquirySavings from "./components/DepositsInquirySavings.vue";
import InquiryTime from "./components/DepositsInquiryTime.vue";
import InquiryShare from "./components/DepositsInquiryShare.vue";
import InquiryDividend from "./components/DepositsInquiryDividend.vue";
import InquiryPatronage from "./components/DepositsInquiryPatronage.vue";
import InquiryInterest from "./components/DepositsInquiryInterest.vue";
import LoansAppModule from "./components/LoansAppModule.vue";
import LoansMaster from "./components/LoanMaster.vue";
import LoansArMaster from "./components/LoansArMaster.vue";
import LoanArSearch from "./components/LoanArSearch.vue";
import LoansMasterInquiry from "./components/LoansMasterInquiry.vue";
import LoansArMasterInquiry from "./components/LoansArMasterInquiry.vue";
import LoanBatchEditSetup from "./components/LoanBatchEditSetup.vue";
import LoanSearch from "./components/LoanSearch.vue";
import LoansGenerate from "./components/LoansGenerate.vue";
import LoansMaintenance from "./components/LoansMaintenance.vue";
import LoansUnearnedInterest from "./components/LoansUnearnedInterest.vue";
import LoansUnearnedCollectionFee from "./components/LoansUnearnedCollectionFee.vue";
import LoansBatchProcessMaintenance from "./components/LoansBatchProcessMaintenance.vue";
import LoansAmortizationSchedCal from "./components/LoansAmortizationSchedCal.vue";
import LoansAgingOfReceivables from "./components/LoansAgingOfReceivables.vue";
import LoansAnalysisOfReceivables from "./components/LoansAnalysisOfReceivables.vue";
import LoansOverride from "./components/LoansOverride.vue";
import DepositsIntGenerate from "./components/DepositsIntGenerate.vue";
import DepositsIntMaintenance from "./components/DepositsIntMaintenance.vue";
import DepositsAccrGenerate from "./components/DepositsAccrGenerate.vue";
import DepositsAccrMaintenance from "./components/DepositsAccrMaintenance.vue";
import DepositsSavingsListing from "./components/DepositsSavingsListing.vue";
import DepositsTimeListing from "./components/DepositsTimeListing.vue";
import DepositsShareCapitalListing from "./components/DepositsShareCapitalListing.vue";
import DepositsTimeCertificate from "./components/DepositsTimeCertificate.vue";
import DepositsTimeGenerate from "./components/DepositsTimeGenerate.vue";
import DepositsTimeMaintenance from "./components/DepositsTimeMaintenance.vue";
import InvItemsMaster from "./components/InvItemsMaster.vue";
import InvItemsInquiry from "./components/InvItemsInquiry.vue";
import InvItemsListing from "./components/InvItemsListing.vue";
import InvVendorsMaster from "./components/InvVendorsMaster.vue";
import InvVendorsInquiry from "./components/InvVendorsInquiry.vue";
import InvVendorsListing from "./components/InvVendorsListing.vue";
import InvPurchaseMaster from "./components/InvPurchaseMaster.vue";
import InvPurchaseInquiry from "./components/InvPurchaseInquiry.vue";
import InvPurchaseListing from "./components/InvPurchaseListing.vue";
import InvPhysicalMaster from "./components/InvPhysicalMaster.vue";
import InvPhysicalInquiry from "./components/InvPhysicalInquiry.vue";
import InvPhysicalListing from "./components/InvPhysicalListing.vue";
import InvStocksMaster from "./components/InvStocksMaster.vue";
import InvStocksInquiry from "./components/InvStocksInquiry.vue";
import InvStocksListing from "./components/InvStocksListing.vue";
import InvInventoryPayment from "./components/InvInventoryPayment.vue";
import InvInventoryItem from "./components/InvInventoryItem.vue";
import InvReceivingVoucher from "./components/InvReceivingVoucher.vue";
import InvReceivingVinquiry from "./components/InvReceivingVinquiry.vue";
import SetupChartOfAccounts from "./components/SetupChartOfAccounts.vue";
import SetupConsoChartOfAccounts from "./components/SetupConsoChartOfAccounts.vue";
import SetupDepartments from "./components/SetupDepartments.vue";
import SetupBankCodeTable from "./components/SetupBankCodeTable.vue";
import SetupCollectors from "./components/SetupCollectors.vue";
import SetupDeductionGroup from "./components/SetupDeductionGroup.vue";
import SetupCodeStorage from "./components/SetupCodeStorage.vue";
import SetupHolidays from "./components/SetupHolidays.vue";
import SetupInitializeConnections from "./components/SetupInitializeConnections.vue";
import SetupOverride from "./components/SetupOverride.vue";
import DepositsCompoundingInterest from "./components/DepositsCompoundingInterest.vue";
import DepositsOverride from "./components/DepositsOverride.vue";
import FOPrioritySystemDisplay from "./components/FOPrioritySystemDisplay.vue";
import FOInquiry from "./components/FOInquiry.vue";
import FOCashTransfers from "./components/FOCashTransfers.vue";
import DepositsSavingsDepositSearchPage from "./components/DepositsSavingsDepositSearchPage.vue";
import DepositsTimeDepositSearchPage from "./components/DepositsTimeDepositSearchPage.vue";
import LoanSearchInquiry from './components/LoanSearchInquiry.vue';
import DepositsInquirySavingsSearch from "./components/DepositsInquirySavingsSearch.vue";
import LoanArSearchInquiry from "./components/LoanArSearchInquiry.vue";
import DepositsInquiryTimeSearch from "./components/DepositsInquiryTimeSearch.vue";
import BOInquirySearchPage from "./components/BOInquirySearchPage.vue";
import DepositsShareCapitalSearch from "./components/DepositsShareCapitalSearch.vue";
import DepositsInquiryShareSearch from "./components/DepositsInquiryShareSearch.vue";
import DepositsInquiryDividendSearch from "./components/DepositsInquiryDividendSearch.vue";
import DepositsInquiryPatronageSearch from "./components/DepositsInquiryPatronageSearch.vue";
import DepositsInquiryInterestSearch from "./components/DepositsInquiryInterestSearch.vue";
import BOTreeBrowser from "./components/BOTreeBrowser.vue";
import FOCashCollection from "./components/FOCashCollection.vue";
import FOBankDeposits from "./components/FOBankDeposits.vue";
import FOCashDisbursements from "./components/FOCashDisbursements.vue";
import FOTransactionListing from "./components/FOTransactionListing.vue";
import BOGenerate from "./components/BOGenerate.vue";
import BOOverride from "./components/BOOverride.vue";
import FOPassBkSearch from "./components/FOPassBkSearch.vue";
import BOGeneralJournalSearch from "./components/BOGeneralJournalSearch.vue";
import DepositsIntMaintenanceSearch from "./components/DepositsIntMaintenanceSearch.vue";
import DepositsAccrMaintenanceSearch from "./components/DepositsAccrMaintenanceSearch.vue";
import DepositsTimeMaintenanceSearch from "./components/DepositsTimeMaintenanceSearch.vue";
import DepositsMaintenanceDividendSearch from "./components/DepositsMaintenanceDividendSearch.vue";
import DepositsMaintenancePatronageSearch from "./components/DepositsMaintenancePatronageSearch.vue";
import DepositsMaintenanceSpecialSearch from "./components/DepositsMaintenanceSpecialSearch.vue";
import LoansAccNumInquiry from "./components/LoansAccNumInquiry.vue";
import LoansAppSearch from "./components/LoanAppSearch.vue";
import FOTransactionSearch from "./components/FOTransactionSearch.vue";
import FOTransactionSearchTrans from "./components/FOTransactionSearchTrans.vue";
import FOInquirySearch from "./components/FOInquirySearch.vue";
import InvOverride from "./components/InvOverride.vue";
import InvTransaction from "./components/InvTransaction.vue";
import InvBrandMaster from "./components/InvBrandMaster.vue";
import InvCommonNameMaster from "./components/InvCommonNameMaster.vue";
import InvItemClassMaster from "./components/InvItemClassMaster.vue";
import InvItemSubMaster from "./components/InvItemSubMaster.vue";
import InvItemUnitMaster from "./components/InvItemUnitMaster.vue";
import InvItemLocationMaster from "./components/InvItemLocationMaster.vue";
import InvPointsMaster from "./components/InvPointsMaster.vue"
import DepositsAvgControlPrint from "./components/DepositsAvgControlPrint.vue";
import OtherALListing from "./components/OtherModOtherALListing.vue";
import OtherModReportTrueMoneyTransactionListing from "./components/OtherModReportTrueMoneyTransactionListing.vue";
import SetupSubsidiaryLedgerSLTypes from "./components/SetupSubsidiaryLedgerSLTypes.vue";
import SetupAccountGroupSectoral from "./components/SetupAccountGroupSectoral.vue";
import SetupAccountGroupOccupational from "./components/SetupAccountGroupOccupational.vue";
import SetupAccountGroupGeo from "./components/SetupAccountGroupGeo.vue";
import SetupAccountGroupEmpCode from "./components/SetupAccountGroupEmpCode.vue";
import SetupAccountGroupEducSchool from "./components/SetupAccountGroupEducSchool.vue";
import SetupAccountGroupEducSection from "./components/SetupAccountGroupEducSection.vue";
import SetupAccountGroupRestriction from "./components/SetupAccountGroupRestriction.vue";
import SetupLoanLoanPurposeTable from "./components/SetupLoanLoanPurposeTable.vue";
import SetupIndSection from "./components/SetupIndSection.vue";
import SetupIndDivision from "./components/SetupIndDivision.vue";
import SetupIndIndustryCode from "./components/SetupIndIndustryCode.vue";
import SetupTimeDepositRate from "./components/SetupTimeDepositRate.vue";
import SetupEmailSettings from "./components/SetupEmailSettings.vue";
import SetupPriorityObject from "./components/SetupPriorityObject.vue";
import SetupQueuingSettings from "./components/SetupQueuingSettings.vue";
import SetupClusterSetup from "./components/SetupClusterSetup.vue";
import SetupShareCapitalPriceStock from "./components/SetupShareCapitalPriceStock.vue";
import SetupAccountGroupGeoSearch from "./components/SetupAccountGroupGeoSearch.vue";
import SystemMaintenanceEnvironmentBranchInformation from "./components/SystemMaintenanceEnvironmentBranchInformation.vue"
import SystemMaintenanceEnvironmentWorkstationParameters from "./components/SystemMaintenanceWorkstationParameters.vue"
import OtherModTools from "./components/OtherModTools.vue";
import ReportsClientListing from "./components/ReportsClientListing.vue";
import ReportsClientOverall from "./components/ReportsClientOverall.vue";
import ReportsClientSummary from "./components/ReportsClientSummary.vue";
import ReportsTransactionTransactionListing from "./components/ReportsTransactionTransactionListing.vue";
import ReportsTransactionCociListing from "./components/ReportsTransactionCociListing.vue";
import ReportsReceivableAnalysis from "./components/ReportsReceivableAnalysis.vue";
import ReportsReceivableAging from "./components/ReportsReceivableAging.vue";
import ReportsReceivableCollection from "./components/ReportsReceivableCollection.vue";
import ReportsSavingsDepositsListing from "./components/ReportsSavingsDepositsListing.vue";
import ReportsShareCapitalListing from "./components/ReportsShareCapitalListing.vue";
import ReportsCapitalStockCertificate from "./components/ReportsCapitalStockCertificate.vue";
import ReportsTimeDepositsListing from "./components/ReportsTimeDepositsListing.vue";
import ReportsTimePrinting from "./components/ReportsTimePrinting.vue";
import ReportsAccountsPayableListing from "./components/ReportsAccountsPayableListing.vue";
import ReportsOtherSlListing from "./components/ReportsOtherSlListing.vue";
import ReportsInsuranceRemittanceReport from "./components/ReportsInsuranceRemittanceReport.vue";
import ReportsPreferredInvestmentCertificate from "./components/ReportsPreferredInvestmentCertificate.vue";
import ReportsDamayanEnrollmentCertificate from "./components/ReportsDamayanEnrollmentCertificate.vue";
import ReportsCisa from "./components/ReportsCisa.vue";
import ReportsFrontOfficeReports from "./components/ReportsFrontOfficeReports.vue";
import ReportsFinancialBalance from "./components/ReportsFinancialBalance.vue";
import ReportsFinancialIncome from "./components/ReportsFinancialIncome.vue";
import ReportsFinancialTrial from "./components/ReportsFinancialTrial.vue";
import ReportsFinancialGeneral from "./components/ReportsFinancialGeneral.vue";
import ReportsFinancialGlTransaction from "./components/ReportsFinancialGlTransaction.vue";
import ReportsBirCompliance from "./components/ReportsBirCompliance.vue";
import ReportsMiscellaneousSlDetail from "./components/ReportsMiscellaneousSlDetail.vue";
import ReportsToolOverride from "./components/ReportsToolOverride.vue";
import SystemSetSystemDate from "./components/SystemSetSystemDate.vue";
import SystemDatabaseManagement from "./components/SystemDatabaseManagement.vue";
import SystemConnectionMonitor from "./components/SystemConnectionMonitor.vue";
import SystemInterestOnDeposits from "./components/SystemInterestOnDeposits.vue";
import SystemDividend from "./components/SystemDividend.vue";
import SystemPatronage from "./components/SystemPatronage.vue";
import SystemLiveUpdate from "./components/SystemLiveUpdate.vue";
import SystemUserAccess from "./components/SystemUserAccess.vue";
import SystemUserAccessRightsInquiry from "./components/SystemUserAccessRightsInquiry.vue";
import SystemActivityLogs from "./components/SystemActivityLogs.vue";
import SystemLoanLogs from "./components/SystemLoanLogs.vue";
import SystemLoanApplication from "./components/SystemLoanApplication.vue";
import SystemUserAccessRightsListing from "./components/SystemUserAccessRightsListing.vue";
import SystemUserActivityLogsListing from "./components/SystemUserActivityLogsListing.vue";
import SystemTransferToListing from "./components/SystemTransferToListing.vue";
import SystemTransferFromListing from "./components/SystemTransferFromListing.vue";
import SystemMigrateCoop from "./components/SystemMigrateCoop.vue";
import SystemMigrateHolyCross from "./components/SystemMigrateHolyCross.vue";
import SystemTagClients from "./components/SystemTagClients.vue";
import SystemTransfersToBranch from "./components/SystemTransfersToBranch.vue";
import SystemTransfersFromBranch from "./components/SystemTransfersFromBranch.vue";
import SystemMaintenance from "./components/SystemMaintenance.vue";
import SystemDownloadTable from "./components/SystemDownloadTable.vue";
import SystemUploadTable from "./components/SystemUploadTable.vue";
import SystemOverride from "./components/SystemOverride.vue";
import InvMasterSearch from "./components/InvMasterSearch.vue";
import ClientMasterList from "./components/ClientMasterList.vue";
import ClientStatementOfAccount from "./components/ClientStatementOfAccount.vue";
import ClientTransferSlAccounts from "./components/ClientTransferSlAccounts.vue";
import ClientCoMakerToInquiry from "./components/ClientCoMakerToInquiry.vue";
import ClientActivityLogs from "./components/ClientActivityLogs.vue";
import ClientGenerationVerificationCode from "./components/ClientGenerationVerificationCode.vue";
import ClientSlAccountSummary from "./components/ClientSlAccountSummary.vue";
import PlayToSave from "./components/PlayToSave.vue";
import PlayToSaveRegistration from "./components/P2SRegistration.vue";
import PlayToSaveSixDigitWinner from "./components/P2SSixDigitWinner.vue";
import PlayToSaveThreeDigitWinner from "./components/P2SThreeDigitWinner.vue";
import PlayToSaveSixDigitNum from "./components/P2SSixDigitNum.vue";
import PlayToSaveThreeDigitNum from "./components/P2SThreeDigitNum.vue";
import PlaytoSaveSixDigitSearch from "./components/P2SSixDigitSearch.vue";
import PlayToSaveThreeDigitSearch from "./components/P2SThreeDigitSearch.vue";
import PlayToSaveStabs from "./components/P2SStabs.vue";
import PlayToSaveNumberSelection from "./components/P2SNumberSelection.vue";
import PlayToSaveStabsSearch from "./components/P2SStabsSearch.vue";
import PlayToSaveThreeDigitRegistration from "./components/P2SThreeDigitRegistration.vue";
import PlayToSaveThreeDigitNumberSelection from "./components/P2SThreeDigitNumberSelection.vue";
import PlayToSaveStabsList from "./components/P2SStabsList.vue";
import PlayToSaveStabsListSix from "./components/P2SStabsListSix.vue";
import PlayToSaveStabsAll from "./components/P2SStabsAll.vue";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VueRouter);


Vue.component("login-app", require("./components/Login.vue"));
Vue.component("register-app", require("./components/Register.vue"));
Vue.component("home-app", require("./components/Home.vue"));
Vue.component("client-app", require("./components/Client.vue"));
Vue.component(
    "clientbeneficiaries-app",
    require("./components/ClientBeneficiaries.vue")
);
Vue.component(
    "clientpersonalreferences-app",
    require("./components/ClientPersonalReferences.vue")
);
Vue.component(
    "clientcreditbankreferences-app",
    require("./components/ClientCreditBankReferences.vue")
);
Vue.component("front-office", require("./components/FrontOffice.vue"));
Vue.component("back-office", require("./components/BackOffice.vue"));
Vue.component("loans-app", require("./components/Loans.vue"));
Vue.component("deposits-app", require("./components/Deposits.vue"));
Vue.component(
    "deposits-dormancy-app",
    require("./components/DepositsDormancy.vue")
);
Vue.component(
    "deposits-member-generate-app",
    require("./components/DepositsMemberGenerate.vue")
);
Vue.component(
    "deposits-member-maintenance-app",
    require("./components/DepositsMemberMaintenance.vue")
);
Vue.component(
    "avg-generate-app",
    require("./components/DepositsShareCapitalGenerate.vue")
);
Vue.component(
    "deposits-share-capital-control-app",
    require("./components/DepositsShareCapitalControl.vue")
);
Vue.component(
    "deposits-compute-app",
    require("./components/DepositsCompute.vue")
);
Vue.component(
    "deposits-journalize-app",
    require("./components/DepositsJournalize.vue")
);
Vue.component(
    "deposits-maintenance-dividend-app",
    require("./components/DepositsMaintenanceDividend.vue")
);
Vue.component(
    "deposits-maintenance-patronage-app",
    require("./components/DepositsMaintenancePatronage.vue")
);
Vue.component(
    "deposits-maintenance-special-app",
    require("./components/DepositsMaintenanceSpecial.vue")
);
Vue.component("inventory-app", require("./components/Inventory.vue"));
Vue.component("other-mod", require("./components/OtherMod.vue"));
Vue.component("setup-app", require("./components/Setup.vue"));
Vue.component("system-app", require("./components/System.vue"));
Vue.component("reports-app", require("./components/Reports.vue"));
Vue.component("accountinfo-app", require("./components/AccountInfo.vue"));
Vue.component("homepage-app", require("./components/HomePage.vue"));
Vue.component("startofday-app", require("./components/FOStartOfDay.vue"));
Vue.component(
    "passbookprint-app",
    require("./components/FOPassbookPrinting.vue")
);
Vue.component(
    "maintenance-accounts-payable-app",
    require("./components/OtherModMaintenanceAccountsPayable.vue")
);
Vue.component(
    "maintenance-subsidiary-ledger-app",
    require("./components/OtherModMaintenanceSubsidiaryLedger.vue")
);
Vue.component(
    "inquiry-accounts-payable-app",
    require("./components/OtherModInquiryAccountsPayable.vue")
);
Vue.component(
    "inquiry-subsidiary-ledger-app",
    require("./components/OtherModInquirySubsidiaryLedger.vue")
);
Vue.component("endofday-app", require("./components/FOEndOfDay.vue"));
Vue.component("atmgateway-app", require("./components/FOATMGateway.vue"));
Vue.component("requestserver-app", require("./components/FORequestServer.vue"));
Vue.component(
    "ccoitransaction-app",
    require("./components/FOCCOITransaction.vue")
);
Vue.component(
    "frontofficereport-app",
    require("./components/FOFrontOfficeReport.vue")
);
Vue.component("over-ride", require("./components/FOOverRide.vue"));
Vue.component(
    "clearingacutility-app",
    require("./components/FOClearingAcUtility.vue")
);
Vue.component("transaction-app", require("./components/FOTransaction.vue"));
Vue.component("backofficeinquiry-app", require("./components/BOInquiry.vue"));
Vue.component("clientsearch-app", require("./components/ClientSearch.vue"));
Vue.component(
    "fsconsolidation-app",
    require("./components/BOFsConsolidation.vue")
);
Vue.component(
    "generaljournal-app",
    require("./components/BOGeneralJournal.vue")
);
Vue.component("disbursements-app", require("./components/BODisbursements.vue"));
Vue.component("disbursements-search-app", require("./components/BODisbursementsSearch.vue"));
Vue.component("upload-app", require("./components/BOUpload.vue"));
Vue.component(
    "bprmaintenance-app",
    require("./components/BOBprMaintenance.vue")
);
Vue.component("bprmaintenancesearch-app", require("./components/BOBprMaintenanceSearch.vue"));
Vue.component(
    "generaljournalinquiry-app",
    require("./components/BOGeneralJournalInquiry.vue")
);
Vue.component("generaljournalinquirysearch-app", require("./components/BOGeneralJournalInquirySearch.vue"));
Vue.component(
    "disbursementsinquiry-app",
    require("./components/BODisbursementsInquiry.vue")
);
Vue.component(
    "cashreceiptsinquiry-app",
    require("./components/BOCashReceiptsInquiry.vue")
);
Vue.component(
    "reportgeneration-app",
    require("./components/BOReportGeneration.vue")
);
Vue.component(
    "balancesheetreport-app",
    require("./components/BOBalanceSheetReport.vue")
);
Vue.component(
    "incomestatementreport-app",
    require("./components/BOIncomeStatementReport.vue")
);
Vue.component(
    "trialbalancereport-app",
    require("./components/BOTrialBalanceReport.vue")
);
Vue.component(
    "generalledgerreport-app",
    require("./components/BOGeneralLedgerReport.vue")
);
Vue.component(
    "gltranssummaryreport-app",
    require("./components/BOGlTransSummaryReport.vue")
);
Vue.component("general-app", require("./components/BOGeneral.vue"));
Vue.component("sloption-app", require("./components/BOSlOption.vue"));
Vue.component("advanced-app", require("./components/BOAdvanced.vue"));
Vue.component("maintenance-app", require("./components/BOMaintenance.vue"));
Vue.component(
    "savingsdeposit-app",
    require("./components/DepositsSavingsDeposit.vue")
);
Vue.component(
    "timedeposit-app",
    require("./components/DepositsTimeDeposit.vue")
);
Vue.component(
    "sharecapital-app",
    require("./components/DepositsShareCapital.vue")
);
Vue.component(
    "inquirysavings-app",
    require("./components/DepositsInquirySavings.vue")
);
Vue.component(
    "inquirytime-app",
    require("./components/DepositsInquiryTime.vue")
);
Vue.component(
    "inquiryshare-app",
    require("./components/DepositsInquiryShare.vue")
);
Vue.component(
    "inquirydividend-app",
    require("./components/DepositsInquiryDividend.vue")
);
Vue.component(
    "inquirypatronage-app",
    require("./components/DepositsInquiryPatronage.vue")
);
Vue.component(
    "inquiryinterest-app",
    require("./components/DepositsInquiryInterest.vue")
);
Vue.component("deposistsinquirytimesearch-app", require("./components/DepositsInquiryTimeSearch.vue"));
Vue.component("depositssavingsdepositsearchpage-app", require("./components/DepositsSavingsDepositSearchPage.vue"));
Vue.component("depositstimedepositsearchpage-app", require("./components/DepositsTimeDepositSearchPage.vue"));
Vue.component("depositsinquirysavingssearch-app", require("./components/DepositsInquirySavingsSearch.vue"));
Vue.component("depositsinquirysharesearch-app", require("./components/DepositsInquiryShareSearch.vue"));
Vue.component("depositsinquirydividendsearch-app", require("./components/DepositsInquiryDividendSearch.vue"));
Vue.component("depositsinquirypatronagesearch-app", require("./components/DepositsInquiryPatronageSearch.vue"));
Vue.component("depositsinquiryinterestsearch-app", require("./components/DepositsInquiryInterestSearch.vue"));
Vue.component("clientjoint-app", require("./components/ClientJoints.vue"));
Vue.component("loanappmod-app", require("./components/LoansAppModule.vue"));
Vue.component("loansmaster-app", require("./components/LoanMaster.vue"));
Vue.component("loansarmaster-app", require("./components/LoansArMaster.vue"));
Vue.component("loanarsearch-app", require("./components/LoanArSearch.vue"));
Vue.component(
    "loansmasterinquiry-app",
    require("./components/LoansMasterInquiry.vue")
);
Vue.component(
    "loansarmasterinquiry-app",
    require("./components/LoansArMasterInquiry.vue")
);
Vue.component(
    "loanbatchedit-app",
    require("./components/LoanBatchEditSetup.vue")
);
Vue.component("loansearch-app", require("./components/LoanSearch.vue"));
Vue.component("loansgenerate-app", require("./components/LoansGenerate.vue"));
Vue.component(
    "loansmaintenance-app",
    require("./components/LoansMaintenance.vue")
);
Vue.component(
    "loansunearnedinterest-app",
    require("./components/LoansUnearnedInterest.vue")
);
Vue.component(
    "loansunearnedcollectionfee-app",
    require("./components/LoansUnearnedCollectionFee.vue")
);
Vue.component(
    "loansbatchprocessmaintenance-app",
    require("./components/LoansBatchProcessMaintenance.vue")
);
Vue.component(
    "loansamortizationschedcal-app",
    require("./components/LoansAmortizationSchedCal.vue")
);
Vue.component(
    "loansagingofreceivables-app",
    require("./components/LoansAgingOfReceivables.vue")
);
Vue.component(
    "loansanalysisofreceivables-app",
    require("./components/LoansAnalysisOfReceivables.vue")
);
Vue.component("loansoverride-app", require("./components/LoansOverride.vue"));
Vue.component(
    "depositsintgenerate-app",
    require("./components/DepositsIntGenerate.vue")
);
Vue.component(
    "depositsintmaintenance-app",
    require("./components/DepositsIntMaintenance.vue")
);
Vue.component(
    "depositsaccrgenerate-app",
    require("./components/DepositsAccrGenerate.vue")
);
Vue.component(
    "depositsaccrmaintenance-app",
    require("./components/DepositsAccrMaintenance.vue")
);
Vue.component(
    "depositstimelisting-app",
    require("./components/DepositsTimeListing.vue")
);
Vue.component(
    "depositssavingslisting-app",
    require("./components/DepositsSavingsListing.vue")
);
Vue.component(
    "depositssharecapitallisting-app",
    require("./components/DepositsShareCapitalListing.vue")
);
Vue.component(
    "depositstimecertificate-app",
    require("./components/DepositsTimeCertificate.vue")
);
Vue.component(
    "depositstimegenerate-app",
    require("./components/DepositsTimeGenerate.vue")
);
Vue.component(
    "depositstimemaintenance-app",
    require("./components/DepositsTimeMaintenance.vue")
);
Vue.component("invitemsmaster-app", require("./components/InvItemsMaster.vue"));
Vue.component(
    "invitemsinquiry-app",
    require("./components/InvItemsInquiry.vue")
);
Vue.component(
    "invitemslisting-app",
    require("./components/InvItemsListing.vue")
);
Vue.component(
    "invvendorsmaster-app",
    require("./components/InvVendorsMaster.vue")
);
Vue.component(
    "invvendorsinquiry-app",
    require("./components/InvVendorsInquiry.vue")
);
Vue.component(
    "invvendorslisting-app",
    require("./components/InvVendorsListing.vue")
);
Vue.component(
    "invpurchasemaster-app",
    require("./components/InvPurchaseMaster.vue")
);
Vue.component(
    "invpurchaseinquiry-app",
    require("./components/InvPurchaseInquiry.vue")
);
Vue.component(
    "invpurchaselisting-app",
    require("./components/InvPurchaseListing.vue")
);

Vue.component(
    "invphysicalmaster-app",
    require("./components/InvPhysicalMaster.vue")
);
Vue.component(
    "invphysicalinquiry-app",
    require("./components/InvPhysicalMaster.vue")
);
Vue.component(
    "invphysicallisting-app",
    require("./components/InvPhysicalListing.vue")
);
Vue.component(
    "invstocksmaster-app",
    require("./components/InvStocksMaster.vue")
);
Vue.component(
    "invstocksinquiry-app",
    require("./components/InvStocksInquiry.vue")
);
Vue.component(
    "invstockslisting-app",
    require("./components/InvStocksListing.vue")
);
Vue.component(
    "invinventorypayment-app",
    require("./components/InvInventoryPayment.vue")
);
Vue.component(
    "invinventoryitem-app",
    require("./components/InvInventoryItem.vue")
);
Vue.component(
    "invreceivingvoucher-app",
    require("./components/InvReceivingVoucher.vue")
);
Vue.component(
    "invreceivingvinquiry-app",
    require("./components/InvReceivingVinquiry.vue")
);
Vue.component(
    "setupcharofaccounts-app",
    require("./components/SetupChartOfAccounts.vue")
);

Vue.component(
    "setupconsochartofaccount-app",
    require("./components/SetupConsoChartOfAccounts.vue")
);

Vue.component(
    "setupdepartments-app",
    require("./components/SetupDepartments.vue")
);

Vue.component(
    "setupbankcodetable-app",
    require("./components/SetupBankCodeTable.vue")
);

Vue.component(
    "environment-branch-information-app",
    require("./components/SystemMaintenanceEnvironmentBranchInformation.vue")
);
Vue.component(
    "environment-workstation-parameters-app",
    require("./components/SystemMaintenanceWorkstationParameters.vue")
);



Vue.component("setupholidays-app", require("./components/SetupHolidays.vue"));
Vue.component("setupinitializeconnections-app", require("./components/SetupInitializeConnections.vue"));
Vue.component("setupcollectors-app", require("./components/SetupCollectors.vue"));
Vue.component("setupdeductiongroup-app", require("./components/SetupDeductionGroup.vue"));
Vue.component("setupcodestorage-app", require("./components/SetupCodeStorage.vue"));
Vue.component("depositscompoundinginterest-app", require("./components/DepositsCompoundingInterest.vue"));
Vue.component("setupoverride-app", require("./components/SetupOverride.vue"));
Vue.component("depositsoverride-app", require("./components/DepositsOverride.vue"));
Vue.component("foprioritysystemdisplay-app", require("./components/FOPrioritySystemDisplay.vue"));
Vue.component("depositsoverride-app", require("./components/DepositsOverride.vue"));
Vue.component("frontofficeinquiry-app", require("./components/FOInquiry.vue"));
Vue.component("frontofficecashtransfers-app", require("./components/FOCashTransfers.vue"));
Vue.component("loansearcinquiry-app", require("./components/LoanSearchInquiry.vue"));
Vue.component("loanarsearchinquiry-app", require("./components/LoanArSearchInquiry.vue"));
Vue.component("sharecapitalsearch-app", require("./components/DepositsShareCapitalSearch.vue"));
Vue.component("boinquirysearchpage-app", require("./components/BOInquirySearchPage.vue"));
Vue.component("inquirysharesearch-app", require("./components/DepositsInquiryShareSearch.vue"));
Vue.component("inquirydividendsearch-app", require("./components/DepositsInquiryDividendSearch.vue"));
Vue.component("inquirypatronagesearch-app", require("./components/DepositsInquiryPatronageSearch.vue"));
Vue.component("inquiryinterestsearch-app", require("./components/DepositsInquiryInterestSearch.vue"));
Vue.component("botreebrowser-app", require('./components/BOTreeBrowser.vue'));
Vue.component("focashcollection-app", require('./components/FOCashCollection.vue'));
Vue.component("fobankdeposits-app", require('./components/FOBankDeposits.vue'));
Vue.component("focashdisbursements-app", require('./components/FOCashDisbursements.vue'));
Vue.component("fotransactionlisting-app", require('./components/FOTransactionListing.vue'));
Vue.component("bogenerate-app", require('./components/BOGenerate.vue'));
Vue.component("booverride-app", require('./components/BOOverride.vue'));
Vue.component("passbksearch-app", require('./components/FOPassBkSearch.vue'));
Vue.component("bogeneraljournalsearch-app", require('./components/BOGeneralJournalSearch.vue'));
Vue.component("intmaintenancesearch-app", require('./components/DepositsIntMaintenanceSearch.vue'));
Vue.component("accrmaintenancesearch-app", require('./components/DepositsAccrMaintenanceSearch.vue'));
Vue.component("timemaintenancesearch-app", require('./components/DepositsTimeMaintenanceSearch.vue'));
Vue.component("maintenancedividendsearch-app", require('./components/DepositsMaintenanceDividendSearch.vue'));
Vue.component("maintenancepatronagesearch-app", require('./components/DepositsMaintenancePatronageSearch.vue'));
Vue.component("maintenancespecialsearch-app", require('./components/DepositsMaintenanceSpecialSearch.vue'));
Vue.component("loansaccnuminquiry-app", require('./components/LoansAccNumInquiry.vue'));
Vue.component("loanappsearch-app", require('./components/LoanAppSearch.vue'));
Vue.component("transactionsearch-app", require('./components/FOTransactionSearch.vue'));
Vue.component("transactionsearchtrans-app", require('./components/FOTransactionSearchTrans.vue'));
Vue.component("inquirysearch-app", require('./components/FOInquirySearch.vue'));
Vue.component("invoverride-app", require('./components/InvOverride.vue'));
Vue.component("invtransaction-app", require('./components/InvTransaction.vue'));
Vue.component("invbrandmaster-app", require('./components/InvBrandMaster.vue'));
Vue.component("invcommonnamemaster-app", require('./components/InvCommonNameMaster.vue'));
Vue.component("invitemclassmaster-app", require('./components/InvItemClassMaster.vue'));
Vue.component("invitemsubmaster-app", require('./components/InvItemSubMaster.vue'));
Vue.component("invitemunitmaster-app", require('./components/InvItemUnitMaster.vue'));
Vue.component("invitemlocationmaster-app", require('./components/InvItemLocationMaster.vue'));
Vue.component("invpointsmaster-app", require('./components/InvPointsMaster.vue'));
Vue.component("avgcontrolprint-app", require('./components/DepositsAvgControlPrint.vue'));
Vue.component("setupsubsidiaryledgersltypes-app", require('./components/SetupSubsidiaryLedgerSLTypes.vue'));
Vue.component("setupaccountgroupsectoral-app", require('./components/SetupAccountGroupSectoral.vue'));
Vue.component("setupaccountgroupoccupational-app", require('./components/SetupAccountGroupOccupational.vue'));
Vue.component("setupaccountgroupgeo-app", require('./components/SetupAccountGroupGeo.vue'));
Vue.component("setupaccountgroupempcode-app", require('./components/SetupAccountGroupEmpCode.vue'));
Vue.component("setupaccountgroupeducschool-app", require('./components/SetupAccountGroupEducSchool.vue'));
Vue.component("setupaccountgroupeducsection-app", require('./components/SetupAccountGroupEducSection.vue'));
Vue.component("setupaccountgrouprestriction-app", require('./components/SetupAccountGroupRestriction.vue'));
Vue.component("setuploanloanpurposetable-app", require('./components/SetupLoanLoanPurposeTable.vue'));
Vue.component("setupgeogroupsearch-app", require('./components/SetupAccountGroupGeoSearch.vue'));
Vue.component("othermodtools-app", require('./components/OtherModTools.vue'));
Vue.component("othermodmaintenanceaccountspayable-app", require("./components/OtherModMaintenanceAccountsPayable.vue"));
Vue.component("othermodmaintenanceaccountspayablesearch-app", require("./components/OtherModMaintenanceAccountsPayableSearch.vue"));
Vue.component("othermodmaintenancesubsidiaryledger-app", require("./components/OtherModMaintenanceSubsidiaryLedger.vue"));
Vue.component("othermodmaintenancesubsidiaryledgersearch-app", require("./components/OtherModMaintenanceSubsidiaryLedgerSearch.vue"));
Vue.component("othermodinquiryaccountspayable-app", require("./components/OtherModInquiryAccountsPayable.vue"));
Vue.component("othermodinquiryaccountspayablesearch-app", require("./components/OtherModInquiryAccountsPayableSearch.vue"));
Vue.component("reportsclientlisting-app", require("./components/ReportsClientListing.vue"));
Vue.component("reportsclientoverall-app", require("./components/ReportsClientOverall.vue"));
Vue.component("reportsclientsummary-app", require("./components/ReportsClientSummary.vue"));
Vue.component("reportstransactionlisting-app", require("./components/ReportsTransactionTransactionListing.vue"));
Vue.component("reportstransactioncocilisting-app", require("./components/ReportsTransactionCociListing.vue"));
Vue.component("reportsreceivableanalysis-app", require("./components/ReportsReceivableAnalysis.vue"));
Vue.component("reportsreceivableaging-app", require("./components/ReportsReceivableAging.vue"));
Vue.component("reportsreceivablecollectiona-app", require("./components/ReportsReceivableCollection.vue"));
Vue.component("reportssavingsdepositlisting-app", require("./components/ReportsSavingsDepositsListing.vue"));
Vue.component("reportssharecapitallisting-app", require("./components/ReportsShareCapitalListing.vue"));
Vue.component("reportscapitalstockcertificate-app", require("./components/ReportsCapitalStockCertificate.vue"));
Vue.component("reportstimedepositslisting-app", require("./components/ReportsTimeDepositsListing.vue"));
Vue.component("reportstimeprinting-app", require("./components/ReportsTimePrinting.vue"));
Vue.component("reportsaccountspayablelisting-app", require("./components/ReportsAccountsPayableListing.vue"));
Vue.component("reportsothersllising-app", require("./components/ReportsOtherSlListing.vue"));
Vue.component("reportsinsuranceremittancereport-app", require("./components/ReportsInsuranceRemittanceReport.vue"));
Vue.component("reportspreferredinvestmentcertificate-app", require("./components/ReportsPreferredInvestmentCertificate.vue"));
Vue.component("reportsdamayanenrollmentcertificate-app", require("./components/ReportsDamayanEnrollmentCertificate.vue"));
Vue.component("reportscisa-app", require("./components/ReportsCisa.vue"));
Vue.component("reportsfrontofficereports-app", require("./components/ReportsFrontOfficeReports.vue"));
Vue.component("reportsfinancialbalance-app", require("./components/ReportsFinancialBalance.vue"));
Vue.component("reportsfinancialincome-app", require("./components/ReportsFinancialIncome.vue"));
Vue.component("reportsfinancialtrial-app", require("./components/ReportsFinancialTrial.vue"));
Vue.component("reportsfinancialgeneral-app", require("./components/ReportsFinancialGeneral.vue"));
Vue.component("reportsfinancialgltransaction-app", require("./components/ReportsFinancialGlTransaction.vue"));
Vue.component("reportsbircompliance-app", require("./components/ReportsBirCompliance.vue"));
Vue.component("reportsmiscellaneoussldetail-app", require("./components/ReportsMiscellaneousSlDetail.vue"));
Vue.component("reportstooloverride-app", require("./components/ReportsToolOverride.vue"));
Vue.component("systemsetsystemdate-app", require("./components/SystemSetSystemDate.vue"));
Vue.component("systemdatabasemanagement-app", require("./components/SystemDatabaseManagement.vue"));
Vue.component("systemconnectionmonitor-app", require("./components/SystemConnectionMonitor.vue"));
Vue.component("systeminterestondeposits-app", require("./components/SystemInterestOnDeposits.vue"));
Vue.component("systemdividend-app", require("./components/SystemDividend.vue"));
Vue.component("systempatronage-app", require("./components/SystemPatronage.vue"));
Vue.component("systemliveupdate-app", require("./components/SystemLiveUpdate.vue"));
Vue.component("systemuseraccess-app", require("./components/SystemUserAccess.vue"));
Vue.component("systemuseraccessrightsinquiry-app", require("./components/SystemUserAccessRightsInquiry.vue"));
Vue.component("systemactivitylogs-app", require("./components/SystemActivityLogs.vue"));
Vue.component("systemloanlogs-app", require("./components/SystemLoanLogs.vue"));
Vue.component("systemloanapplication-app", require("./components/SystemLoanApplication.vue"));
Vue.component("systemuseraccessrightsinquiry-app", require("./components/SystemUserAccessRightsListing.vue"));
Vue.component("systemuseractivitylogslisting-app", require("./components/SystemUserActivityLogsListing.vue"));
Vue.component("systemtransfertolisting-app", require("./components/SystemTransferToListing.vue"));
Vue.component("systemtransferfromlisting-app", require("./components/SystemTransferFromListing.vue"));
Vue.component("systemmigratecoop-app", require("./components/SystemMigrateCoop.vue"));
Vue.component("systemmigrateholycross-app", require("./components/SystemMigrateHolyCross.vue"));
Vue.component("systemtagclients-app", require("./components/SystemTagClients.vue"));
Vue.component("systemtransferstobranch-app", require("./components/SystemTransfersToBranch.vue"));
Vue.component("systemtransfersfrombranch-app", require("./components/SystemTransfersFromBranch.vue"));
Vue.component("systemmaintenance-app", require("./components/SystemMaintenance.vue"));
Vue.component("systemdownloadtable-app", require("./components/SystemDownloadTable.vue"));
Vue.component("systemuploadtable-app", require("./components/SystemUploadTable.vue"));
Vue.component("systemoverride-app", require("./components/SystemOverride.vue"));
Vue.component("invmastersearch-app", require("./components/InvMasterSearch.vue"));
Vue.component("clientmasterlist-app", require("./components/ClientMasterList.vue"));
Vue.component("clientstatementofaccount-app", require("./components/ClientStatementOfAccount.vue"));
Vue.component("clienttransferslaccounts-app", require("./components/ClientTransferSlAccounts.vue"));
Vue.component("clientcomakertoinquiry-app", require("./components/ClientCoMakerToInquiry.vue"));
Vue.component("clientactivitylogs-app", require("./components/ClientActivityLogs.vue"));
Vue.component("clientgenerationverificationcode-app", require("./components/ClientGenerationVerificationCode.vue"));
Vue.component("clientslaccountsummary-app", require("./components/ClientSlAccountSummary.vue"));
Vue.component("playtosave-app", require("./components/PlayToSave.vue"));
Vue.component("ptsregistration-app", require("./components/P2SRegistration.vue"));
Vue.component("ptssixdigitwinner-app", require("./components/P2SSixDigitWinner.vue"));
Vue.component("ptsthreedigitwinner-app", require("./components/P2SThreeDigitWinner.vue"));
Vue.component("ptssixdigitnum-app", require("./components/P2SSixDigitNum.vue"));
Vue.component("ptsthreedigitnum-app", require("./components/P2SThreeDigitNum.vue"));
Vue.component("ptssixdigitsearch-app", require("./components/P2SSixDigitSearch.vue"));
Vue.component("ptsthreedigitsearch-app", require("./components/P2SThreeDigitSearch.vue"));
Vue.component("ptsstabs-app", require("./components/P2SStabs.vue"));
Vue.component("ptsnumberselection-app", require("./components/P2SNumberSelection.vue"));
Vue.component('ptsstabssearch-appp', require("./components/P2SStabsSearch.vue"));
Vue.component('ptsthreedigitregistration-app', require("./components/P2SThreeDigitRegistration.vue"));
Vue.component('ptsthreedigitnumberselection-app', require("./components/P2SThreeDigitNumberSelection.vue"));
Vue.component('ptsstabslist-appp', require("./components/P2SStabsList.vue"));
Vue.component('ptsstabslistsix-app', require("./components/P2SStabsListSix.vue"));
Vue.component('ptsstabsall-app', require("./components/P2SStabsAll.vue"));

const routes = [
    { name: "login", path: "/", component: Login },
    { name: "register", path: "/register", component: Register },
    { name: "home-page", path: "/home", component: HomePage },
    { name: "client", path: "/client", component: Client },
    { name: "client-search", path: "/client/search", component: ClientSearch },
    {
        name: "client-beneficiaries",
        path: "/client/:id/beneficiaries",
        component: ClientBeneficiaries
    },
    {
        name: "client-personal-references",
        path: "/client/:id/personal-references",
        component: ClientPersonalReferences
    },
    {
        name: "client-credit-bank-references",
        path: "/client/:id/credit-bank-references",
        component: ClientCreditBankReferences
    },
    {
        name: "client-joints",
        path: "/client/:id/joints",
        component: ClientJoints
    },

    {
        name: "master-list",
        path: "/client/master-list",
        component: ClientMasterList
    },

    {
        name: "statement-of-account",
        path: "/client/statement-of-account",
        component: ClientStatementOfAccount
    },

    {
        name: "transfer-sl-accounts",
        path: "/client/transfer-sl-accounts",
        component: ClientTransferSlAccounts
    },

    {
        name: "comakertoinquiry",
        path: "/client/:id/comakertoinquiry",
        component: ClientCoMakerToInquiry
    },

    {
        name: "activitylogs",
        path: "/client/:id/activitylogs",
        component: ClientActivityLogs
    },

    {
        name: "generation-verification-code",
        path: "/client/:id/generation-verification-code",
        component: ClientGenerationVerificationCode
    },

    {
        name: "sl-account-summary",
        path: "/client/:id/sl-account-summary",
        component: ClientSlAccountSummary
    },



    { path: "/client/:id", component: Client },

    { name: "front-office", path: "/front-office", component: FrontOffice },
    {
        name: "start-of-day",
        path: "/front-office/start-of-day",
        component: StartOfDay
    },
    {
        name: "passbook-print",
        path: "/front-office/passbook-printing",
        component: PassbkPrinting
    },
    {
        name: "end-of-day",
        path: "/front-office/end-of-day",
        component: EndOfDay
    },
    {
        name: "atm-gateway",
        path: "/front-office/atm-gateway",
        component: ATMGateway
    },
    {
        name: "request-server",
        path: "/front-office/request-server",
        component: RequestServer
    },
    {
        name: "ccoi-transaction",
        path: "/front-office/ccoi-transaction",
        component: CCOITransaction
    },
    {
        name: "front-office-report",
        path: "/front-office/front-office-report",
        component: FrontOfficeReport
    },
    { name: "over-ride", path: "/front-office/over-ride", component: OverRide },
    {
        name: "clearing-ac-utility",
        path: "/front-office/clearing-ac-utility",
        component: ClearingAcUtility
    },
    {
        name: "tansaction",
        path: "/front-office/transaction",
        component: Transaction
    },
    {
        name: "priority-system-display",
        path: "/front-office/priority-system-display",
        component: FOPrioritySystemDisplay
    },
    {
        name: "inquiry",
        path: "/front-office/inquiry",
        component: FOInquiry
    },
    { name: "inquiry-search", path: "/front-office/inquiry-search", component: FOInquirySearch },
    { path: "/front-office/inquiry/:trCode/:trYear/:trCtlNo/:trDocNo", component: FOInquiry },

    {
        name: "cash-transfers",
        path: "/front-office/cash-transfers",
        component: FOCashTransfers
    },
    {
        name: "cash-collection",
        path: "/front-office/cash-collection",
        component: FOCashCollection
    },
    {
        name: "bank-deposits",
        path: "/front-office/bank-deposits",
        component: FOBankDeposits
    },
    {
        name: "cash-disbursements",
        path: "/front-office/cash-disbursements",
        component: FOCashDisbursements
    },
    {
        name: "transaction-listing",
        path: "/front-office/transaction-listing",
        component: FOTransactionListing
    },
    { name: "passbk-search", path: "/front-office/passbook-printing-search", component: FOPassBkSearch },
    { path: "/front-office/passbook-printing/:id", component: PassbkPrinting },
    { path: "/front-office/passbook-printing-search/:id/passbook-printing-search-passbook", component: FOPassBkSearch },
    { path: "/front-office/passbook-printing/:brCode/:clientId/:slcCode/:sltCode/:refNo", component: PassbkPrinting },
    { name: "transaction-search", path: "/front-office/transaction-search", component: FOTransactionSearch },
    { path: "/front-office/transaction/:id", component: Transaction },
    { name: "transactionsearchtrans-app", path: "/front-office/transaction-search-trans", component: FOTransactionSearchTrans },
    { path: "/front-office/transaction/:trCode/:trYear/:trCtlNo/:trDocNo", component: Transaction },
    { name: "back-office", path: "/back-office", component: BackOffice },
    {
        name: "back-office-inquiry",
        path: "/back-office/inquiry",
        component: BackOfficeInquiry
    },
    {
        name: "back-office-fsconsolidation",
        path: "/back-office/fs-consolidation",
        component: FsConsolidation
    },
    {
        name: "back-office-generaljournal",
        path: "/back-office/generaljournal",
        component: GeneralJournal
    },
    { path: "/back-office/general-journal/:trCode/:trYear/:trCtlNo/:trDocNo", component: GeneralJournal },
    {
        name: "back-office-disbursements",
        path: "/back-office/disbursements",
        component: Disbursements
    },
    { path: "/back-office/disbursements/:trCode/:trYear/:trCtlNo/:trDocNo", component: Disbursements },
    {
        name: "back-office-disbursements-search",
        path: "/back-office/disbursements-search",
        component: DisbursementsSearch
    },
    {
        name: "back-office-upload",
        path: "/back-office/upload",
        component: Upload
    },
    {
        name: "back-office-bpr-maintenance",
        path: "/back-office/bpr-maintenance",
        component: BprMaintenance
    },
    { path: "/back-office/bpr-maintenance/:trCode/:trYear/:trCtlNo/:trDocNo", component: BprMaintenance },
    { name: "back-office-bpr-maintenance-search", path: "/back-office/bpr-maintenance-search", component: BprMaintenanceSearch },
    {
        name: "back-office-general-journal-inquiry",
        path: "/back-office/general-journal-inquiry",
        component: GeneralJournalInquiry
    },
    { path: "/back-office/general-journal-inquiry/:trCode/:trYear/:trCtlNo/:trDocNo", component: GeneralJournalInquiry },
    {
        name: "back-office-general-journal-inquiry-search",
        path: "/back-office/general-journal-inquiry-search",
        component: GeneralJournalInquirySearch
    },
    {
        name: "back-office-disbursements-inquiry",
        path: "/back-office/disbursements-inquiry",
        component: DisbursementsInquiry
    },
    {
        name: "back-office-cash-receipts-inquiry",
        path: "/back-office/cash-receipts-inquiry",
        component: CashReceiptsInquiry
    },

    {
        name: "back-office-report-generation",
        path: "/back-office/report-generation",
        component: ReportGeneration
    },
    {
        name: "back-office-balance-sheet-report",
        path: "/back-office/balance-sheet-report",
        component: BalanceSheetReport
    },
    {
        name: "back-office-income-statement-report",
        path: "/back-office/income-statement-report",
        component: IncomeStatementReport
    },
    {
        name: "back-office-trial-balance-report",
        path: "/back-office/trial-balance-report",
        component: TrialBalanceReport
    },
    {
        name: "back-offfice-general-ledger-report",
        path: "/back-office/general-ledger-report",
        component: GeneralLedgerReport
    },
    {
        name: "back-office-gl-trans-summary-report",
        path: "/back-office/gl-trans-summary-report",
        component: GlTransSummaryReport
    },
    {
        name: "back-office-general",
        path: "/back-office/general",
        component: General
    },
    {
        name: "back-office-sl-option",
        path: "/back-office/sl-option",
        component: SlOption
    },
    {
        name: "back-office-advanced",
        path: "/back-office/advanced",
        component: Advanced
    },
    {
        name: "back-office-maintenance",
        path: "/back-office/maintenance",
        component: Maintenance
    },

    { name: "back-office-inquiry-search", path: "/back-office/inquiry-search", component: BOInquirySearchPage },
    { name: "back-office-generate", path: "/back-office/generate", component: BOGenerate },
    { name: "back-office-override", path: "/back-office/override", component: BOOverride },
    { name: "back-office-general-journal", path: "/back-office/general-journal-search", component: BOGeneralJournalSearch },
    { name: "loans", path: "/loans", component: Loans },
    {
        name: "loans-app-module",
        path: "/loans/loans-application-module",
        component: LoansAppModule
    },
    { path: "/loans/loans-application-module/:id/:brCode", component: LoansAppModule },
    { path: "/loans/loans-application-module/:laclientId/:laId/loan-app", component: LoansAppModule },
    {
        name: "loans-master",
        path: "/loans/loans-master",
        component: LoansMaster
    },
    {
        name: "loans-ar-master",
        path: "/loans/loan-ar-master",
        component: LoansArMaster
    },
    { path: "/loans/loan-ar-master/:id", component: LoansArMaster },
    { path: "/loans/loan-ar-master/:id/ar-search-loan", component: LoanArSearch },
    { path: "/loans/loan-ar-master/:arBrCode/:arSlcCode/:arSltCode/:arRefNo/:clientIdAr", component: LoansArMaster },
    {
        name: "loans-master-inquiry",
        path: "/loans/loans-master-inquiry",
        component: LoansMasterInquiry
    },
    { path: "/loans/loans-master-inquiry/:id/loan-search-loan-inquiry", component: LoanSearchInquiry },
    { path: "/loans/loans-master-inquiry/:brcode/:slccode/:sltcode/:refno/:clientid", component: LoansMasterInquiry },
    {
        name: "loans-armaster-inquiry",
        path: "/loans/armaster-inquiry",
        component: LoansArMasterInquiry
    },
    { name: "loan-arsearch-inquiry", path: "/loans/loan-armaster-inquiry-search", component: LoanArSearchInquiry },
    { path: "/loans/armaster-inquiry/:id", component: LoansArMasterInquiry },
    { path: "/loans/armaster-inquiry/:id/ar-search-loan-inquiry", component: LoanArSearchInquiry },
    { path: "/loans/armaster-inquiry/:arBrCode/:arSlcCode/:arSltCode/:arRefNo/:clientIdAr", component: LoansArMasterInquiry },
    {
        name: "loans-batch-edit-setup",
        path: "/loans/batch-edit-loan-setup",
        component: LoanBatchEditSetup
    },
    { name: "loan-search", path: "/loans/loan-search", component: LoanSearch },
    { name: "loan-ar-search", path: "/loans/loan-ar-search", component: LoanArSearch },
    { name: "loan-inquiry-search", path: "/loans/loan-master-inquiry-search", component: LoanSearchInquiry },
    { path: "/loans/loans-master/:id/loan-search-loan", component: LoanSearch },
    { path: "/loans/loans-master/:id", component: LoansMaster },
    { path: "/loans/loans-master-inquiry/:id", component: LoansMasterInquiry },
    {
        path: "/loans/loans-master/:brcode/:slccode/:sltcode/:refno/:clientid",
        component: LoansMaster
    },
    { name: "loans-account-number-inquiry", path: "/loans/loans-application-module/:id/:branchCode/loans-account-number-inquiry", component: LoansAccNumInquiry },
    { path: "/loans/loans-application-module/:clientId/:brCode/:refNo/:slcCode/:sltCode", component: LoansAppModule },
    { path: "/loans/loans-master/:brcode/:slccode/:sltcode/:refno/:clientid", component: LoansMaster },
    { name: "loans-generate", path: "/loans/generate", component: LoansGenerate },
    { name: "loans-maintenance", path: "/loans/maintenance", component: LoansMaintenance },
    { name: "loans-unearned-interest", path: "/loans/unearned-interest", component: LoansUnearnedInterest },
    { name: "loans-unearned-collection-fee", path: "/loans/unearned-collection-fee", component: LoansUnearnedCollectionFee },
    { name: "loans-batch-process-maintenance", path: "/loans/batch-process-maintenance", component: LoansBatchProcessMaintenance },
    { name: "loans-amortization-sched-cal", path: "/loans/amortization-sched-cal", component: LoansAmortizationSchedCal },
    { name: "loans-aging-of-receivables", path: "/loans/aging-of-receivables", component: LoansAgingOfReceivables },
    { name: "loans-analysis-of-receivables", path: "/loans/analysis-of-receivables", component: LoansAnalysisOfReceivables },
    { name: "loans-override", path: "/loans/override", component: LoansOverride },
    { name: "loans-app-search", path: "/loans/loans-app-search", component: LoansAppSearch },

    { path: "/loans/loans-app-search/:status", component: LoansAppSearch },

    { name: "deposits", path: "/deposits", component: Deposits },
    {
        name: "deposits-savings-deposit",
        path: "/deposits/savings-deposit",
        component: SavingsDeposit
    },
    {
        name: "deposits-time-deposit",
        path: "/deposits/time-deposit",
        component: TimeDeposit
    },
    {
        name: "deposits-share-capital",
        path: "/deposits/share-capital",
        component: ShareCapital
    },
    { name: "deposits-share-capital-search", path: "/deposits/share-capital-search", component: DepositsShareCapitalSearch },
    { path: "/deposits/share-capital/:id", component: ShareCapital },
    { path: "/deposits/share-capital-search/:id/share-capital-search-deposit", component: DepositsShareCapitalSearch },
    { path: "/deposits/share-capital/:scBrCode/:scSlcCode/:scSltCode/:scRefNo/:clientIdSc", component: ShareCapital },
    {
        name: "deposits-inquiry-savings",
        path: "/deposits/inquiry-savings",
        component: InquirySavings
    },
    { path: "/deposits/inquiry-savings/:id", component: InquirySavings },
    { path: "/deposits/sdsearch/:id/inquiry-savings-search", component: DepositsInquirySavingsSearch },
    { path: "/deposits/inquiry-savings/:sdBrCode/:sdSlcCode/:sdSltCode/:sdRefNo/:clientIdSd", component: InquirySavings },


    { name: "inquiry-time-search", path: "/deposits/inquiry-time-search", component: DepositsInquiryTimeSearch },
    { path: "/deposits/inquiry-time/:id", component: InquiryTime },
    { path: "/deposits/tdsearch/:id/inquiry-time-search", component: DepositsInquiryTimeSearch },
    { path: "/deposits/inquiry-time/:tdBrCode/:tdSlcCode/:tdSltCode/:tdRefNo/:clientIdTd", component: InquiryTime },
    {
        name: "deposits-inquiry-time",
        path: "/deposits/inquiry-time",
        component: InquiryTime
    },
    { name: "deposits-inquiry-share-search", path: "/deposits/inquiry-share-search", component: DepositsInquiryShareSearch },
    { path: "/deposits/inquiry-share/:id", component: InquiryShare },
    { path: "/deposits/inquiry-share-search/:id/inquiry-share-search-deposit", component: DepositsInquiryShareSearch },
    { path: "/deposits/inquiry-share/:scBrCode/:scSlcCode/:scSltCode/:scRefNo/:clientIdSc", component: InquiryShare },

    { name: "deposits-inquiry-dividend-search", path: "/deposits/inquiry-dividend-search", component: DepositsInquiryDividendSearch },
    { path: "/deposits/inquiry-dividend/:id", component: InquiryDividend },
    { path: "/deposits/inquiry-dividend-search/:id/inquiry-dividend-search-deposit", component: DepositsInquiryDividendSearch },
    { path: "/deposits/inquiry-dividend/:trCode/:trYear/:trCtlNo/:trDocNo", component: InquiryDividend },

    { name: "deposits-inquiry-patronage-search", path: "/deposits/inquiry-patronage-search", component: DepositsInquiryPatronageSearch },
    { path: "/deposits/inquiry-patronage/:id", component: InquiryPatronage },
    { path: "/deposits/inquiry-patronage-search/:id/inquiry-patronage-search-deposit", component: DepositsInquiryPatronageSearch },

    { name: "deposits-inquiry-interest-search", path: "/deposits/inquiry-interest-search", component: DepositsInquiryInterestSearch },
    { path: "/deposits/inquiry-interest/:id", component: InquiryInterest },
    { path: "/deposits/inquiry-interest-search/:id/inquiry-interest-search-deposit", component: DepositsInquiryInterestSearch },
    { path: "/deposits/inquiry-interest/:trCode/:trYear/:trCtlNo/:trDocNo", component: InquiryInterest },
    { path: "/deposits/inquiry-patronage/:trCode/:trYear/:trCtlNo/:trDocNo", component: InquiryPatronage },
    { path: "/deposits/time-maintenance/:trCode/:trYear/:trCtlNo/:trDocNo", component: DepositsTimeMaintenance },
    { path: "/deposits/int-maintenance/:trCode/:trYear/:trCtlNo/:trDocNo", component: DepositsIntMaintenance },
    { path: "/deposits/accr-maintenance/:trCode/:trYear/:trCtlNo/:trDocNo", component: DepositsTimeMaintenance },



    {
        name: "deposits-inquiry-share",
        path: "/deposits/inquiry-share",
        component: InquiryShare
    },
    {
        name: "deposits-inquiry-dividend",
        path: "/deposits/inquiry-dividend",
        component: InquiryDividend
    },
    {
        name: "deposits-inquiry-patronage",
        path: "/deposits/inquiry-patronage",
        component: InquiryPatronage
    },
    {
        name: "deposits-inquiry-interest",
        path: "/deposits/inquiry-interest",
        component: InquiryInterest
    },
    {
        name: "deposits-dormancy-tagging",
        path: "/deposits/dormancy-tagging",
        component: DepositsDormancy
    },
    {
        name: "deposits-member-generate",
        path: "/deposits/member-generate",
        component: DepositsMemberGenerate
    },
    {
        name: "deposits-member-maintenance",
        path: "/deposits/member-maintenance",
        component: DepositsMemberMaintenance
    },
    {
        name: "deposits-avg-generate",
        path: "/deposits/avg-generate",
        component: DepositsShareCapitalGenerate
    },
    {
        name: "deposits-share-capital-control",
        path: "/deposits/share-capital-control",
        component: DepositsShareCapitalControl
    },
    {
        name: "deposits-compute",
        path: "/deposits/compute",
        component: DepositsCompute
    },
    {
        name: "deposits-journalize",
        path: "/deposits/journalize",
        component: DepositsJournalize
    },
    {
        name: "deposits-maintenance-dividend",
        path: "/deposits/maintenance-dividend",
        component: DepositsMaintenanceDividend
    },
    {
        name: "deposits-maintenance-patronage",
        path: "/deposits/maintenance-patronage",
        component: DepositsMaintenancePatronage
    },
    {
        name: "deposits-maintenance-special",
        path: "/deposits/maintenance-special",
        component: DepositsMaintenanceSpecial
    },
    {
        name: "deposits-int-generate",
        path: "/deposits/int-generate",
        component: DepositsIntGenerate
    },
    {
        name: "deposits-int-maintenance",
        path: "/deposits/int-maintenance",
        component: DepositsIntMaintenance
    },
    {
        name: "deposits-int-maintenance-search",
        path: "/deposits/int-maintenance-search",
        component: DepositsIntMaintenanceSearch
    },
    {
        name: "deposits-accr-generate",
        path: "/deposits/accr-generate",
        component: DepositsAccrGenerate
    },
    {
        name: "deposits-accr-maintenance",
        path: "/deposits/accr-maintenance",
        component: DepositsAccrMaintenance
    },
    {
        name: "deposits-accr-maintenance-search",
        path: "/deposits/accr-maintenance-search",
        component: DepositsAccrMaintenanceSearch
    },
    {
        name: "deposits-time-generate",
        path: "/deposits/time-generate",
        component: DepositsTimeGenerate
    },
    {
        name: "deposits-time-maintenance",
        path: "/deposits/time-maintenance",
        component: DepositsTimeMaintenance
    },
    {
        name: "deposits-time-maintenance-search",
        path: "/deposits/time-maintenance-search",
        component: DepositsTimeMaintenanceSearch
    },
    {
        name: "deposits-savings-listing",
        path: "/deposits/savings-listing",
        component: DepositsSavingsListing
    },
    {
        name: "deposits-time-listing",
        path: "/deposits/time-listing",
        component: DepositsTimeListing
    },
    {
        name: "deposits-share-capital-listing",
        path: "/deposits/share-capital-listing",
        component: DepositsShareCapitalListing
    },
    {
        name: "deposits-time-certificate",
        path: "/deposits/time-certificate",
        component: DepositsTimeCertificate
    },

    {
        name: "deposits-compounding-interest",
        path: "/deposits/compounding-interest",
        component: DepositsCompoundingInterest
    },

    {
        name: "deposits-override",
        path: "/deposits/override",
        component: DepositsOverride
    },

    {
        name: "deposits-savings-deposit-search",
        path: "/deposits/savings-deposit-search",
        component: DepositsSavingsDepositSearchPage
    },

    {
        path: "/deposits/sdsearch/:id/savings-deposit-search",
        component: DepositsSavingsDepositSearchPage
    },

    {
        path: "/deposits/savings-deposit/:id",
        component: SavingsDeposit
    },

    {
        path: "/deposits/savings-deposit/:sdBrCode/:sdSlcCode/:sdSltCode/:sdRefNo/:clientIdSd",
        component: SavingsDeposit
    },

    {
        path: "/deposits/tdsearch/:id/time-deposit-search",
        component: DepositsTimeDepositSearchPage
    },

    {
        name: "time-deposit-search",
        path: "/deposits/time-deposit-search",
        component: DepositsTimeDepositSearchPage
    },

    {
        path: "/deposits/time-deposit/:id",
        component: TimeDeposit
    },

    {
        path: "/deposits/time-deposit/:tdBrCode/:tdSlcCode/:tdSltCode/:tdRefNo/:clientIdTd",
        component: TimeDeposit
    },

    {
        name: "inquiry-savings-search",
        path: "/deposits/inquiry-savings-search",
        component: DepositsInquirySavingsSearch
    },
    {
        path: "/deposits/sdsearch/:id/savings-deposit-search",
        component: DepositsSavingsDepositSearchPage
    },

    {
        name: "inquiry-share-search",
        path: "/deposits/inquiry-share-search",
        component: DepositsInquiryShareSearch
    },

    {
        name: "inquiry-dividend-search",
        path: "/deposits/inquiry-dividend-search",
        component: DepositsInquiryDividendSearch
    },

    {
        name: "inquiry-patronage-search",
        path: "/deposits/inquiry-patronage-search",
        component: DepositsInquiryPatronageSearch
    },

    {
        name: "inquiry-interest-search",
        path: "/deposits/inquiry-interest-search",
        component: DepositsInquiryInterestSearch
    },

    {
        name: "maintenance-dividend-search",
        path: "/deposits/maintenance-dividend-search",
        component: DepositsMaintenanceDividendSearch
    },

    {
        name: "maintenance-patronage-search",
        path: "/deposits/maintenance-patronage-search",
        component: DepositsMaintenancePatronageSearch
    },

    {
        name: "maintenance-special-search",
        path: "/deposits/maintenance-special-search",
        component: DepositsMaintenanceSpecialSearch
    },

    {
        path: "/deposits/inquiry-savings/:id",
        component: InquirySavings
    },
    {
        path: "/deposits/sdsearch/:id/inquiry-savings-search",
        component: DepositsInquirySavingsSearch
    },
    { name: "inventory", path: "/inventory", component: Inventory },
    {
        name: "items-master",
        path: "/inventory/items-master",
        component: InvItemsMaster
    },
    {
        name: "items-inquiry",
        path: "/inventory/items-inquiry",
        component: InvItemsInquiry
    },
    {
        name: "items-listing",
        path: "/inventory/items-listing",
        component: InvItemsListing
    },
    {
        name: "vendors-master",
        path: "/inventory/vendors-master",
        component: InvVendorsMaster
    },
    {
        name: "vendors-inquiry",
        path: "/inventory/vendors-inquiry",
        component: InvVendorsInquiry
    },
    {
        name: "vendors-listing",
        path: "/inventory/vendors-listing",
        component: InvVendorsListing
    },
    {
        name: "purchase-master",
        path: "/inventory/purchase-master",
        component: InvPurchaseMaster
    },
    {
        name: "purchase-inquiry",
        path: "/inventory/purchase-inquiry",
        component: InvPurchaseInquiry
    },
    {
        name: "purchase-listing",
        path: "/inventory/purchase-listing",
        component: InvPurchaseListing
    },
    {
        name: "physical-master",
        path: "/inventory/physical-master",
        component: InvPhysicalMaster
    },
    {
        name: "physical-inquiry",
        path: "/inventory/physical-inquiry",
        component: InvPhysicalInquiry
    },
    {
        name: "physical-listing",
        path: "/inventory/physical-listing",
        component: InvPhysicalListing
    },
    {
        name: "stocks-master",
        path: "/inventory/stocks-master",
        component: InvStocksMaster
    },
    {
        name: "stocks-inquiry",
        path: "/inventory/stocks-inquiry",
        component: InvStocksInquiry
    },
    {
        name: "stocks-listing",
        path: "/inventory/stocks-listing",
        component: InvStocksListing
    },
    {
        name: "inventory-payment",
        path: "/inventory/inventory-payment",
        component: InvInventoryPayment
    },
    {
        name: "inventory-item",
        path: "/inventory/inventory-item",
        component: InvInventoryItem
    },
    {
        name: "receiving-voucher",
        path: "/inventory/receiving-voucher",
        component: InvReceivingVoucher
    },
    {
        name: "receiving-vinquiry",
        path: "/inventory/receiving-vinquiry",
        component: InvReceivingVinquiry
    },


    { name: "inv-override", path: "/inventory/override", component: InvOverride },
    { name: "inv-transaction", path: "/inventory/transaction", component: InvTransaction },
    { name: "inv-brand-master", path: "/inventory/brand-master", component: InvBrandMaster },
    { name: "inv-common-name-master", path: "/inventory/common-master", component: InvCommonNameMaster },
    { name: "inv-item-class-master", path: "/inventory/item-class-master", component: InvItemClassMaster },
    { name: "inv-item-sub-master", path: "/inventory/item-sub-master", component: InvItemSubMaster },
    { name: "inv-item-unit-master", path: "/inventory/item-unit-master", component: InvItemUnitMaster },
    { name: "inv-item-location-master", path: "/inventory/item-location-master", component: InvItemLocationMaster },
    { name: "inv-points-master", path: "/inventory/points-master", component: InvPointsMaster },
    { name: "inv-master-search", path: "/inventory/inv-master-search", component: InvMasterSearch },
    { path: "/inventory/items-master/:id", component: InvItemsMaster },

    { name: "other-mod", path: "/other-mod", component: OtherMod },
    { name: "set-up", path: "/setup", component: Setup },

    {
        name: "other-mod-maintenance-accounts-payable",
        path: "/other-mod/maintenance-accounts-payable",
        component: OtherModMaintenanceAccountsPayable
    },
    { path: "/other-mod/maintenance-accounts-payable/:id", component: OtherModMaintenanceAccountsPayable },
    { path: "/other-mod/apsearch/:id/maintenance-ap-search", component: OtherModMaintenanceAccountsPayableSearch },
    { path: "/other-mod/maintenance-accounts-payable/:apBrCode/:apSlcCode/:apSltCode/:apRefNo/:clientIdAp", component: OtherModMaintenanceAccountsPayable },
    {
        name: "other-mod-maintenance-ap-search",
        path: "/other-mod/maintenance-ap-search",
        component: OtherModMaintenanceAccountsPayableSearch
    },
    {
        name: "other-mod-maintenance-subsidiary-ledger",
        path: "/other-mod/maintenance-subsidiary-ledger",
        component: OtherModMaintenanceSubsidiaryLedger
    },
    { path: "/other-mod/maintenance-subsidiary-ledger/:id", component: OtherModMaintenanceSubsidiaryLedger },
    { path: "/other-mod/oslsearch/:id/maintenance-sl-search", component: OtherModMaintenanceSubsidiaryLedgerSearch },
    { path: "/other-mod/maintenance-subsidiary-ledger/:oslBrCode/:oslSlcCode/:oslSltCode/:oslRefNo/:clientIdOsl", component: OtherModMaintenanceSubsidiaryLedger },
    {
        name: "other-mod-maintenance-sl-search",
        path: "/other-mod/maintenance-sl-search",
        component: OtherModMaintenanceSubsidiaryLedgerSearch
    },
    {
        name: "other-mod-inquiry-accounts-payable",
        path: "/other-mod/inquiry-accounts-payable",
        component: OtherModInquiryAccountsPayable
    },
    { path: "/other-mod/inquiry-accounts-payable/:id", component: OtherModInquiryAccountsPayable },
    { path: "/other-mod/apsearch/:id/inquiry-ap-search", component: OtherModInquiryAccountsPayableSearch },
    { path: "/other-mod/inquiry-accounts-payable/:apBrCode/:apSlcCode/:apSltCode/:apRefNo/:clientIdAp", component: OtherModInquiryAccountsPayable },
    {
        name: "other-mod-inquiry-ap-search",
        path: "/other-mod/inquiry-ap-search",
        component: OtherModInquiryAccountsPayableSearch
    },
    {
        name: "other-mod-inquiry-subsidiary-ledger",
        path: "/other-mod/inquiry-subsidiary-ledger",
        component: OtherModInquirySubsidiaryLedger
    },
    { path: "/other-mod/inquiry-subsidiary-ledger/:id", component: OtherModInquirySubsidiaryLedger },
    { path: "/other-mod/oslsearch/:id/inquiry-sl-search", component: OtherModInquirySubsidiaryLedgerSearch },
    { path: "/other-mod/inquiry-subsidiary-ledger/:oslBrCode/:oslSlcCode/:oslSltCode/:oslRefNo/:clientIdOsl", component: OtherModInquirySubsidiaryLedger },
    {
        name: "other-mod-inquiry-sl-search",
        path: "/other-mod/inquiry-sl-search",
        component: OtherModInquirySubsidiaryLedgerSearch
    },
    {
        name: "other-mod-st-others-computation",
        path: "/other-mod/st-others-computation",
        component: OtherModSTOthersComputation
    },
    {
        name: "other-mod-st-payroll-computation",
        path: "/other-mod/st-payroll-computation",
        component: OtherModSTPayrollComputation
    },
    {
        name: "other-mod-st-maintenance",
        path: "/other-mod/st-maintenance",
        component: OtherModSTMaintenance
    },
    {
        name: "other-mod-st-setup-annual",
        path: "/other-mod/st-setup-annual",
        component: OtherModSTSetupAnnual
    },
    {
        name: "report-ap-listing",
        path: "/other-mod/report-ap-listing",
        component: OtherModReportAPListing
    },
    {
        name: "other-al-listing",
        path: "/other-mod/other-al-listing",
        component: OtherALListing
    },

    {
        name: "other-mod-report-true-al-listing",
        path: "/other-mod/other-al-listing",
        component: OtherALListing
    },

    {
        name: "other-mod-tools",
        path: "/other-mod/tools",
        component: OtherModTools
    },

    {
        name: "chart-of-account",
        path: "/setup/chart-of-accounts",
        component: SetupChartOfAccounts
    },
    {
        name: "conso-chart-of-accounts",
        path: "/setup/conso-chart-of-accounts",
        component: SetupConsoChartOfAccounts
    },
    {
        name: "departments",
        path: "/setup/departments",
        component: SetupDepartments
    },
    {
        name: "bank-code-table",
        path: "/setup/bank-code-table",
        component: SetupBankCodeTable
    },
    {
        name: "collectors",
        path: "/setup/collectors",
        component: SetupCollectors
    },
    {
        name: "deduction-group",
        path: "/setup/deduction-group",
        component: SetupDeductionGroup
    },
    {
        name: "code-storage",
        path: "/setup/code-storage",
        component: SetupCodeStorage
    },
    {
        name: "holidays",
        path: "/setup/holidays",
        component: SetupHolidays
    },
    {
        name: "initialize-connections",
        path: "/setup/initialize-connections",
        component: SetupInitializeConnections
    },
    {
        name: "override",
        path: "/setup/override",
        component: SetupOverride
    },

    {
        name: "subsidiary-ledger-sl-types",
        path: "/setup/subsidiary-ledger-sl-types",
        component: SetupSubsidiaryLedgerSLTypes
    },

    {
        name: "account-group-sectoral",
        path: "/setup/account-group-sectoral",
        component: SetupAccountGroupSectoral
    },

    {
        name: "account-group-occupational",
        path: "/setup/account-group-occupational",
        component: SetupAccountGroupOccupational
    },

    {
        name: "account-group-geo",
        path: "/setup/account-group-geo",
        component: SetupAccountGroupGeo
    },
    { name: "account-group-geo-search", path: "/setup/account-group-geo-search", component: SetupAccountGroupGeoSearch },
    { path: "/setup/account-group-geo/:geoId/:geoBrCode", component: SetupAccountGroupGeo },
    {
        name: "account-group-empcode",
        path: "/setup/account-group-empcode",
        component: SetupAccountGroupEmpCode
    },

    {
        name: "account-group-educ-school",
        path: "/setup/account-group-educ-school",
        component: SetupAccountGroupEducSchool
    },

    {
        name: "account-group-educ-section",
        path: "/setup/account-group-educ-section",
        component: SetupAccountGroupEducSection
    },

    {
        name: "account-group-restriction",
        path: "/setup/account-group-restriction",
        component: SetupAccountGroupRestriction
    },

    {
        name: "loan-loan-purpose-table",
        path: "/setup/loan-loan-purpose-table",
        component: SetupLoanLoanPurposeTable
    },

    {
        name: "industry-section",
        path: "/setup/industry-section",
        component: SetupIndSection
    },

    {
        name: "industry-division",
        path: "/setup/industry-division",
        component: SetupIndDivision
    },

    {
        name: "industry-industry-code",
        path: "/setup/industry-industry-code",
        component: SetupIndIndustryCode
    },


    {
        name: "industry-time-deposit-rate",
        path: "/setup/time-deposit-rate",
        component: SetupTimeDepositRate
    },



    {
        name: "industry-email-settings",
        path: "/setup/email-settings",
        component: SetupEmailSettings
    },



    {
        name: "industry-priority-object",
        path: "/setup/priority-object",
        component: SetupPriorityObject
    },



    {
        name: "industry-queuing-settings",
        path: "/setup/queuing-settings",
        component: SetupQueuingSettings
    },

    {
        name: "industry-cluster-setup",
        path: "/setup/cluster-setup-cluster",
        component: SetupClusterSetup
    },

    {
        name: "industry-sharecapital-pricestock",
        path: "/setup/sharecapital-pricestock",
        component: SetupShareCapitalPriceStock
    },

    { name: "system", path: "/system", component: System },
    {
        name: "environment-branch-information",
        path: "/system/environment-branch-information",
        component: SystemMaintenanceEnvironmentBranchInformation
    },
    {
        name: "environment-workstation-parameters",
        path: "/system/environment-workstation-parameters",
        component: SystemMaintenanceEnvironmentWorkstationParameters
    },

    { name: "set-system-date", path: "/system/set-system-date", component: SystemSetSystemDate },

    { name: "database-management", path: "/system/database-management", component: SystemDatabaseManagement },

    { name: "connection-monitor", path: "/system/connection-monitor", component: SystemConnectionMonitor },

    { name: "interest-on-deposits", path: "/system/interest-on-deposits", component: SystemInterestOnDeposits },

    { name: "dividend", path: "/system/dividend", component: SystemDividend },

    { name: "patronage", path: "/system/patronage", component: SystemPatronage },

    { name: "live-update", path: "/system/live-update", component: SystemLiveUpdate },

    { name: "user-access", path: "/system/user-access", component: SystemUserAccess },

    { name: "user-access-rights-inquiry", path: "/system/user-access-rights-inquiry", component: SystemUserAccessRightsInquiry },

    { name: "activity-logs", path: "/system/activity-logs", component: SystemActivityLogs },

    { name: "loan-logs", path: "/system/loan-logs", component: SystemLoanLogs },

    { name: "loan-application", path: "/system/loan-application", component: SystemLoanApplication },

    { name: "user-access-rights-listing", path: "/system/user-access-rights-listing", component: SystemUserAccessRightsListing },

    { name: "user-activity-logs-listing", path: "/system/user-activity-logs-listing", component: SystemUserActivityLogsListing },

    { name: "transfer-to-listing", path: "/system/transfer-to-listing", component: SystemTransferToListing },

    { name: "transfer-from-listing", path: "/system/transfer-from-listing", component: SystemTransferFromListing },

    { name: "migrate-coop", path: "/system/migrate-coop", component: SystemMigrateCoop },

    { name: "migrate-holy-cross", path: "/system/migrate-holy-cross", component: SystemMigrateHolyCross },

    { name: "tag-clients", path: "/system/tag-clients", component: SystemTagClients },

    { name: "transfers-to-branch", path: "/system/transfers-to-branch", component: SystemTransfersToBranch },

    { name: "transfers-from-branch", path: "/system/transfers-from-branch", component: SystemTransfersFromBranch },

    { name: "maintenance", path: "/system/maintenance", component: SystemMaintenance },

    { name: "download-table", path: "/system/download-table", component: SystemDownloadTable },

    { name: "upload-table", path: "/system/upload-table", component: SystemUploadTable },

    { name: "system-override", path: "/system/override", component: SystemOverride },


    { name: "reports", path: "/reports", component: Reports },

    { name: "client-listing", path: "/reports/client-listing", component: ReportsClientListing },

    { name: "client-overall", path: "/reports/client-overall", component: ReportsClientOverall },

    { name: "client-summary", path: "/reports/client-summary", component: ReportsClientSummary },

    { name: "transaction-transaction-listing", path: "/reports/transaction-transaction-listing", component: ReportsTransactionTransactionListing },

    { name: "transaction-coci-listing", path: "/reports/transaction-coci-listing", component: ReportsTransactionCociListing },

    { name: "receivable-analysis", path: "/reports/receivable-analysis", component: ReportsReceivableAnalysis },

    { name: "receivable-aging", path: "/reports/receivable-aging", component: ReportsReceivableAging },

    { name: "receivable-collection", path: "/reports/receivable-collection", component: ReportsReceivableCollection },

    { name: "savings-deposits-listing", path: "/reports/savings-deposits-listing", component: ReportsSavingsDepositsListing },

    { name: "share-capital-listing", path: "/reports/share-capital-listing", component: ReportsShareCapitalListing },

    { name: "capital-stock-certificate", path: "/reports/capital-stock-certificate", component: ReportsCapitalStockCertificate },

    { name: "time-deposits-listing", path: "/reports/time-deposits-listing", component: ReportsTimeDepositsListing },

    { name: "time-printing", path: "/reports/time-printing", component: ReportsTimePrinting },

    { name: "accounting-payable-listing", path: "/reports/accounts-payable-listing", component: ReportsAccountsPayableListing },

    { name: "other-sl-listing", path: "/reports/other-sl-listing", component: ReportsOtherSlListing },

    { name: "insurance-remittance-report", path: "/reports/insurance-remittance-report", component: ReportsInsuranceRemittanceReport },

    { name: "preferred-investment-certificate", path: "/reports/preferred-investment-certificate", component: ReportsPreferredInvestmentCertificate },

    { name: "damayan-enrollment-certificate", path: "/reports/damayan-enrollment-certificate", component: ReportsDamayanEnrollmentCertificate },

    { name: "cisa", path: "/reports/cisa", component: ReportsCisa },

    { name: "front-office-reports", path: "/reports/front-office-reports", component: ReportsFrontOfficeReports },

    { name: "financial-balance", path: "/reports/financial-balance", component: ReportsFinancialBalance },

    { name: "financial-income", path: "/reports/financial-income", component: ReportsFinancialIncome },

    { name: "financial-trial", path: "/reports/financial-trial", component: ReportsFinancialTrial },

    { name: "financial-general", path: "/reports/financial-general", component: ReportsFinancialGeneral },

    { name: "financial-gl-transaction", path: "/reports/financial-gl-transaction", component: ReportsFinancialGlTransaction },

    { name: "bir-compliance", path: "/reports/bir-compliance", component: ReportsBirCompliance },

    { name: "miscellaneous-sl-detail", path: "/reports/miscellaneous-sl-detail", component: ReportsMiscellaneousSlDetail },

    { name: "tool-override", path: "/reports/tool-override", component: ReportsToolOverride },
    { name: "play-to-save", path: "/play-to-save", component: PlayToSave },
    { name: "play-to-save-registration", path: "/play-to-save/p2s-six-digit-registration", component: PlayToSaveRegistration },
    { name: "play-to-save-sixdigit-winner", path: "/play-to-save/p2s-sixdigit-winner", component: PlayToSaveSixDigitWinner },
    { name: "play-to-save-threedigit-winner", path: "/play-to-save/p2s-threedigit-winner", component: PlayToSaveThreeDigitWinner },
    { name: "play-to-save-sixdigit-num", path: "/play-to-save/p2s-sixdigit-num", component: PlayToSaveSixDigitNum },
    { name: "play-to-save-threedigit-num", path: "/play-to-save/p2s-threedigit-num", component: PlayToSaveThreeDigitNum },
    { name: "play-to-save-sixdigit-search", path: "/play-to-save/p2s-sixdigit-search", component: PlaytoSaveSixDigitSearch },
    { name: "play-to-save-threedigit-search", path: "/play-to-save/p2s-threedigit-search", component: PlayToSaveThreeDigitSearch },
    { path: "/play-to-save/p2s-sixdigit-winner/:id/:sixdigit", component: PlayToSaveSixDigitWinner },
    { path: "/play-to-save/p2s-threedigit-winner/:id/:threedigit", component: PlayToSaveThreeDigitWinner },
    { name: "play-to-save-stabs", path: "/play-to-save/p2s-stabs", component: PlayToSaveStabs },
    { name: "play-to-save-number-selection", path: "/play-to-save/p2s-number-selection", component: PlayToSaveNumberSelection },
    { name: "play-to-save-stabs", path: "/play-to-save/p2s-stabs", component: PlayToSaveStabs },
    { name: "play-to-save-stabs-search", path: "/play-to-save/p2s-stabs-search", component: PlayToSaveStabsSearch },
    { name: "play-to-save-three-digit-registration", path: "/play-to-save/p2s-three-digit-registration", component: PlayToSaveThreeDigitRegistration },
    { name: "play-to-save-three-digit-number-selection", path: "/play-to-save/p2s-three-digit-number-selection", component: PlayToSaveThreeDigitNumberSelection },
    { name: "play-to-save-stabs-list", path: "/play-to-save/p2s-stabs-list/:id/:clientid", component: PlayToSaveStabsList },
    { path: "/play-to-save/p2s-three-digit-number-selection/:id/:branch/:serial/:trId/:clientid", component: PlayToSaveThreeDigitNumberSelection },
    { name: "play-to-save-stabs-list-six", path: "/play-to-save/p2s-stabs-list-six/:id/:clientid", component: PlayToSaveStabsListSix },
    { path: "/play-to-save/p2s-number-selection/:id/:branch/:serial/:trId/:clientid", component: PlayToSaveNumberSelection },
    { name: "play-to-save-stabs-all", path: "/play-to-save/p2s-stabs-all", component: PlayToSaveStabsAll },
];

const router = new VueRouter({
    mode: "history",
    routes
});

const app = new Vue({
    el: "#app",
    components: { Home },
    router
});
