<template>
  <div class="deposits">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto" style="float: left;">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Maintenance</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="/deposits/savings-deposit" class="dropdown-item">Savings Deposit</router-link>
            <router-link to="/deposits/time-deposit" class="dropdown-item">Time Deposit</router-link>
            <router-link to="/deposits/share-capital" class="dropdown-item">Share Capital</router-link>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Inquiry</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <router-link
              to="/deposits/inquiry-savings"
              class="dropdown-item"
            >Savings Deposit Inquiry</router-link>
            <router-link to="/deposits/inquiry-time" class="dropdown-item">Time Deposit Inquiry</router-link>
            <router-link to="/deposits/inquiry-share" class="dropdown-item">Share Capital Inquiry</router-link>
            <router-link to="/deposits/inquiry-dividend" class="dropdown-item">Dividend Inquiry</router-link>
            <router-link to="/deposits/inquiry-patronage" class="dropdown-item">Patronage Inquiry</router-link>
            <router-link
              to="/deposits/inquiry-interest"
              class="dropdown-item"
            >Interest on Savings Inquiry</router-link>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Deposits Utilities</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Int. On savings
              <div class="dropdown-menu" style="left: 338px; top: 10px;">
                <router-link to="/deposits/int-generate" class="dropdown-item">Generate</router-link>
                <router-link to="/deposits/int-maintenance" class="dropdown-item">Maintenance</router-link>
                <router-link to="#" class="dropdown-item">Control List</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Accr. Int. on Deposits
              <div class="dropdown-menu" style="left: 338px; top: 30px;">
                <router-link to="/deposits/accr-generate" class="dropdown-item">Generate</router-link>
                <router-link to="/deposits/accr-maintenance" class="dropdown-item">Maintenance</router-link>
                <router-link to="#" class="dropdown-item">Control List</router-link>
              </div>
            </div>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Time Deposit Roll Over
              <div class="dropdown-menu" style="left: 338px; top: 50px;">
                <router-link to="/deposits/time-generate" class="dropdown-item">Generate</router-link>
                <router-link to="/deposits/time-maintenance" class="dropdown-item">Maintenance</router-link>
              </div>
            </div>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dividend and Patronage</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Avg. Share Capital
              <div class="dropdown-menu" style="left: 338px; top: 10px;">
                <router-link to="/deposits/avg-generate" class="dropdown-item">Generate</router-link>
                <router-link to="/deposits/avg-control-print" class="dropdown-item">Control List</router-link>
              </div>
            </div>
            <router-link to="/deposits/compute" class="dropdown-item">Compute Dividend and Patronage</router-link>
            <router-link to="#" class="dropdown-item">Control List</router-link>
            <router-link to="/deposits/journalize" class="dropdown-item">Journalize</router-link>
            <div class="dropdown-item dropdown-toggle" data-toggle="dropdown">Maintenance
              <div class="dropdown-menu" style="left: 338px; top: 115px;">
                <router-link to="/deposits/maintenance-dividend" class="dropdown-item">Dividend</router-link>
                <router-link to="/deposits/maintenance-patronage" class="dropdown-item">Patronage</router-link>
                <router-link
                  to="/deposits/maintenance-special"
                  class="dropdown-item"
                >Special Transaction</router-link>
              </div>
            </div>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Reports</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <router-link
              to="/deposits/savings-listing"
              class="dropdown-item"
            >Savings Deposit Listing</router-link>
            <router-link to="/deposits/time-listing" class="dropdown-item">Time Deposit Listing</router-link>
            <router-link
              to="/deposits/share-capital-listing"
              class="dropdown-item"
            >Share Capital Listing</router-link>
            <router-link
              to="/deposits/time-certificate"
              class="dropdown-item"
            >Time Deposit Certificate</router-link>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <router-link
              to="/deposits/compounding-interest"
              class="dropdown-item"
            >Compounding Interest Calculator</router-link>
            <router-link to="/deposits/override" class="dropdown-item">Override</router-link>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Main Menu</a>
          <div
            class="dropdown-menu"
            style="top: 40px; left: 10px; min-width: 340px; font-size: 13px;"
          >
            <router-link to="client/client" class="dropdown-item">
              Client Master
              <span class="float-right">F1</span>
            </router-link>
            <router-link to class="dropdown-item">
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
.deposits {
  text-align: center;
  width: 100%;
  height: 541px;
  border: 1px solid #fff;
}

.dropdown-item:hover > .dropdown-menu {
  display: block;
}
</style>