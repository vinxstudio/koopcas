<template>
  <div class="frontoffice">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto" style="float:left;">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Front Office</a>
          <div class="dropdown-menu" style="top: 40px; left: 0px; min-width: 340px; font-size: 13px;">
            <router-link to="/front-office/start-of-day" class="dropdown-item">Start of Day
              <!-- <span class="float-right">Ctrl + S</span> -->
            </router-link>
            <router-link to="/front-office/transaction" class="dropdown-item">Transaction
              <!-- <span class="float-right">Ctrl + T</span> -->
            </router-link>
            <router-link to="/front-office/passbook-printing" class="dropdown-item">Passbook Printing
              <!-- <span class="float-right">Ctrl + P</span> -->
            </router-link>
            <router-link to="/front-office/end-of-day" class="dropdown-item">End of Day
              <!-- <span class="float-right">Ctrl + E</span> -->
            </router-link>
            <!-- <router-link to="/front-office/atm-gateway" class="dropdown-item">ATM Gateway
              <span class="float-right">Ctrl + A</span>
            </router-link>
            <router-link to="/front-office/request-server" class="dropdown-item">Request Server
              <span class="float-right">Ctrl + R</span>
            </router-link>
            <router-link to="/front-office/priority-system-display" class="dropdown-item">Priority System Display
              <span class="float-right">Ctrl + P</span>
            </router-link> -->
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Inquiry</a>
          <div class="dropdown-menu" style="top: 40px; left: 109px; min-width: 340px; font-size: 13px;">
            <router-link to="/front-office/inquiry" class="dropdown-item">Inquiry</router-link>
            <router-link to="/front-office/ccoi-transaction" class="dropdown-item">CCOI Transactions</router-link>
            <router-link to="/front-office/cash-transfers" class="dropdown-item">Cash Transfers</router-link>
            <router-link to="/front-office/bank-deposits" class="dropdown-item">Bank Deposits</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Reports</a>
          <div class="dropdown-menu" style="top: 40px; left: 185px; min-width: 340px; font-size: 13px;">
            <router-link to="/front-office/front-office-report" class="dropdown-item">Front Office Reports</router-link>
            <router-link to="/front-office/cash-collection" class="dropdown-item">Cash Collection</router-link>
            <router-link to="/front-office/cash-disbursements" class="dropdown-item">Cash Disbursements</router-link>
            <router-link to="/front-office/transaction-listing" class="dropdown-item">Transaction Listing</router-link>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tools</a>
          <div class="dropdown-menu" style="top: 40px; left: 266px; min-width: 340px; font-size: 13px;">
            <router-link to="/front-office/over-ride" class="dropdown-item">Override</router-link>
            <router-link to="/front-office/clearing-ac-utility" class="dropdown-item">Clearing All Checks Utility</router-link>
          </div>
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
</style>
