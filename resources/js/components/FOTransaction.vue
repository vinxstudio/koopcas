<template>
  <div class="transaction">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 200px; font-size: 13px;">
            <router-link to="/front-office/transaction-search-trans" class="dropdown-item">Find</router-link>
            <a href="#" class="dropdown-item">New</a>
            <a href="#" class="dropdown-item">Save <span class="float-right">Ctrl+S</span></a>
            <a href="#" class="dropdown-item">Exit <span class="float-right">Ctrl+X</span></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Edit</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">Paste Expected Value <span class="float-right">F12</span></a>
            <a href="#" class="dropdown-item">Paste Difference From Tendered Amount <span class="float-right">Ctrl+F12</span></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Document</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">Find COCI Docs <span class="float-right">F3</span></a>
            <a href="#" class="dropdown-item">Clear Check <span class="float-right">Shift+Ctrl+F11</span></a>
            <a href="#" class="dropdown-item">Approval for Reversal</a>
            <a href="#" class="dropdown-item">Reverse <span class="float-right">Shift+F11</span></a>
            <a href="#" class="dropdown-item">Cancel</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Other</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">Set System Date <span class="float-right">F5</span></a>
            <a href="#" class="dropdown-item">S/L Account Summary <span class="float-right">F7</span></a>
            <a href="#" class="dropdown-item">Client Master Maintenance <span class="float-right">Ctrl+F8</span></a>
            <a href="#" class="dropdown-item">SL Master Maintenance <span class="float-right">Shift+F8</span></a>
            <a href="#" class="dropdown-item">Charts of Accounts Inquiry <span class="float-right">Shift+Ctrl+F8</span></a>
            <a href="#" class="dropdown-item">Show Client Image <span class="float-right">F8</span></a>
            <a href="#" class="dropdown-item">Amortization Schedule (View) <span class="float-right">Shift+F7</span></a>
            <a href="#" class="dropdown-item">Interest/Penalty Worksheet <span class="float-right">Shift+Ctrl+F7</span></a>
            <a href="#" class="dropdown-item">Item Master Maintenance <span class="float-right">Ctrl+I</span></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Settings</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">Automatic New</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Print</a>
          <div class="dropdown-menu" style="left: 15px; min-width: 340px; font-size: 13px;">
            <a href="#" class="dropdown-item">Document <span class="float-right">Ctrl+F9</span></a>
            <a href="#" class="dropdown-item">Formatted Receipt <span class="float-right">Ctrl+W</span></a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <router-link to="/front-office/transaction-search-trans" class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i> <span>Find</span>
          </router-link>
          <button class="btn btn-sm btn-outline-primary mr-4" type="button" @click="insertNew()">
            <i class="fa fa-file mr-1"></i> <span>Ne<u>w</u></span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="editTransSum(transsum)">
            <i class="fa fa-pencil-alt mr-1"></i> <span><u>E</u>dit</span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-arrow-up"></i><span>Page <u>U</u>p</span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-4" type="button">
            <i class="fa fa-arrow-down"></i><span>Page D<u>o</u>wn</span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary" type="button">
            <span>USER:</span>
          </button>
          
          <button class="btn btn-sm btn-outline-primary" type="button">
            <span>System Date:</span>
          </button>
        </li>
      </ul>
    </nav>

    <div class="alert alert-success mb-2 mt-2" v-if="successAdd">Transaction Posted Successfully</div>

    <form @submit.prevent="inertTransSum">
      <div class="form-row align-items-stretch">
        <div class="col-6">
          <div class="bg-light">
            <!-- form -->
            <fieldset class="border p-2">
              <!-- TRANS TYPE -->
              <div class="form-row justify-content-between">
                <label for="transType" class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Trans. Type:</label>
                <div class="col-sm-5 my-1">
                  <select class="custom-select custom-select-sm" name="trCode" v-model="transsum.trCode" :disabled="selectDisabled">
                    <option v-for="dep in tanstype.data" :value="dep.transTypeId" :key="dep.id">{{ dep.transTypeDesc }}</option>
                  </select>
                </div>

                <label for="dept" class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Dept:</label>
                <div class="col-sm-3 my-1">
                  <select class="custom-select custom-select-sm" name="department" v-model="client.department" v-if="this.$route.params.id" disabled>
                    <option v-for="dept in department.data" :value="dept.deptId">{{ dept.deptDesc }}</option>
                  </select>
                  
                  <select class="custom-select custom-select-sm" name="department" v-model="transsum.department" v-else-if="this.$route.params.trCode && this.$route.params.trYear && this.$route.params.trCtlNo && this.$route.params.trDocNo" disabled>
                    <option v-for="dept in department.data" :value="dept.deptId">{{ dept.deptDesc }}</option>
                  </select>
                  
                  <select class="custom-select custom-select-sm" name="department" v-model="client.department" v-else disabled>
                    <option v-for="dept in department.data" :value="dept.deptId">{{ dept.deptDesc }}</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <label for="controlNo1" class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Branch:</label>
                <div class="col-sm-5 my-1">
                  <div class="form-row m-0">
                    <select class="custom-select custom-select-sm" v-model="transsum.trBrCode" name="trBrCode" :disabled="selectDisabled">
                        <option disabled>(select one)</option>
                        <option v-for="branch in branches" v-bind:key="branch.id" :value="branch.branchesId">{{ branch.branchesDesc }}</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- CONTROL NO. -->
              <div class="form-row">
                <label for="controlNo1" class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Control No.:</label>
                <div class="col-sm-5 my-1">
                  <div class="form-row m-0">
                    <input type="text" class="col-3 form-control form-control-sm" name="trCtlNo" v-model="transsum.trYear" :readonly="readOnly">
                    <span class="col-auto mt-1 font-weight-bold">-</span>
                    <input type="text" class="col form-control form-control-sm" name="trCtlNo" v-model="transsum.trCtlNo" :readonly="readOnly">
                  </div>
                </div>
              </div>
              <!-- CLIENT -->
              <div class="form-row">
                <label for="client1" class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Client:</label>
                <div class="col my-1">
                  <div class="form-row m-0">
                    <input type="text" class="col-4 mr-sm-2 form-control form-control-sm" name="trClientId" v-model="transsum.trClientId" v-if="this.$route.params.trCode && this.$route.params.trYear && this.$route.params.trCtlNo && this.$route.params.trDocNo" readonly>
                    <input type="text" class="col-4 mr-sm-2 form-control form-control-sm" name="trClientId" :value="client.brCode+'-'+this.webId2+'-'+client.chkDgt" v-else-if="this.$route.params.id" readonly>
                    <input type="text" class="col-4 mr-sm-2 form-control form-control-sm" name="trClientId" v-model="client.clientId" v-else :readonly="readOnly">
                    
                    <input type="text" class="col form-control form-control-sm" name="clientName" :value="transsum.clientName" v-if="this.$route.params.trCode && this.$route.params.trYear && this.$route.params.trCtlNo && this.$route.params.trDocNo" readonly>
                    <input type="text" class="col form-control form-control-sm" name="clientName" :value="transsum.clientName = client.lastName+', '+client.firstName+' '+client.middleName" v-else-if="this.$route.params.id" readonly>
                    <input type="text" class="col form-control form-control-sm" name="clientName" :value="transsum.clientName = client.lastName+', '+client.firstName+' '+client.middleName" v-else :readonly="readOnly">
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col offset-md-2 offset-sm-3 my-1">
                  <div class="form-row m-0">
                    <span class="mr-sm-2">
                      <router-link to="/front-office/transaction-search" class="btn btn-sm btn-outline-primary mr-4" hidden v-if="this.$route.params.trCode && this.$route.params.trYear && this.$route.params.trCtlNo && this.$route.params.trDocNo">
                        <i class="fa fa-search mr-1"></i><span>Find</span>
                      </router-link>
                      <router-link to="/front-office/transaction-search" class="btn btn-sm btn-outline-primary mr-4" v-else>
                        <i class="fa fa-search mr-1"></i><span>Find</span>
                      </router-link>
                    </span>
                    <input type="text" class="col offset-4 form-control form-control-sm" name="client3" readonly>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-3">
          <div class="bg-light h-100">
            <!-- form -->
            <fieldset class="border p-2 h-100">
              <!-- REF. NUMBER -->
              <div class="form-row">
                <label for="refNumber" class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Ref. Number:</label>
                <div class="col-sm my-1">
                  <input type="text" class="form-control form-control-sm" name="trDocNo" v-model="transsum.trDocNo" :readonly="readOnly">
                </div>
              </div>
              <!-- TRANS. DATE -->
              <div class="form-row">
                <label for="transDate" class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Trans. Date:</label>
                <div class="col-sm my-1">
                  <input type="date" class="form-control form-control-sm" name="trDate" v-model="transsum.trDate" :readonly="readOnly">
                </div>
              </div>
              <!-- BATCH NO. -->
              <div class="form-row">
                <label for="batchNo" class="col-md-4 col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Batch No.:</label>
                <div class="col-sm my-1">
                  <input type="text" class="form-control form-control-sm" name="batchNo" v-model="transsum.batchNo" :readonly="readOnly">
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="col-3">
          <div class="bg-light h-100">
            <!-- form -->
            <fieldset class="border p-2 h-100">
              <!-- TOTAL -->
              <div class="form-row">
                <label for="total" class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Total:</label>
                <div class="col-sm my-1">
                  <input type="text" class="form-control form-control-sm" name="total" :value="this.total" :readonly="readOnly">
                </div>
              </div>
              <!-- TIME -->
              <div class="form-row">
                <label for="time" class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Time:</label>
                <div class="col-sm my-1">
                  <input type="text" class="form-control form-control-sm" name="trTime" v-model="transsum.trTime" :readonly="readOnly">
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>

      <div class="form-row mt-2 mb-2 align-items-stretch">
        <div class="col">
          <div class="custom-tabs">
            <ul class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a href="#summary" class="nav-link active" data-toggle="tab" @click="summary">
                  <span>Summary</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#receipt" class="nav-link" data-toggle="tab" @click="receipt">
                  <span><u>R</u>eceipt</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#disburse" class="nav-link" data-toggle="tab" @click="disbursement">
                  <span><u>D</u>isburse</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#withdrawal" class="nav-link" data-toggle="tab" @click="withdrawal">
                  <span><u>W</u>ithdrawal</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#encashment" class="nav-link" data-toggle="tab" @click="encashment">
                  <span><u>E</u>ncashment</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#transferfrom" class="nav-link" data-toggle="tab" @click="transferFrom">
                  <span>Transfer <u>F</u>orm</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#transferto" class="nav-link" data-toggle="tab" @click="transferTo">
                  <span>Transfer <u>T</u>o</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#bankdeposit" class="nav-link" data-toggle="tab" @click="bankDeposit">
                  <span><u>B</u>ank Deposit</span>
                </a>
              </li>

              <li class="nav-item">
                <a href="#salesreceipt" class="nav-link" data-toggle="tab">
                  <span>Sales Receipt</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="#returnreceipt" class="nav-link" data-toggle="tab">
                  <span>Return Receipt</span>
                </a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane active" id="summary">
                <div class="border p-2 bg-white">
                  <div class="row no-gutters justify-content-center align-items-center mb-2">
                    <div class="col-2 pt-2 border">
                      <p class="lead text-center">Cashier 32: admin - James</p>
                      <p class="lead text-center">Glenn L. Abadilla</p>
                    </div>
                    <h4 class="mt-0 col text-center">
                      <b>TELLER's / CASHIER's TOTALS</b>
                    </h4>
                    <div class="col-2 pt-2 border">
                      <p class="lead text-center">Sat, April 07, 2018</p>
                      <p class="lead text-center">11:38:33 PM</p>
                    </div>
                  </div>
                  <div class="row no-gutters align-items-stretch">
                    <div class="col-2 mr-2">
                      <fieldset class="border p-2 h-100">
                        <h5 class="font-weight-bold">What's N</h5>
                      </fieldset>
                    </div>
                    <div class="col-8">
                      <table class="table table-bordered mb-0">
                        <thead>
                          <tr>
                            <th class="border-0 border-right w-25" scope="col"></th>
                            <th class="text-center font-weight-bold border-top-0 border-bottom-0 border-right w-25" scope="col">CASH</th>
                            <th class="text-center font-weight-bold border-top-0 border-bottom-0 border-right w-25" scope="col">COCI</th>
                            <th class="text-center font-weight-bold border-top-0 border-bottom-0 border-righ w-25t" scope="col">TOTAL</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td class="border-top-0 border-bottom-0 border-right">Beginning Balance:</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right">0.00</td>
                          </tr>
                          <tr>
                            <td class="border-top-0 border-bottom-0 border-right pb-1">IN</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pb-1">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pb-1">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pb-1">0.00</td>
                          </tr>
                          <tr>
                            <td class="border-top-0 border-bottom-0 border-right py-1">OUT</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right py-1">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right py-1">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right py-1">0.00</td>
                          </tr>
                          <tr>
                            <td class="border-top-0 border-bottom-0 border-right font-weight-bold pb-1">Pending:</td>
                            <td class="border-top-0 border-bottom-0 border-right pb-1"></td>
                            <td class="border-top-0 border-bottom-0 border-right pb-1"></td>
                            <td class="border-top-0 border-bottom-0 border-right pb-1"></td>
                          </tr>
                          <tr>
                            <td class="border-top-0 border-bottom-0 border-right pl-4 py-1 text-muted">IN</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right py-1 text-muted">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right py-1 text-muted">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right py-1 text-muted">0.00</td>
                          </tr>
                          <tr>
                            <td class="border-top-0 border-bottom-0 border-right pl-4 pt-1 text-muted">OUT</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pt-1 text-muted">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pt-1 text-muted">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pt-1 text-muted">0.00</td>
                          </tr>
                          <tr>
                            <td class="border-top-0 border-bottom-0 border-right font-weight-bold pb-5">Ending Balance:</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pb-5">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pb-5">0.00</td>
                            <td class="text-right border-top-0 border-bottom-0 border-right pb-5">0.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="receipt">
                <div class="row no-gutters align-items-stretch mt-2">
                  <div class="col-4 mr-4">
                    <div class="row no-gutters">
                      <div class="col-8">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">Summary of Accounts</h5>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanAccounts">Loan Accounts:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="loanAccounts" v-model="totalLoan.totalAmountLoan" type="text" v-if="this.$route.params.id" readonly>
                              <input class="form-control form-control-sm" name="loanAccounts" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="arAccounts">A/R Accounts:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="arAccounts" v-model="totalAr.totalAmountAr" type="text" v-if="this.$route.params.id" readonly>
                              <input class="form-control form-control-sm" name="arAccounts" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="shareCapital">Share Capital:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="shareCapital" v-model="totalShare.totalAmountShareCapital" type="text" v-if="this.$route.params.id" readonly>
                              <input class="form-control form-control-sm" name="shareCapital" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="savingsDeposit">Savings Deposit:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="savingsDeposit" v-model="totalSavings.totalAmountSavingsDeposit" type="text" v-if="this.$route.params.id" readonly>
                              <input class="form-control form-control-sm" name="savingsDeposit" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="timeDeposit">Time Deposit:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="timeDeposit" v-model="totalTimeDeposit.totalAmountTimeDeposit" type="text" v-if="this.$route.params.id" readonly>
                              <input class="form-control form-control-sm" name="timeDeposit" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-1">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="otherAccounts">Other Accounts:</label>
                          </div>
                        </fieldset>
                      </div>
                      <div class="col">
                        <fieldset class="border border-left-0 p-2 bg-light">
                          <h5 class="text-center">Allocations</h5>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="cash" type="text" v-model="cash" data-toggle="modal" data-target="#loanaccounts">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="arAccountsAlloc" type="text" data-toggle="modal" data-target="#araccounts">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="shareCapitalAlloc" type="text" data-toggle="modal" data-target="#scaccounts">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="savingsDepositAlloc" type="text" data-toggle="modal" data-target="#sdaccounts">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="timeDepositAlloc" type="text" data-toggle="modal" data-target="#tdaccounts">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="otherAccountsAlloc" type="text" data-toggle="modal" data-target="#otheraccounts">
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="row no-gutters mt-2">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">E<u>x</u>planation</h5>
                          <textarea class="form-control form-control-sm" name="explanation" v-model="transsum.explanation" rows="5" :readonly="readOnly"></textarea>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <ul class="nav nav-tabs justify-content-start">
                      <li class="nav-item">
                        <a href="#receiptglentries" class="nav-link active" data-toggle="tab">
                          <span><u>G</u>L/SL Entries</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#receiptcocidetails" class="nav-link" data-toggle="tab">
                          <span><u>C</u>OCI Details</span>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="receiptglentries" v-if="this.$route.params.trCode && this.$route.params.trYear && this.$route.params.trCtlNo && this.$route.params.trDocNo">
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">SC</th>
                                <th scope="col">Acct Description</th>
                                <th scope="col">G/L Acct Code</th>
                                <th scope="col">Acct Num</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                              </tr>
                            </thead>
                            <tbody style="background-color: #fff; color: #000;">
                              <tr v-for="transsum in transsums" v-bind:key="transsum.id">
                                <td>{{ transsum.trBrCode }}</td>
                                <td>{{ transsum.transTypeDesc }}</td>
                                <td></td>
                                <td>{{ transsum.trDocNo }}</td>
                                <td>{{ transsum.cashPayment }}</td>
                                <td>{{ transsum.creditPayment }}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="difference">Difference:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="pointsPayment" :value="transsum.pointsPayment = Number(transsum.cashPayment) - Number(transsum.creditPayment)" type="text" :readonly="readOnly">
                          </div>
                          <label class="ml-sm-4 col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="debit">Debit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="cashPayment" v-model="transsum.cashPayment" type="text" :readonly="readOnly">
                          </div>
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="credit">Credit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="creditPayment" v-model="transsum.creditPayment" type="text" :readonly="readOnly">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane active" id="receiptglentries" v-else>
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">SC</th>
                                <th scope="col">Acct Description</th>
                                <th scope="col">G/L Acct Code</th>
                                <th scope="col">Acct Num</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                              </tr>
                            </thead>
                            <tbody style="color: #fff;">
                              <tr v-for="account in accounts" v-bind:key="account.id">
                                <td>{{ account.slcCode }}</td>
                                <td>{{ account.acctDescr }}</td>
                                <td>{{ account.glAcctCode }}</td>
                                <td>{{ account.acctNum }}</td>
                                <td></td>
                                <td>{{ account.amount }}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="difference">Difference:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="pointsPayment" :value="transsum.pointsPayment = Number(transsum.creditPayment) - Number(transsum.cashPayment)" type="text" :readonly="readOnly">
                          </div>
                          <label class="ml-sm-4 col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="debit">Debit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="cashPayment" v-model="transsum.cashPayment" type="text" :readonly="readOnly">
                          </div>
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="credit">Credit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="creditPayment" v-model="transsum.creditPayment" type="text" :readonly="readOnly">
                          </div>
                        </div>
                      </div>

                      <div class="tab-pane" id="receiptcocidetails">
                        <div class="row">
                          <div class="form-group col-sm-3">
                            <select class="custom-select custom-select-sm" v-model="cociDetails.cociForm">
                              <option disabled selected>Form</option>
                              <option>Cash</option>
                              <option>Check</option>
                              <option>POS</option>
                            </select>
                          </div>

                          <div class="form-group col-sm-3">
                            <input type="text" v-model="cociDetails.cociCheckNum" name="checkNumber" class="form-control" placeholder="Check Number" :readonly="readOnly">
                          </div>

                          <div class="form-group col-sm-3">
                            <input type="text" v-model="cociDetails.cociBankCode" name="bankCode" class="form-control" placeholder="Bank Code" :readonly="readOnly">
                          </div>

                          <div class="form-group col-sm-3">
                            <input type="text" v-model="cociDetails.cociTypeOfCheck" name="typeOfCheck" class="form-control" placeholder="Type of Check" :readonly="readOnly">
                          </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-sm-4">
                            <input type="text" v-model="cociDetails.cociNumDays" name="numDays" class="form-control" placeholder="#Days" :readonly="readOnly">
                          </div>

                          <div class="form-group col-sm-4">
                            <input type="date" v-model="cociDetails.cociDateCheck" name="dateCheck" class="form-control" placeholder="Date of Check" :readonly="readOnly">
                          </div>

                          <div class="form-group col-sm-4">
                            <input type="text" v-model="cociDetails.cociAmount" name="amount" class="form-control" placeholder="Amount" :readonly="readOnly">
                          </div>
                        </div>

                        <div class="form-row justify-content-center mb-1">
                          <button class="btn btn-sm btn-primary mr-1" type="button" @click="addCOCIEntries">
                            <i class="fa fa-plus mr-1"></i> <span>Add</span>
                          </button>
                          <button class="btn btn-sm btn-outline-primary" type="button">
                            <i class="fa fa-ban mr-1"></i>
                            <span>Clear</span>
                          </button>
                        </div>
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">Form</th>
                                <th scope="col">Check Number</th>
                                <th scope="col">Bank Code</th>
                                <th scope="col">Type of Check</th>
                                <th scope="col">#Days</th>
                                <th scope="col">Date of Check</th>
                                <th scope="col">Amount</th>
                              </tr>
                            </thead>
                            <tbody style="color: #fff;">
                              <tr v-for="cociEntry in cociEntries" v-bind:key="cociEntry.id">
                                <td>{{cociEntry.cociForm}}</td>
                                <td>{{cociEntry.cociCheckNum}}</td>
                                <td>{{cociEntry.cociBankCode}}</td>
                                <td>{{cociEntry.cociTypeOfCheck}}</td>
                                <td>{{cociEntry.cociNumDays}}</td>
                                <td>{{cociEntry.cociDateCheck}}</td>
                                <td>{{cociEntry.cociAmount}}</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="disburse">
                <div class="row no-gutters align-items-stretch mt-2">
                  <div class="col-4 mr-4">
                    <div class="row no-gutters">
                      <div class="col-8">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">Summary of Accounts</h5>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanAccounts">Loan Accounts:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="loanAccounts" v-model="totalLoan.totalAmountLoan" type="text" v-if="this.$route.params.id" :readonly="readOnly">
                              <input class="form-control form-control-sm" name="loanAccounts" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="arAccounts">A/R Accounts:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="arAccounts" v-model="totalAr.totalAmountAr" type="text" v-if="this.$route.params.id" :readonly="readOnly">
                              <input class="form-control form-control-sm" name="arAccounts" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="shareCapital">Share Capital:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="shareCapital" v-model="totalShare.totalAmountShareCapital" type="text" v-if="this.$route.params.id" :readonly="readOnly">
                              <input class="form-control form-control-sm" name="shareCapital" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="savingsDeposit">Savings Deposit:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="savingsDeposit" v-model="totalSavings.totalAmountSavingsDeposit" type="text" v-if="this.$route.params.id" :readonly="readOnly">
                              <input class="form-control form-control-sm" name="savingsDeposit" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="timeDeposit" >Time Deposit:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="timeDeposit" v-model="totalTimeDeposit.totalAmountTimeDeposit" type="text" v-if="this.$route.params.id" :readonly="readOnly">
                              <input class="form-control form-control-sm" name="timeDeposit" type="text" v-else :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-1">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="otherAccounts">Amount to Disburse:</label>
                          </div>
                        </fieldset>
                      </div>

                      <div class="col">
                        <fieldset class="border border-left-0 p-2 bg-light">
                          <h5 class="text-center">Allocations</h5>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="loanAccountsAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="arAccountsAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="shareCapitalAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="savingsDepositAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="timeDepositAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="cash" type="text" v-model="cash">
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="row no-gutters mt-2">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">E<u>x</u>planation</h5>
                          <textarea class="form-control form-control-sm" name="explanation" rows="5" v-model="transsum.explanation"></textarea>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <ul class="nav nav-tabs justify-content-start">
                      <li class="nav-item">
                        <a href="#disburseglentries" class="nav-link active" data-toggle="tab">
                          <span><u>G</u>L/SL Entries</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#disbursecocidetails" class="nav-link" data-toggle="tab">
                          <span><u>C</u>OCI Details</span>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="disburseglentries">
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">SC</th>
                                <th scope="col">Acct Description</th>
                                <th scope="col">G/L Acct Code</th>
                                <th scope="col">Acct Num</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="difference">Difference:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="difference" v-model="transsum.pointsPayment" type="text">
                          </div>
                          <label class="ml-sm-4 col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="debit">Debit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="debitvalue" v-model="transsum.cashPayment" type="text">
                          </div>
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="credit">Credit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="creditvalue" v-model="transsum.creditPayment" type="text">
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="disbursecocidetails">
                        <p>It Works!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="withdrawal">
                <div class="row no-gutters align-items-stretch mt-2">
                  <div class="col-4 mr-4">
                    <div class="row no-gutters">
                      <div class="col-8">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">Summary of Accounts</h5>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanAccounts">Loan Accounts:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="loanAccounts" v-model="totalLoan.totalAmountLoan" type="text" v-if="this.$route.params.id">
                              <input class="form-control form-control-sm" name="loanAccounts" type="text" v-else>
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="arAccounts">A/R Accounts:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="arAccounts" v-model="totalAr.totalAmountAr" type="text" v-if="this.$route.params.id">
                              <input class="form-control form-control-sm" name="arAccounts" type="text" v-else>
                            </div>
                          </div>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="shareCapital">Share Capital:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="shareCapital" v-model="totalShare.totalAmountShareCapital" type="text" v-if="this.$route.params.id">
                              <input class="form-control form-control-sm" name="shareCapital" type="text" v-else>
                            </div>
                          </div>
                          <div class="form-row">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="savingsDeposit">Savings Deposit:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="savingsDeposit" v-model="totalSavings.totalAmountSavingsDeposit" type="text" v-if="this.$route.params.id">
                              <input class="form-control form-control-sm" name="savingsDeposit" type="text" v-else>
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="timeDeposit">Time Deposit:</label>
                            <div class="col-sm my-1">
                              <input class="form-control form-control-sm text-right" name="timeDeposit" v-model="totalTimeDeposit.totalAmountTimeDeposit" type="text" v-if="this.$route.params.id">
                              <input class="form-control form-control-sm" name="timeDeposit" type="text" v-else>
                            </div>
                          </div>
                          <div class="form-row mb-1">
                            <label class="col-sm-6 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="otherAccounts">Other Accounts:</label>
                          </div>
                        </fieldset>
                      </div>
                      <div class="col">
                        <fieldset class="border border-left-0 p-2 bg-light">
                          <h5 class="text-center">Allocations</h5>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="loanAccountsAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="arAccountsAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="shareCapitalAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="savingsDepositAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row mb-3">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="timeDepositAlloc" type="text">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col my-1">
                              <input class="form-control form-control-sm" name="cash" type="text" v-model="cash">
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="row no-gutters mt-2">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">E<u>x</u>planation</h5>
                          <textarea class="form-control form-control-sm" name="explanation" rows="5" v-model="transsum.explanation" :readonly="readOnly"></textarea>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <ul class="nav nav-tabs justify-content-start">
                      <li class="nav-item">
                        <a href="#withdrawentries" class="nav-link active" data-toggle="tab">
                          <span><u>G</u>L/SL Entries</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#withdrawcocidetails" class="nav-link" data-toggle="tab">
                          <span><u>C</u>OCI Details</span>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="withdrawentries">
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">SC</th>
                                <th scope="col">Acct Description</th>
                                <th scope="col">G/L Acct Code</th>
                                <th scope="col">Acct Num</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="difference">Difference:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="difference" v-model="transsum.pointsPayment" type="text" :readonly="readOnly">
                          </div>
                          <label class="ml-sm-4 col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="debit">Debit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="debitvalue" v-model="transsum.cashPayment" type="text" :readonly="readOnly">
                          </div>
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="credit">Credit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="creditvalue" v-model="transsum.creditPayment" type="text" :readonly="readOnly">
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="withdrawcocidetails">
                        <p>It Works!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="encashment">
                <div class="row no-gutters align-items-stretch">
                  <div class="col-4 mr-4">
                    <div class="row no-gutters">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <div class="form-row mb-5 mt-2">
                            <label class="col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="totalAmtCoci">Total Amount of COCI:</label>
                            <div class="col-sm col-md-6 my-1">
                              <input class="form-control form-control-sm" name="totalAmtCoci" type="text" :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-5"></div>
                          <div class="form-row mb-5">
                            <label class="col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="amtToDisburse">Amount to Disburse:</label>
                            <div class="col-sm col-md-6 my-1">
                              <input class="form-control form-control-sm" name="cash" type="text" v-model="cash" :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-5"></div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="row no-gutters mt-2">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">E<u>x</u>planation</h5>
                          <textarea class="form-control form-control-sm" name="explanation" rows="5" v-model="transsum.explanation" :readonly="readOnly"></textarea>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <ul class="nav nav-tabs justify-content-start">
                      <li class="nav-item">
                        <a href="#encashentries" class="nav-link active" data-toggle="tab">
                          <span><u>G</u>L/SL Entries</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#encashcocidetails" class="nav-link" data-toggle="tab">
                          <span><u>C</u>OCI Details</span>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="encashentries">
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">SC</th>
                                <th scope="col">Acct Description</th>
                                <th scope="col">G/L Acct Code</th>
                                <th scope="col">Acct Num</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="difference">Difference:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="difference" v-model="transsum.pointsPayment" type="text" :readonly="readOnly">
                          </div>
                          <label class="ml-sm-4 col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="debit">Debit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="debitvalue" v-model="transsum.cashPayment" type="text" :readonly="readOnly">
                          </div>
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="credit">Credit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="creditvalue" v-model="transsum.creditPayment" type="text" :readonly="readOnly">
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="encashcocidetails">
                        <p>It Works!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="transferfrom">
                <div class="row no-gutters align-items-stretch mt-2">
                  <div class="col-4 mr-4">
                    <div class="row no-gutters">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <div class="form-row mt-2">
                            <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="source">Source:</label>
                            <div class="col-sm col-md-6 my-1">
                              <select class="custom-select custom-select-sm" name="destination">
                                <option disabled>(select one)</option>
                                <option value>Cashier</option>
                                <option value>Teller</option>
                                <option value>Vault</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="transfers">Transfers:</label>
                            <div class="col-sm col-md-6 my-1">
                              <input class="form-control form-control-sm" name="transfers" type="text" :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-5">
                            <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="controlNum">Control Number:</label>
                            <div class="col-sm my-1"></div>
                          </div>
                          <div class="form-row mb-4"></div>
                          <div class="form-row">
                            <div class="col">
                              <h3 class="mt-0 text-center">CASH</h3>
                            </div>
                            <div class="col">
                              <h3 class="mt-0 text-center">COCI</h3>
                            </div>
                            <div class="col">
                              <h3 class="mt-0 text-center">TOTAL</h3>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col">
                              <input class="form-control form-control-sm" name="cashPayment" type="text" v-model="transsum.cashPayment" :readonly="readOnly">
                            </div>
                            <div class="offset-4 col">
                              <input class="form-control form-control-sm" name="total" type="text" :value="transsum.cashPayment" :readonly="readOnly">
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="row no-gutters mt-2">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">E<u>x</u>planation</h5>
                          <textarea class="form-control form-control-sm" name="explanation" rows="5" v-model="transsum.explanation" :readonly="readOnly"></textarea>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <ul class="nav nav-tabs justify-content-start">
                      <li class="nav-item">
                        <a href="#transferfromentries" class="nav-link active" data-toggle="tab">
                          <span><u>G</u>L/SL Entries</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#transferfromcocidetails" class="nav-link" data-toggle="tab">
                          <span><u>C</u>OCI Details</span>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="transferfromentries">
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">SC</th>
                                <th scope="col">Acct Description</th>
                                <th scope="col">G/L Acct Code</th>
                                <th scope="col">Acct Num</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="difference">Difference:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="difference" type="text" v-model="transsum.pointsPayment" :readonly="readOnly">
                          </div>
                          <label class="ml-sm-4 col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="debit">Debit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="cashPayment" type="text" v-model="transsum.cashPayment" :readonly="readOnly">
                          </div>
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="credit">Credit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="creditPayment" type="text" v-model="transsum.creditPayment" :readonly="readOnly">
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="transferfromcocidetails">
                        <p>It Works!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="transferto">
                <div class="row no-gutters align-items-stretch mt-2">
                  <div class="col-4 mr-4">
                    <div class="row no-gutters">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <div class="form-row mt-2">
                            <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="destination">Destination:</label>
                            <div class="col-sm col-md-6 my-1">
                              <select class="custom-select custom-select-sm" name="destination" :disabled="selectDisabled">
                                <option disabled>(select one)</option>
                                <option value>Cashier</option>
                                <option value>Teller</option>
                                <option value>Vault</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row mb-5">
                            <label class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="username">User Name:</label>
                            <div class="col-sm col-md-6 my-1">
                              <input class="form-control form-control-sm" name="username" type="text" :readonly="readOnly">
                            </div>
                          </div>
                          <div class="form-row mb-5"></div>
                          <div class="form-row mb-4"></div>
                          <div class="form-row">
                            <div class="col">
                              <h3 class="mt-0 text-center">CASH</h3>
                            </div>
                            <div class="col">
                              <h3 class="mt-0 text-center">COCI</h3>
                            </div>
                            <div class="col">
                              <h3 class="mt-0 text-center">TOTAL</h3>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col">
                              <input class="form-control form-control-sm" name="cash" type="text" v-model="cash" :readonly="readOnly">
                            </div>
                            <div class="col">
                              <input class="form-control form-control-sm" name="coci" type="text" v-model="coci" :readonly="readOnly">
                            </div>
                            <div class="col">
                              <input class="form-control form-control-sm" name="total" type="text" :value="total = Number(cash) + Number(coci)" :readonly="readOnly">
                            </div>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="row no-gutters mt-2">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">E<u>x</u>planation</h5>
                          <textarea class="form-control form-control-sm" name="explanation" rows="5" v-model="transsum.explanation" :readonly="readOnly"></textarea>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <ul class="nav nav-tabs justify-content-start">
                      <li class="nav-item">
                        <a href="#transfertoentries" class="nav-link active" data-toggle="tab">
                          <span><u>G</u>L/SL Entries</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#transfertococidetails" class="nav-link" data-toggle="tab">
                          <span><u>C</u>OCI Details </span>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="transfertoentries">
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">SC</th>
                                <th scope="col">Acct Description</th>
                                <th scope="col">G/L Acct Code</th>
                                <th scope="col">Acct Num</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="difference">Difference:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="difference" type="text" v-model="transsum.pointsPayment" :readonly="readOnly">
                          </div>
                          <label class="ml-sm-4 col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="debit">Debit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="cashPayment" type="text" v-model="transsum.cashPayment" :readonly="readOnly">
                          </div>
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="credit">Credit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="creditPayment" type="text" v-model="transsum.creditPayment" :readonly="readOnly">
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="transfertococidetails">
                        <p>It Works!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="bankdeposit">
                <div class="row no-gutters align-items-stretch">
                  <div class="col-4 mr-4">
                    <div class="row no-gutters">
                      <div class="col">
                        <fieldset class="border p-4 bg-light">
                          <p><b>Depository Bank Account</b></p>
                          <div class="form-row mt-2">
                            <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="transType">Type:</label>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <select name id class="form-control" v-model="depositbanktype">
                                  <option value>(select one)</option>
                                  <option value>Current Acct</option>
                                  <option value>Savings Acct</option>
                                  <option value>Time Deposits</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <select name id class="form-control" v-on:change="display" @select="fetchCashInVault" v-model="glValue" :disabled="selectDisabled">
                                  <option value>(select one)</option>
                                  <option v-for="coa in coas" v-bind:value="coa.coaId">{{ coa.coaDesc }}</option>
                                </select>
                              </div>
                            </div>
                            <br>
                          </div>
                          <br>
                          <label class="col-md-2" for="dept">G/L Acct:</label>
                          <input type="text" :value="glText" class="form-control" readonly>
                          <br>
                          <div class="form-row justify-content-center">
                            <p class="col-md-4 text-center text-truncate"><b>Balance</b></p>
                            <p class="col-md-3 text-center text-truncate"><b>For Deposit</b></p>
                          </div>
                          <div class="form-row">
                            <label class="col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="dept">Cash In Vault:</label>
                            <input class="form-control pymt-control col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" name="cashin" v-model="cashin.cashInVault" type="text" :readonly="readOnly"> &nbsp; &nbsp; &nbsp;
                            <input class="form-control pymt-control col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" name="cash" type="text" v-model="cash" :readonly="readOnly">
                          </div>
                          <div class="form-row">
                            <label class="col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="dept">COCI In Vault:</label>
                            <input class="form-control pymt-control col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" name type="text" :readonly="readOnly"> &nbsp; &nbsp; &nbsp;
                            <input class="form-control pymt-control col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" name="coci" type="text" v-model="coci" :readonly="readOnly">
                          </div>
                          <div class="form-row">
                            <label class="col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="dept">Cash In Bank:</label>
                            <input class="form-control pymt-control col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" name type="text" :readonly="readOnly"> &nbsp; &nbsp; &nbsp;
                            <input class="form-control pymt-control col-md-3 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" name="total" type="text" :value="total = Number(cash) + Number(coci)" :readonly="readOnly">
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="row no-gutters mt-2">
                      <div class="col">
                        <fieldset class="border p-2 bg-light">
                          <h5 class="text-center">E<u>x</u>planation</h5>
                          <textarea class="form-control form-control-sm" name="explanation" rows="5" v-model="transsum.explanation" :readonly="readOnly"></textarea>
                        </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <ul class="nav nav-tabs justify-content-start">
                      <li class="nav-item">
                        <a href="#bankentries" class="nav-link active" data-toggle="tab">
                          <span><u>G</u>L/SL Entries</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#bankcocidetails" class="nav-link" data-toggle="tab">
                          <span><u>C</u>OCI Details</span>
                        </a>
                      </li>
                    </ul>

                    <div class="tab-content">
                      <div class="tab-pane active" id="bankentries">
                        <div class="bg-dark" style="min-height: 339px;">
                          <table class="table table-sm table-bordered custom-table">
                            <thead>
                              <tr>
                                <th scope="col">SC</th>
                                <th scope="col">Acct Description</th>
                                <th scope="col">G/L Acct Code</th>
                                <th scope="col">Acct Num</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Credit</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="difference">Difference:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="difference" type="text" v-model="transsum.pointsPayment" :readonly="readOnly">
                          </div>
                          <label class="ml-sm-4 col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="debit">Debit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="cashPayment" type="text" v-model="transsum.cashPayment" :readonly="readOnly">
                          </div>
                          <label class="col-sm-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="credit">Credit:</label>
                          <div class="col-sm-3 my-1">
                            <input class="form-control form-control-sm" name="creditPayment" type="text" v-model="transsum.creditPayment" :readonly="readOnly">
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="bankcocidetails">
                        <p>It Works!</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="salesreceipt">
                <div class="border p-2 bg-white">
                  <div class="row no-gutters justify-content-left align-items-center-mb">
                    <div class="col-4 mr-1">
                      <fieldset class="border p-2 mb-1">
                        <div class="row">
                          <button class="btn btn-xl btn-primary mb-1" style="margin-left:20px">
                            <i class="fa fa-question-circle mr-1"></i>
                            <span>QTY:1</span>
                          </button>
                          <input type="text" class="form-control col-sm-8" style="margin-left:27px" name="barCode">
                        </div>

                        <div class="row">
                          <label class="col-sm-3 mr-1 p-1 border" style="margin-left:20px">Price</label>
                          <label class="col-sm-8 mr-2 bg-dark p-1 text-light">Location</label>
                        </div>
                      </fieldset>
                    </div>
                    <fieldset>
                      <div>
                        <input type="text" class="border mb-1 col-md-16 p-2 bg-light" placeholder="TOTAL:" style="font-size:65px" disabled>
                      </div>
                    </fieldset>
                  </div>
                  <div class="row no-gutters justify-content-left mb-2">
                    <fieldset class="border p-2 mr-1 col-9">
                      <div class="bg-dark" style="min-height: 339px;">
                        <table class="table table-sm table-bordered custom-table">
                          <thead>
                            <tr>
                              <th scope="col">Item ID</th>
                              <th scope="col">Location</th>
                              <th scope="col">Item Description</th>
                              <th scope="col">Acct Num</th>
                              <th scope="col">Debit</th>
                              <th scope="col">Credit</th>
                            </tr>
                          </thead>
                          <tbody></tbody>
                        </table>
                      </div>
                    </fieldset>

                    <div class="col">
                      <fieldset class="border p-2">
                        <div class="row" style="margin-left:100px;margin-top:50px">
                          <label>test</label>
                        </div>
                        <div class="form-row" style="margin-top:215px">
                          <label for="cashPayment" class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-left text-truncate">Cash:</label>
                          <div class="col-sm my-1">
                            <input name="cashPayment" type="text" class="form-control form-control-sm" :readonly="readOnly">
                          </div>
                        </div>
                        <div class="form-row">
                          <label for="creditPayment" class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-left text-truncate">Credit:</label>
                          <div class="col-sm my-1">
                            <input name="creditPayment" type="text" class="form-control form-control-sm" :readonly="readOnly">
                          </div>
                        </div>
                        <div class="form-row">
                          <label for="chargePointsPayment" class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-left text-truncate">Charge Points:</label>
                          <div class="col-sm my-1">
                            <input name="chargePointsPayment" type="text" class="form-control form-control-sm" :readonly="readOnly">
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row">
                    <button class="btn btn-lg btn-primary mr-2 ml-3">
                      <i class="fa fa-search mr-1"></i>
                      <span>F2 - Search Item</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary mr-2">
                      <i class="fa fa-users mr-1"></i>
                      <span>F3 - Search Client</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary mr-2">
                      <i class="fa fa-location-arrow mr-1"></i>
                      <span>F4 - Location: ST</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary mr-2">
                      <i class="fa fa-dollar-sign mr-1"></i>
                      <span>F5 - Price: RE</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary mr-5">
                      <i class="fa fa-percent mr-1"></i>
                      <span>F6 - Discount</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary">
                      <i class="fa fa-save mr-1"></i>
                      <span>F11 - Save</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="returnreceipt">
                <div class="border p-2 bg-white">
                  <div class="row no-gutters justify-content-left align-items-center-mb">
                    <div class="col-4 mr-1">
                      <fieldset class="border p-2 mb-1">
                        <div class="row">
                          <button class="btn btn-xl btn-primary mb-1" style="margin-left:20px">
                            <i class="fa fa-question-circle mr-1"></i>
                            <span>QTY:1</span>
                          </button>
                          <input type="text" class="form-control col-sm-8" style="margin-left:27px" name="barCode">
                        </div>

                        <div class="row">
                          <label class="col-sm-3 mr-1 p-1 border" style="margin-left:20px">Price</label>
                          <label class="col-sm-8 mr-2 bg-dark p-1 text-light">Location</label>
                        </div>
                      </fieldset>
                    </div>
                    <fieldset>
                      <div>
                        <input type="text" class="border mb-1 col-md-16 p-2 bg-light" placeholder="TOTAL:" style="font-size:65px" disabled>
                      </div>
                    </fieldset>
                  </div>
                  <div class="row no-gutters justify-content-left mb-2">
                    <fieldset class="border p-2 mr-1 col-9">
                      <div class="bg-dark" style="min-height: 339px;">
                        <table class="table table-sm table-bordered custom-table">
                          <thead>
                            <tr>
                              <th scope="col">Item ID</th>
                              <th scope="col">Location</th>
                              <th scope="col">Item Description</th>
                              <th scope="col">Acct Num</th>
                              <th scope="col">Debit</th>
                              <th scope="col">Credit</th>
                            </tr>
                          </thead>
                          <tbody></tbody>
                        </table>
                      </div>
                    </fieldset>

                    <div class="col">
                      <fieldset class="border p-2">
                        <div class="row" style="margin-left:100px;margin-top:50px">
                          <label>test</label>
                        </div>
                        <div class="form-row" style="margin-top:215px">
                          <label
                            for="cashPayment" class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-left text-truncate">Cash:</label>
                          <div class="col-sm my-1">
                            <input name="cashPayment" type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="form-row">
                          <label for="creditPayment" class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-left text-truncate">Credit:</label>
                          <div class="col-sm my-1">
                            <input name="creditPayment" type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                        <div class="form-row">
                          <label for="chargePointsPayment" class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-left text-truncate">Charge Points:</label>
                          <div class="col-sm my-1">
                            <input name="chargePointsPayment" type="text" class="form-control form-control-sm">
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>

                  <div class="row">
                    <button class="btn btn-lg btn-primary mr-2 ml-3">
                      <i class="fa fa-search mr-1"></i>
                      <span>F2 - Search Item</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary mr-2">
                      <i class="fa fa-users mr-1"></i>
                      <span>F3 - Search Client</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary mr-2">
                      <i class="fa fa-location-arrow mr-1"></i>
                      <span>F4 - Location: ST</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary mr-2">
                      <i class="fa fa-dollar-sign mr-1"></i>
                      <span>F5 - Price: RE</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary mr-5">
                      <i class="fa fa-percent mr-1"></i>
                      <span>F6 - Discount</span>
                    </button>
                    
                    <button class="btn btn-lg btn-primary">
                      <i class="fa fa-save mr-1"></i>
                      <span>F11 - Save</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 20px;">
                <button class="btn btn-secondary mr-1" type="submit" v-if="selectDisabled">
                  <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
                </button>
                <button class="btn btn-success mr-1" type="submit" v-else>
                  <i class="fa fa-save mr-1"></i> <span><u>S</u>ave</span>
                </button>

                <button class="btn btn-secondary" type="button" v-if="selectDisabled">
                  <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
                </button>
                <button class="btn btn-outline-primary" type="button" v-else @click="cancel()">
                  <router-link to="/front-office/transaction">
                    <i class="fa fa-times-circle"></i> <span>Canc<u>e</u>l</span>
                  </router-link>
                </button>
              </div>
            </div>

            <!-- LOAN ACCOUNT MODAL-->
            <div class="modal" id="loanaccounts">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <label class="modal-title">Loan Accounts</label>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                    <table class="table table-sm table-bordered table-hover custom-table">
                      <thead>
                        <tr>
                          <th scope="col">SC</th>
                          <th scope="col">ST</th>
                          <th scope="col">Acct No</th>
                          <th scope="col">SE</th>
                          <th scope="col">SN</th>
                          <th scope="col">G/L Acct Code</th>
                          <th scope="col">Acct Descr</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Balance</th>
                          <th scope="col">Uncleared Balance</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr v-for="loanClientAccount in loanClientAccounts" v-bind:key="loanClientAccount.id">
                          <td>{{loanClientAccount.loanSlcCode}}</td>
                          <td>{{loanClientAccount.loanSltCode}}</td>
                          <td>{{loanClientAccount.loanRefNo}}</td>
                          <td></td>
                          <td>{{loanClientAccount.loanStatus}}</td>
                          <td></td>
                          <td>{{loanClientAccount.loanSlcDescr}}</td>
                          <td><input type="text" name="amount" id="" class="form-control" v-model="loanClientAccount.amount"></td>
                          <td>NO POSTING</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <button @click="addAccountLoan(loanClientAccounts)" data-dismiss="modal">SAVE</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- END OF MODAL-->

            <!--AR-->
            <div class="modal" id="araccounts">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <label class="modal-title">AR Accounts</label>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                    <table class="table table-sm table-bordered table-hover custom-table">
                      <thead>
                        <tr>
                          <th scope="col">SC</th>
                          <th scope="col">ST</th>
                          <th scope="col">Acct No</th>
                          <th scope="col">SE</th>
                          <th scope="col">SN</th>
                          <th scope="col">G/L Acct Code</th>
                          <th scope="col">Acct Descr</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Balance</th>
                          <th scope="col">Uncleared Balance</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr v-for="arClientAccount in arClientAccounts" v-bind:key="arClientAccount.id">
                          <td>{{arClientAccount.arSlcCode}}</td>
                          <td>{{arClientAccount.arSltCode}}</td>
                          <td>{{arClientAccount.arRefNo}}</td>
                          <td></td>
                          <td>{{arClientAccount.arStatus}}</td>
                          <td></td>
                          <td>{{arClientAccount.arSlcDescr}}</td>
                          <td><input type="text" name="amount" id="" class="form-control" v-model="arClientAccount.amount"></td>
                          <td>NO POSTING</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <button @click="addAccountAR(arClientAccounts)" data-dismiss="modal">SAVE</button>
                  </div>
                </div>
              </div>
            </div>
            <!--END-->

            <!--SHARE CAPITAL-->
            <div class="modal" id="scaccounts">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <label class="modal-title">SC Accounts</label>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                    <table class="table table-sm table-bordered table-hover custom-table">
                      <thead>
                        <tr>
                          <th scope="col">SC</th>
                          <th scope="col">ST</th>
                          <th scope="col">Acct No</th>
                          <th scope="col">SE</th>
                          <th scope="col">SN</th>
                          <th scope="col">G/L Acct Code</th>
                          <th scope="col">Acct Descr</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Balance</th>
                          <th scope="col">Uncleared Balance</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr v-for="scClientAccount in scClientAccounts" v-bind:key="scClientAccount.id">
                          <td>{{scClientAccount.scSlcCode}}</td>
                          <td>{{scClientAccount.scSltCode}}</td>
                          <td>{{scClientAccount.scRefNo}}</td>
                          <td></td>
                          <td>{{scClientAccount.scStatus}}</td>
                          <td>{{scClientAccount.scGLAcct}}</td>
                          <td>{{scClientAccount.slTypeMDesc}}</td>
                          <td><input type="text" name="amount" id="" class="form-control" v-model="scClientAccount.amount"></td>
                          <td>NO POSTING</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <button @click="addAccountSC(scClientAccounts)" data-dismiss="modal">SAVE</button>
                  </div>
                </div>
              </div>
            </div>
            <!--END-->

            <!--SAVINGS DEPOSIT-->
            <div class="modal" id="sdaccounts">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <label class="modal-title">SD Accounts</label>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                    <table class="table table-sm table-bordered table-hover custom-table">
                      <thead>
                        <tr>
                          <th scope="col">SC</th>
                          <th scope="col">ST</th>
                          <th scope="col">Acct No</th>
                          <th scope="col">SE</th>
                          <th scope="col">SN</th>
                          <th scope="col">G/L Acct Code</th>
                          <th scope="col">Acct Descr</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Balance</th>
                          <th scope="col">Uncleared Balance</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr v-for="sdClientAccount in sdClientAccounts" v-bind:key="sdClientAccount.id">
                          <td>{{sdClientAccount.sdSlcCode}}</td>
                          <td>{{sdClientAccount.sdSltCode}}</td>
                          <td>{{sdClientAccount.sdRefNo}}</td>
                          <td></td>
                          <td>{{sdClientAccount.sdStatus}}</td>
                          <td></td>
                          <td>{{sdClientAccount.sdSlcDescr}}</td>
                          <td><input type="text" name="amount" id="" class="form-control" v-model="sdClientAccount.amount"></td>
                          <td>NO POSTING</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    <button @click="addAccountSD(sdClientAccounts)" data-dismiss="modal">SAVE</button>
                  </div>
                </div>
              </div>
            </div>
            <!--END-->

             <!--TIME DEPOSIT MODAL-->
            <div class="modal" id="tdaccounts">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <label class="modal-title">TD Accounts</label>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <div class="modal-body">
                    <table class="table table-sm table-bordered table-hover custom-table">
                      <thead>
                        <tr>
                          <th scope="col">BR</th>
                          <th scope="col">Description</th>
                          <th scope="col">Amount</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr v-for="tdClientAccount in tdClientAccounts" v-bind:key="tdClientAccount.id">
                          <!-- <td>{{ scClientAccount.loanBrCode }}</td>
                          <td>{{ scClientAccount.loanPurposeDesc }}</td> -->
                          <!-- <td><input type="text" name="" id="" class="form-control" v-model="tdClientAccount.scMinBal"></td> -->
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--END-->
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      transsum: {
        trBrCode: "",
        trYear: "",
        trModule: 8,
        trCode: "",
        trCtlNo: "",
        trDocNo: "",
        invTrCtlNo: "",
        trDate: "",
        trTime: "",
        trClientId: this.$route.params.id,
        lastName: "",
        firstName: "",
        middleName: "",
        department: "",
        batchNo: "",
        explanation: "",
        clientName: "",
        andorName: "",
        isFo: "",
        DateTimeAdded: "",
        cashPayment: "",
        creditPayment: "",
        pointsPayment: ""
      },

      edit: false,

      client: {
        brCode: "",
        clientId: "",
        chkDgt: "",
        lastName: "",
        firstName: "",
        middleName: "",
        alertLevel: "",
        department: "",
        acctType: "",
        accountName: "",
        jointType: "",
        clientType: "",
        accountStatus: "",
        referenceId: "",
        dateOpened: ""
      },

      totalLoan: {
        totalAmountLoan: ""
      },

      totalAr: {
        totalAmountAr: ""
      },

      totalShare: {
        totalAmountShareCapital: ""
      },

      totalSavings: {
        totalAmountSavingsDeposit: ""
      },

      totalTimeDeposit: {
        totalAmountTimeDeposit: ""
      },

      cashin: {
        cashInVault: ""
      },

      loanClientAcct: {
        loanPurpose: "",
        loanPurposeDesc: ""
      },

      transferFroms: [],

      transsums: [],

      scCode: "",
      acctDescription: "",
      glAcctCode: "",
      acctNum: "",
      debit: "",
      credit: "",
      difference: "",
      total: "",
      cash: "",
      coci: "",
      depositbanktype: "",
      entries: [],
      glValue: "",
      gldesc: "",
      glText: "",
      amount: "",

      transTypeId: "",
      deptId: "",
      tanstype: {},
      department: {},

      coas: [],
      loanClientAccounts: [],
      arClientAccounts:[],
      scClientAccounts:[],
      sdClientAccounts:[],
      tdClientAccounts:[],
      accounts:[],
      branches: [],
      clientAccount:{},

      cociEntries:[],
      cociDetails:{
        cociForm:"",
        cociCheckNum:"",
        cociBankCode:"",
        cociTypeOfCheck:"",
        cociNumDays:"",
        cociDateCheck:"",
        cociAmount:""
      },
      webId: "",
      webId2: "",

      successAdd: "",
      selectDisabled: true,
      readOnly: true,
    };
  },

  mounted() {
    this.trCode = this.$route.params.trCode;
    this.trYear = this.$route.params.trYear;
    this.trCtlNo = this.$route.params.trCtlNo;
    this.trDocNo = this.$route.params.trDocNo;
    if (this.trCode > 0 && this.trYear > 0 && this.trCtlNo > 0 && this.trDocNo > 0) {
      this.fetchTranssum(this.trCode, this.trYear, this.trCtlNo, this.trDocNo);
      this.fetchTranssums(this.trCode, this.trYear, this.trCtlNo, this.trDocNo);
    }

    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
      this.fetchTotalAmountLoan(this.paramId);
      this.fetchTotalAmountAr(this.paramId);
      this.fetchTotalAmountShare(this.paramId);
      this.fetchTotalAmountSavings(this.paramId);
      this.fetchTotalAmountTime(this.paramId);
      this.fetchLoanAccounts(this.paramId);
      this.fetchAR(this.paramId);
      this.fetchShareCapital(this.paramId);
      this.fetchSavingsDeposit(this.paramId);
      this.fetchTimeDeposit(this.paramId);
    }

    this.fetchCashInVault();
  },

  created() {
    this.transactType();
    this.departmentList();
    this.fetchCoas();
    this.fetchBranches();
  },

  methods: {
    fetchTranssum(trCode, trYear, trCtlNo, trDocNo) {
      fetch(`/api/transSum/${trCode}/${trYear}/${trCtlNo}/${trDocNo}`)
        .then(res => res.json())
        .then(res => {
          this.transsum = res.data[0];
          console.log(this.transsum);
        })
        .catch(err => console.log(err));
    },

    fetchTranssums(trCode, trYear, trCtlNo, trDocNo) {
      fetch(`/api/transSum/${trCode}/${trYear}/${trCtlNo}/${trDocNo}`)
        .then(res => res.json())
        .then(res => {
          this.transsums = res.data;
          console.log(this.transsums);
        })
        .catch(err => console.log(err));
    },

    fetchClient(id) {
      fetch(`/api/client/${id}`)
        .then(res => res.json())
        .then(res => {
          this.client = res.data[0];
          this.webId = ("00000000"+this.client.clientId).slice(-8);
          this.webId2 = "W"+this.webId;
          console.log(this.client);
        })
        .catch(err => console.log(err));
    },

    fetchTotalAmountLoan(id) {
      fetch(`/api/totalAmountLoan/${id}`)
        .then(res => res.json())
        .then(res => {
          this.totalLoan = res.data[0];
          if (
            this.totalLoan.totalAmountLoan === "" ||
            this.totalLoan.totalAmountLoan === null
          ) {
            this.totalLoan.totalAmountLoan = "0.00";
          }
          console.log(this.totalLoan);
        })
        .catch(err => console.log(err));
    },

    fetchTotalAmountAr(id) {
      fetch(`/api/totalAmountAr/${id}`)
        .then(res => res.json())
        .then(res => {
          this.totalAr = res.data[0];
          if (this.totalAr.totalAmountAr === "" || this.totalAr.totalAmountAr === null) {
            this.totalAr.totalAmountAr = "0.00";
          }
          console.log(this.totalAr);
        })
        .catch(err => console.log(err));
    },

    fetchTotalAmountShare(id) {
      fetch(`/api/totalAmountShareCapital/${id}`)
        .then(res => res.json())
        .then(res => {
          this.totalShare = res.data[0];
          if (this.totalShare.totalAmountShareCapital === "" || this.totalShare.totalAmountShareCapital === null) {
            this.totalShare.totalAmountShareCapital = "0.00";
          }
          console.log(this.totalShare);
        })
        .catch(err => console.log(err));
    },

    fetchTotalAmountTime(id) {
      fetch(`/api/totalAmountTimeDeposit/${id}`)
        .then(res => res.json())
        .then(res => {
          this.totalTimeDeposit = res.data[0];
          if (this.totalTimeDeposit.totalAmountTimeDeposit === "" || this.totalTimeDeposit.totalAmountTimeDeposit === null) {
            this.totalTimeDeposit.totalAmountTimeDeposit = "0.00";
          }
        })
        .catch(err => console.log(err));
    },

    fetchTotalAmountSavings(id) {
      fetch(`/api/totalAmountSavingsDeposit/${id}`)
        .then(res => res.json())
        .then(res => {
          this.totalSavings = res.data[0];
          if (this.totalSavings.totalAmountSavingsDeposit === "" || this.totalSavings.totalAmountSavingsDeposit === null) {
            this.totalSavings.totalAmountSavingsDeposit = "0.00";
          }
          console.log(this.totalSavings);
        })
        .catch(err => console.log(err));
    },

    fetchLoanAccounts(id) {
      fetch(`/api/loans/${id}`)
        .then(res => res.json())
        .then(res => {
          this.loanClientAccounts = res.data;
          for(var i=0;i < this.loanClientAccounts.length;i++){
            this.loanClientAccounts[i].loanRefNo = ("00000000" + this.loanClientAccounts[i].loanRefNo).slice(-8);
          }
        })
        .catch(err => console.log(err));
    },

    fetchAR(id){
      fetch(`/api/ars/${id}`)
      .then(res => res.json())
      .then(res => {
        this.arClientAccounts = res.data;
        for(var i=0;i < this.arClientAccounts.length;i++){
          this.arClientAccounts[i].arRefNo = ("00000000" + this.arClientAccounts[i].arRefNo).slice(-8);
        }
      })
      .catch(err => console.log(err));
    },

    fetchShareCapital(id){
      fetch(`/api/scsEmpty/${id}`)
        .then(res => res.json())
        .then(res => {
          this.scClientAccounts = res.data;
          for(var i=0;i < this.scClientAccounts.length;i++){
            this.scClientAccounts[i].scRefNo = ("00000000" + this.scClientAccounts[i].scRefNo).slice(-8);
          }
        })
        .catch(err => console.log(err));
    },

    fetchSavingsDeposit(id){
      fetch(`/api/sd/clientId=${id}`)
        .then(res => res.json())
        .then(res => {
          this.sdClientAccounts = res.data;
          for(var i=0;i < this.sdClientAccounts.length;i++){
            this.sdClientAccounts[i].sdRefNo = ("00000000" + this.sdClientAccounts[i].sdRefNo).slice(-8);
          }
        })
        .catch(err => console.log(err));
    },

    fetchTimeDeposit(id){
      fetch(`tds/clientId=${id}`)
        .then(res => res.json())
        .then(res => {
          this.tdClientAccounts = res.data;
        })
        .catch(err => console.log(err))
    },

    fetchBranches() {
      fetch("/api/branches")
          .then(res => res.json())
          .then(res => {
              this.branches = res.data;
              console.log(this.branches);
          })
          .catch(err => console.log(err));
    },

    addAccountLoan(objArray){
      var loanAccount;
      var clientAccount = {};
      for(let i = 0;i < objArray.length; i++){
        if(objArray[i].amount > 0){
          loanAccount = objArray[i];
          clientAccount.slcCode = loanAccount.loanSlcCode;
          clientAccount.acctDescr = loanAccount.loanSlcDescr;
          clientAccount.glAcctCode = "NONE";
          clientAccount.acctNum = loanAccount.loanRefNo;
          clientAccount.amount = loanAccount.amount;
          clientAccount.type = "loan";
          objArray[i].loanPamt = parseInt(loanAccount.amount) + parseInt(loanAccount.loanPamt);
          this.accounts.push(clientAccount);
          console.log(this.accounts);
        }
      }
    },

    addAccountAR(objArray){
      var arAccount;
      var clientAccount = {};
      for(let i = 0;i < objArray.length; i++){
        if(objArray[i].amount > 0){
          arAccount = objArray[i];
          clientAccount.slcCode = arAccount.arSlcCode;
          clientAccount.acctDescr = arAccount.arSlcDescr;
          clientAccount.glAcctCode = "NONE";
          clientAccount.acctNum = arAccount.arRefNo;
          clientAccount.amount = arAccount.amount;
          clientAccount.type = "ar";
          objArray[i].arPamt = parseInt(arAccount.amount) + parseInt(arAccount.arPamt);
          this.accounts.push(clientAccount);
          console.log(this.accounts);
        }
      }
    },
    
    addAccountSC(objArray){
      var scAccount;
      var clientAccount = {};
      var amount;
      for(let i = 0;i < objArray.length; i++){
        if(objArray[i].amount > 0){
          scAccount = objArray[i];
          clientAccount.slcCode = scAccount.scSlcCode;
          clientAccount.acctDescr = scAccount.scSlcDescr;
          clientAccount.glAcctCode = "NONE";
          clientAccount.acctNum = scAccount.scRefNo;
          clientAccount.amount = scAccount.amount;
          this.transsum.creditPayment = clientAccount.amount;
          this.total = clientAccount.amount;
          clientAccount.type = "sc";
          if(scAccount.scMinBal == null){
            scAccount.scMinBal = 0;
          }
          objArray[i].scMinBal = parseInt(scAccount.amount) + parseInt(scAccount.scMinBal);
          this.accounts.push(clientAccount);
          console.log(this.accounts);
        }
      }
    },

    addAccountSD(objArray){
      var sdAccount;
      var clientAccount={};
      for(let i = 0;i < objArray.length; i++){
        if(objArray[i].amount > 0){
          sdAccount = objArray[i];
          clientAccount.slcCode = sdAccount.sdSlcCode;
          clientAccount.acctDescr = sdAccount.sdSlcDescr;
          clientAccount.glAcctCode = "NONE";
          clientAccount.acctNum = sdAccount.sdRefNo;
          clientAccount.amount = sdAccount.amount;
          clientAccount.type = "sd";
          objArray[i].sdMinBal = parseInt(sdAccount.amount) + parseInt(sdAccount.sdMinBal);
          this.accounts.push(clientAccount);
          console.log(this.accounts);
        }
      }
    },

    fetchCoas() {
      fetch("/api/coas")
        .then(res => res.json())
        .then(res => {
          this.coas = res.data;
          console.log(this.coas);
        })
        .catch(err => console.log(err));
    },

    fetchCashInVault() {
      fetch("/api/cashInVault")
        .then(res => res.json())
        .then(res => {
          this.cashin = res.data[0];
          console.log(this.cashin);
        })
        .catch(err => console.log(err));
    },

    display() {
      var values = this.coas.map(function(o) {
        return o.coaId;
      });
      var index = values.indexOf(this.glValue);
      this.glText = this.coas[index].coaDesc;
    },

    summary() {
      this.transsum.trCode = "";
    },

    receipt() {
      this.transsum.trCode = 10;
      this.transsum.trModule = 3;
    },

    transferFrom() {
      this.transsum.trCode = 31;
      this.transsum.trModule = 4;
    },

    transferTo() {
      this.transsum.trCode = 32;
      this.transsum.trModule = 4;
    },

    bankDeposit() {
      this.transsum.trCode = 33;
      this.transsum.trModule = 5;
    },

    disbursement() {
      this.transsum.trCode = 24;
      this.transsum.trModule = 2;
    },

    withdrawal() {
      this.transsum.trCode = 23;
      this.transsum.trModule = 2;
    },

    encashment() {
      this.transsum.trCode = 25;
      this.transsum.trModule = 2;
    },

    inertTransSum() {

      if (this.edit === false) {
        this.total = Number(this.cash) + Number(this.coci);
        this.transsum.cashPayment = this.cash;
        this.transsum.pointsPayment =
          Number(this.transsum.cashPayment) -
          Number(this.transsum.creditPayment);
        fetch("/api/transSums", {
          method: "post",
          body: JSON.stringify(this.transsum),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            this.transsum.trBrCode = "";
            this.transsum.trYear = "";
            this.transsum.trModule = "";
            this.transsum.trCode = "";
            this.transsum.trCtlNo = "";
            this.transsum.trDocNo = "";
            this.transsum.invTrCtlNo = "";
            this.transsum.trClientId = "";
            this.transsum.batchNo = "";
            this.transsum.explanation = "";
            this.transsum.clientName = "";
            this.transsum.andorName = "";
            this.transsum.isFo = "";
            this.transsum.cashPayment = "";
            this.transsum.creditPayment = "";
            this.transsum.pointsPayment = "";
            this.cash = "";
            this.coci = "";
            this.total = "";
            this.successAdd = true;
            this.readOnly = true;
            this.selectDisabled = true;
            setTimeout(() => {
              this.successAdd = false;
            }, 2000),
            console.log("Trans Added");
        })
        .then(() => {
          this.updateSc();
          this.updateSd();
        })
        .catch(err => console.log(err));
      } else {
        fetch("/api/transSum", {
          method: "put",
          body: JSON.stringify(this.transsum),
          headers: { "content-type": "application/json" }
        }).then(res => {
          console.log("TransSum Updated");
          this.fetchTranssum(
            this.$route.params.trCode,
            this.$route.params.trYear,
            this.$route.params.trCtlNo,
            this.$route.params.trDocNo
          );
        });

        for(let i = 0; i < this.scClientAccounts.length; i++){
          if(this.scClientAccounts[i].amount){
            fetch("/api/sc", {
              method: "put",
              body: JSON.stringify(this.scClientAccounts[i]),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("SC Updated");
            })
            .catch(err => console.log(err));
          }
        }

        for(let i = 0; i < this.sdClientAccounts.length; i++){
          if(this.sdClientAccounts[i].amount){
            fetch("/api/sd", {
              method: "put",
              body: JSON.stringify(this.sdClientAccounts[i]),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("SD Updated");
            })
            .catch(err => console.log(err));
          }
        }
        
      }
    },

    updateSc() {
      for(let i = 0; i < this.scClientAccounts.length; i++){
          if(this.scClientAccounts[i].amount){
            fetch("/api/sc", {
              method: "put",
              body: JSON.stringify(this.scClientAccounts[i]),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("SC Updated");
            })
            .catch(err => console.log(err));
          }
        }
    },

    updateSd() {
      for(let i = 0; i < this.sdClientAccounts.length; i++){
          if(this.sdClientAccounts[i].amount){
            fetch("/api/sd", {
              method: "put",
              body: JSON.stringify(this.sdClientAccounts[i]),
              headers: { "content-type": "application/json" }
            })
            .then(res => {
              console.log("SD Updated");
            })
            .catch(err => console.log(err));
          }
        }
    },

    insertNew() {
      this.readOnly = false;
      this.selectDisabled = false;
      this.transsum.trYear = moment(new Date()).format("YYYY"),
      this.transsum.trCode = "",
      this.transsum.trCtlNo = "",
      this.transsum.trDocNo = "",
      this.transsum.invTrCtlNo = "",
      this.transsum.trDate = moment(new Date()).format("YYYY-MM-DD"),
      this.transsum.trTime = moment(new Date()).format("hh:mm:ss"),
      this.transsum.trClientId = this.$route.params.id,
      this.transsum.lastName = "",
      this.transsum.firstName = "",
      this.transsum.middleName = "",
      this.transsum.department = "",
      this.transsum.batchNo = moment(new Date()).format("YYYYMMDD"),
      this.transsum.explanation = "",
      this.transsum.clientName = "",
      this.transsum.andorName = "",
      this.transsum.isFo = "",
      this.transsum.DateTimeAdded = moment(new Date()).format("YYYY-MM-DD hh:mm:ss"),
      this.transsum.cashPayment = "",
      this.transsum.creditPayment = "",
      this.transsum.pointsPayment = ""
    },

    editTransSum(transsum) {
      this.edit = true;
      this.transsum.trBrCode = transsum.trBrCode;
      this.transsum.trYear = transsum.trYear;
      this.transsum.trModule = transsum.trModule;
      this.transsum.trCode = transsum.trCode;
      this.transsum.trCtlNo = transsum.trCtlNo;
      this.transsum.trDocNo = transsum.trDocNo;
      this.transsum.invTrCtlNo = transsum.invTrCtlNo;
      this.transsum.trClientId = transsum.trClientId;
      this.transsum.batchNo = transsum.batchNo;
      this.transsum.explanation = transsum.explanation;
      this.transsum.clientName = transsum.clientName;
      this.transsum.andorName = transsum.andorName;
      this.transsum.isFo = transsum.isFo;
      this.transsum.cashPayment = transsum.cashPayment;
      this.transsum.creditPayment = transsum.creditPayment;
      this.transsum.pointsPayment = transsum.pointsPayment;
    },

    cancel() {
      this.readOnly = true;
      this.selectDisabled = true;
      this.transsum.trYear = "",
      this.transsum.trCode = "",
      this.transsum.trCtlNo = "",
      this.transsum.trDocNo = "",
      this.transsum.invTrCtlNo = "",
      this.transsum.trDate = "",
      this.transsum.trTime = "",
      this.transsum.trClientId = "",
      this.transsum.lastName = "",
      this.transsum.firstName = "",
      this.transsum.middleName = "",
      this.transsum.department = "",
      this.transsum.batchNo = "",
      this.transsum.explanation = "",
      this.transsum.clientName = "",
      this.transsum.andorName = "",
      this.transsum.isFo = "",
      this.transsum.DateTimeAdded = "",
      this.transsum.cashPayment = "",
      this.transsum.creditPayment = "",
      this.transsum.pointsPayment = ""
    },

    addGlSlEntries() {
      var diff = "";

      var glSlEntries = {
        scCode: this.scCode,
        acctDescription: this.acctDescription,
        glAcctCode: this.glAcctCode,
        acctNum: this.acctNum,
        debit: this.debit,
        credit: this.credit
      };

      this.entries.push(glSlEntries);

      this.transsum.cashPayment =
        Number(this.transsum.cashPayment) + Number(glSlEntries.debit);
      this.transsum.creditPayment =
        Number(this.transsum.creditPayment) + Number(glSlEntries.credit);

      diff =
        Number(this.transsum.cashPayment) - Number(this.transsum.creditPayment);
      this.transsum.pointsPayment = diff;

      this.scCode = "";
      this.acctDescription = "";
      this.glAcctCode = "";
      this.acctNum = "";
      this.debit = "";
      this.credit = "";
    },

    addCOCIEntries() {
      this.cociEntries.push(this.cociDetails);
      this.cociDetails={};
    },

    transactType() {
      axios
        .get("/api/transTypes")
        .then(response => {
          this.tanstype = response.data;
          console.log(this.tanstype);
        })
        .catch(error => console.log(error));
    },

    departmentList() {
      axios
        .get("/api/departments")
        .then(response => {
          this.department = response.data;
          console.log(this.department);
        })
        .catch(error => console.log(error));
    }
  }
};
</script>
<style>
.transaction {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.text-right {
  text-align: right !important;
}
</style>
