<template>
  <div class="system">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto" style="float:left;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Maintenance</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;"
          >
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Environment
              <div class="dropdown-menu" style="left: 338px; top:0px">
                <router-link
                  to="/system/environment-branch-information"
                  class="dropdown-item"
                >Branch Information</router-link>
                <router-link
                  to="/system/environment-workstation-parameters"
                  class="dropdown-item"
                >Worksheet Parameters</router-link>
              </div>
            </div>
            <router-link to="#/system/set-system-date" class="dropdown-item">Set System Date</router-link>
            <router-link to="#/system/database-management" class="dropdown-item">Datebase Management</router-link>
            <router-link to="#/system/connection-monitor" class="dropdown-item">Connection Monitor</router-link>
            <router-link to="#" class="dropdown-item dropdown-toggle">Purge Transactions</router-link>
            <!-- <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Purge Transactions
              <div class="dropdown-menu" style="left: 338px; top: 117px;">
                <router-link
                  to="#/system/interest-on-deposits"
                  class="dropdown-item"
                >Interest on Deposits</router-link>
                <router-link to="#/system/dividend" class="dropdown-item">Divedend</router-link>
                <router-link to="#/system/patronage" class="dropdown-item">Patronage</router-link>
              </div>
            </div>-->
            <router-link to="#/system/live-update" class="dropdown-item">Live Update</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Access</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 117px; min-width: 200px; font-size: 13px;"
          >
            <router-link to="/system/user-access" class="dropdown-item">User Access</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Inquiry</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 190px; min-width: 340px; font-size: 13px;"
          >
            <router-link
              to="#/system/user-access-rights-inquiry"
              class="dropdown-item"
            >User Access Rights Inquiry</router-link>
            <router-link to="#/system/activity-logs" class="dropdown-item">Activity Logs</router-link>
            <router-link to="#/system/loan-logs" class="dropdown-item">Loan Logs</router-link>
            <router-link to="#/system/loan-application" class="dropdown-item">Loan Application</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 265px; min-width: 340px; font-size: 13px;"
          >
            <router-link
              to="#/system/user-access-rights-listing"
              class="dropdown-item"
            >User Access Rights Listing</router-link>
            <router-link
              to="#/system/user-activity-logs-listing"
              class="dropdown-item"
            >Activity Logs Listing</router-link>
            <router-link to="#/system/transfer-to-listing" class="dropdown-item">Transfer TO Listing</router-link>
            <router-link
              to="#/system/transfer-from-listing"
              class="dropdown-item"
            >Transfer FROM Listing</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Migrate</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 343px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/system/migrate-coop" class="dropdown-item">Migrate Coop</router-link>
            <!-- <router-link to="/system/migrate-holy-cross" class="dropdown-item">Migrate Holy Cross</router-link> -->
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;"
          >
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Client Transfers
              <div class="dropdown-menu" style="left: 338px; top:0px">
                <router-link to="#/system/tag-clients" class="dropdown-item">Tag Clients</router-link>
                <router-link
                  to="/system/transfers-to-branch"
                  class="dropdown-item"
                >Transfers TO Branch</router-link>
                <router-link
                  to="/system/transfers-from-branch"
                  class="dropdown-item"
                >Transfers FROM Branch</router-link>
                <router-link to="/system/maintenance" class="dropdown-item">Maintenance</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Database Maintenance
              <div class="dropdown-menu" style="left: 338px; top:32px">
                <router-link to="/system/download-table" class="dropdown-item">Download Table</router-link>
                <router-link to="/system/upload-table" class="dropdown-item">Upload Table</router-link>
              </div>
            </div>
            <router-link to="/system/override" class="dropdown-item">Override</router-link>
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
.system {
  text-align: center;
  width: 100%;
  height: 541px;
  border: 1px solid #fff;
}
.dropdown-item:hover > .dropdown-menu {
  display: block;
}
</style>