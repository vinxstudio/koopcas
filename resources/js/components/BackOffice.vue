<template>
  <div class="backoffice">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto" style="float: left;">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Chart of Accounts</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/back-office/inquiry" class="dropdown-item">Inquiry</router-link>
            <div class="dropdown-item">FS Consolidation
            <!-- <div class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">FS Consolidation -->
              <!-- <div class="dropdown-menu" style="left: 338px; top: 45px;">
                 <router-link to="#" class="dropdown-item">Update COA Conso</router-link>
                <router-link to="#" class="dropdown-item">Extract Conso Chart of Accounts</router-link>
                <router-link to="#" class="dropdown-item">Upload Conso Chart of Accounts</router-link>
                <router-link
                  to="/back-office/fs-consolidation"
                  class="dropdown-item"
                >Extract Data for CONSO</router-link>
                <router-link to="#" class="dropdown-item">Upload Data to CONSO</router-link> 
              </div> -->
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a
            href="#"
            class="nav-link dropdown-toggle"
            data-toggle="dropdown"
          >Transaction Maintenance</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/back-office/generaljournal" class="dropdown-item">General Journal</router-link>
            <router-link to="/back-office/disbursements" class="dropdown-item">Disbursements</router-link>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Bill Payment Record
              <div
                class="dropdown-menu"
                aria-labelledby="dropdownmenu"
                style="left: 338px; top: 50px;"
              >
                <router-link to="/back-office/upload" class="dropdown-item">Upload</router-link>
                <router-link to="/back-office/bpr-maintenance" class="dropdown-item">Maintenance</router-link>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Transaction Inquiry</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <router-link
              to="/back-office/general-journal-inquiry"
              class="dropdown-item"
            >General Journal Inquiry</router-link>
            <router-link
              to="/back-office/disbursements-inquiry"
              class="dropdown-item"
            >Disbursements Inquiry</router-link>
            <router-link
              to="/back-office/cash-receipts-inquiry"
              class="dropdown-item"
            >Cash Receipts Inquiry</router-link>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Reports</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Transaction Listing
              <div
                class="dropdown-menu"
                aria-labelledby="dropdownmenu"
                style="left: 338px; top: 7px;"
              >
                <router-link
                  to="/back-office/report-generation"
                  class="dropdown-item"
                >Report Generation</router-link>
              </div>
            </div>
            <router-link
              to="/back-office/balance-sheet-report"
              class="dropdown-item"
            >Balance Sheet Report</router-link>
            <router-link
              to="/back-office/income-statement-report"
              class="dropdown-item"
            >Income Statement Report</router-link>
            <router-link
              to="/back-office/trial-balance-report"
              class="dropdown-item"
            >Trial Balance Report</router-link>
            <router-link
              to="/back-office/general-ledger-report"
              class="dropdown-item"
            >General Ledger Report</router-link>
            <router-link
              to="/back-office/gl-trans-summary-report"
              class="dropdown-item"
            >G/L Trans. Summary Report</router-link>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">BIR Compliance Reports
              <div class="dropdown-menu" style="left: 338px; top: 175px;">
                <router-link to="/back-office/general" class="dropdown-item">General</router-link>
                <router-link to="/back-office/sl-option" class="dropdown-item">SI Option</router-link>
                <router-link to="/back-office/advanced" class="dropdown-item">Advance</router-link>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">System</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <div
              class="dropdown-item dropdown-toggle"
              data-toggle="dropdown"
            >Year Month End Closing Entries
              <div
                class="dropdown-menu"
                aria-labelledby="dropdownmenu"
                style="left: 338px; top: 7px;"
              >
                <router-link to="/back-office/generate" class="dropdown-item">Generate</router-link>
                <router-link to="/back-office/maintenance" class="dropdown-item">Maintenance</router-link>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/back-office/override" class="dropdown-item">Override</router-link>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Main Menu</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="#" class="dropdown-item">
              Client Master
              <span class="float-right">F1</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Front Office
              <span class="float-right">F2</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Back Office
              <span class="float-right">F3</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Loan A/R
              <span class="float-right">F4</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Deposits
              <span class="float-right">F5</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Inventory
              <span class="float-right">F6</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Other Modules
              <span class="float-right">F7</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              System1
              <span class="float-right">F8</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Setup
              <span class="float-right">F9</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              System2
              <span class="float-right">F10</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Reports
              <span class="float-right">F11</span>
            </router-link>
            <router-link to="#" class="dropdown-item">
              Logout
              <span class="float-right">F12</span>
            </router-link>
          </div>
        </li>
        <li class="nav-item">
          <router-link to="#" class="nav-link">Policy</router-link>
        </li>
        <li class="nav-item">
          <router-link to="#" class="nav-link">Help</router-link>
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
.backoffice {
  text-align: center;
  width: 100%;
  height: 541px;
  border: 1px solid #fff;
}

.dropdown-item:hover > .dropdown-menu {
  display: block;
}
</style>