<template>
  <div class="reports">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto" style="float:left;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Data Masters</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;"
          >
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Client Master
              <div class="dropdown-menu" style="left: 338px; top:0px">
                <router-link to="/reports/client-listing" class="dropdown-item">Listing</router-link>
                <router-link
                  to="/reports/client-overall"
                  class="dropdown-item"
                >Overall Members Listing</router-link>
                <router-link
                  to="/reports/client-summary"
                  class="dropdown-item"
                >Summary of Closed Accounts</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Transaction
              <div class="dropdown-menu" style="left: 338px; top:32px">
                <router-link
                  to="/reports/transaction-transaction-listing"
                  class="dropdown-item"
                >Transaction Listing</router-link>
                <router-link
                  to="/reports/transaction-coci-listing"
                  class="dropdown-item"
                >COCI Listing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Receivables
              <div class="dropdown-menu" style="left: 338px; top:60px">
                <router-link
                  to="/reports/receivable-analysis"
                  class="dropdown-item"
                >Analysis of Receivables</router-link>
                <router-link
                  to="/reports/receivable-aging"
                  class="dropdown-item"
                >Aging of Receivables</router-link>
                <router-link
                  to="/reports/receivable-collection"
                  class="dropdown-item"
                >Collection of Efficieny</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Savings Deposits
              <div class="dropdown-menu" style="left: 338px; top:90px">
                <router-link to="/reports/savings-deposits-listing" class="dropdown-item">Listing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Share Capital
              <div class="dropdown-menu" style="left: 338px; top:118px">
                <router-link to="/reports/share-capital-listing" class="dropdown-item">Listing</router-link>
                <router-link
                  to="/reports/capital-stock-certificate"
                  class="dropdown-item"
                >Capital Stock Certificate</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Time Deposits
              <div class="dropdown-menu" style="left: 338px; top:145px">
                <router-link to="/reports/time-deposits-listing" class="dropdown-item">Listing</router-link>
                <router-link
                  to="/reports/time-printing"
                  class="dropdown-item"
                >Time Deposit Certificate Printing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Accounts Payable(AP)
              <div class="dropdown-menu" style="left: 338px; top:174px">
                <router-link to="/reports/accounts-payable-listing" class="dropdown-item">Listing</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Other SL
              <div class="dropdown-menu" style="left: 338px; top:202px">
                <router-link to="/reports/other-sl-listing" class="dropdown-item">Listing</router-link>
                <router-link
                  to="/reports/insurance-remittance-report"
                  class="dropdown-item"
                >Insurance Remittance Report</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Certificate Printing
              <div class="dropdown-menu" style="left: 338px; top:228px">
                <router-link
                  to="/reports/preferred-investment-certificate"
                  class="dropdown-item"
                >Preferred Investment Certificate</router-link>
                <router-link
                  to="/reports/damayan-enrollment-certificate"
                  class="dropdown-item"
                >DAMAYAN Enrollment Certificate</router-link>
              </div>
            </div>
            <router-link to="/reports/cisa" class="dropdown-item">CISA</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Front Office</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 117px; min-width: 200px; font-size: 13px;"
          >
            <router-link
              to="/reports/front-office-reports"
              class="dropdown-item"
            >Front Office Rights</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Financial Statements</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 223px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/reports/financial-balance" class="dropdown-item">Balance Sheet</router-link>
            <router-link to="/reports/financial-income" class="dropdown-item">Income Statement</router-link>
            <router-link to="/reports/financial-trial" class="dropdown-item">Trial Balance</router-link>
            <router-link to="/reports/financial-general" class="dropdown-item">General Ledger</router-link>
            <router-link
              to="/reports/financial-gl-transaction"
              class="dropdown-item"
            >G/L Transaction Summary</router-link>
            <router-link to="/reports/bir-compliance" class="dropdown-item">BIR Compliance Reports</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Miscellaneous</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 386px; min-width: 340px; font-size: 13px;"
          >
            <router-link
              to="/reports/miscellaneous-sl-detail"
              class="dropdown-item"
            >S/L Details By Ref</router-link>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 5px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/reports/tool-override" class="dropdown-item">Override</router-link>
          </div>
        </li>
        <li class="nav-item">
          <router-link to class="nav-link">Main Menu</router-link>
        </li>
        <li class="nav-item">
          <router-link to class="nav-link">Policy</router-link>
        </li>
        <li class="nav-item">
          <router-link to class="nav-link">Help</router-link>
        </li>
      </ul>
    </nav>

    <div class="bg-home w-100 h-100 d-flex justify-content-center">
      <h1 class="display-1 text-white mb-0 text-center">
        <p style="font-size: 2.488rem;" class="font-weight-normal mb-2">Welcome to</p>KoopCAS 3.0
      </h1>
    </div>
  </div>
</template>

<style>
.reports {
  text-align: center;
  width: 100%;
  height: 541px;
  border: 1px solid #fff;
}
.dropdown-item:hover > .dropdown-menu {
  display: block;
}
</style>