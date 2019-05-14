<template>
  <div class="setup">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto" style="float:left;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Setup</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/setup/chart-of-accounts" class="dropdown-item">Chart of Accounts</router-link>
            <router-link
              to="/setup/conso-chart-of-accounts"
              class="dropdown-item"
            >Conso Chart of Accounts</router-link>
            <router-link to="/setup/departments" class="dropdown-item">Departments</router-link>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Subsidiary Ledger
              <div class="dropdown-menu" style="left: 338px; top: 90px;">
                <router-link to="#" class="dropdown-item">S/L Class</router-link>
                <router-link to="/setup/subsidiary-ledger-sl-types/" class="dropdown-item">S/L Types</router-link>
                <router-link to="#" class="dropdown-item">S/L Entry Types</router-link>
                <router-link to="#" class="dropdown-item">S/L Status</router-link>
              </div>
            </div>
            <router-link to="/setup/bank-code-table" class="dropdown-item">Bank Code Table</router-link>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Account Groups
              <div class="dropdown-menu" style="left: 338px; top: 145px;">
                <router-link to="/setup/account-group-sectoral/" class="dropdown-item">Sectoral</router-link>
                <router-link
                  to="/setup/account-group-occupational/"
                  class="dropdown-item"
                >Occupational</router-link>
                <router-link to="/setup/account-group-geo/" class="dropdown-item">Geographical</router-link>
                <router-link to="/setup/account-group-empcode/" class="dropdown-item">Employer Code</router-link>
                <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Education
                  <div class="dropdown-menu" style="left: 158px; top: 128px;">
                    <router-link to="/setup/account-group-educ-school" class="dropdown-item">School</router-link>
                    <router-link
                      to="/setup/account-group-educ-section"
                      class="dropdown-item"
                    >Section</router-link>
                  </div>
                </div>
                <router-link to="/setup/account-group-restriction" class="dropdown-item">Restriction</router-link>
              </div>
            </div>
            <router-link to="/setup/time-deposit-rate" class="dropdown-item">Time Deposit Rate</router-link>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Loans
              <div class="dropdown-menu" style="left: 338px; top: 200px;">
                <router-link
                  to="/setup/loan-loan-purpose-table"
                  class="dropdown-item"
                >Loan Purpose Table</router-link>
                <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Industry
                  <div class="dropdown-menu" style="left: 175px; top: 33px;">
                    <router-link to="/setup/industry-section/" class="dropdown-item">Section</router-link>
                    <router-link to="/setup/industry-division/" class="dropdown-item">Division</router-link>
                    <router-link
                      to="/setup/industry-industry-code/"
                      class="dropdown-item"
                    >Industry Code</router-link>
                  </div>
                </div>
                <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Cluster
                  <div class="dropdown-menu" style="left: 175px; top: 66px;">
                    <router-link
                      to="/setup/cluster-setup-cluster"
                      class="dropdown-item"
                    >Setup Cluster</router-link>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Share Capital
              <div class="dropdown-menu" style="left: 338px; top: 228px;">
                <router-link
                  to="/setup/sharecapital-pricestock"
                  class="dropdown-item"
                >Price Per Stock</router-link>
              </div>
            </div>
            <router-link to="/setup/priority-object" class="dropdown-item">Priority Object</router-link>
            <router-link to="/setup/queuing-settings" class="dropdown-item">Queuing Settings</router-link>
            <router-link to="/setup/collectors" class="dropdown-item">Collectors</router-link>
            <router-link to="/setup/deduction-group" class="dropdown-item">Deduction Group</router-link>
            <router-link to="/setup/code-storage" class="dropdown-item">Code Storage</router-link>
            <router-link to="/setup/holidays" class="dropdown-item">Holidays</router-link>
            <router-link to="/setup/email-settings" class="dropdown-item">Email Settings</router-link>
            <router-link
              to="/setup/initialize-connections"
              class="dropdown-item"
            >Initialize Connections</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 70px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="#" class="dropdown-item">Chart of Account Listing</router-link>
            <div
              class="dropdown-item dropdown-toggle"
              data-toggle="dropdown"
            >Subsidiary (SL) Listing
              <div class="dropdown-menu" style="left: 338px; top: 33px;">
                <router-link to="#" class="dropdown-item">S/L Class Listing</router-link>
                <router-link to="#" class="dropdown-item">S/L Type Listing</router-link>
                <router-link to="#" class="dropdown-item">S/L Entry Type Listing</router-link>
                <router-link to="#" class="dropdown-item">S/L Status Listing</router-link>
              </div>
            </div>
            <router-link
              to="/loans/loans-master-inquiry"
              class="dropdown-item"
            >Bank Code Table Listing</router-link>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Account Group Listing
              <div class="dropdown-menu" style="left: 338px; top: 89px;">
                <router-link to="#" class="dropdown-item">Sectoral Listing</router-link>
                <router-link to="#" class="dropdown-item">Occupational Listing</router-link>
                <router-link to="#" class="dropdown-item">Chapter Listing</router-link>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 152px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/setup/override" class="dropdown-item">Override</router-link>
          </div>
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
.setup {
  text-align: center;
  width: 100%;
  height: 541px;
  border: 1px solid #fff;
}
.dropdown-item:hover > .dropdown-menu {
  display: block;
}
</style>