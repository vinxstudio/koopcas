<template>
  <div class="loans-app-module">
       <form @submit.prevent="insertToDB">
    <nav class="navbar navbar-expand-lg p-1" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 300px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Find
              <span class="float-right">Ctrl+F</span>
            </a>
            <a href="#" class="dropdown-item">
              New
              <span class="float-right">Ctrl+N</span>
            </a>
            <a href="#" class="dropdown-item">
              Edit
              <span class="float-right">Ctrl+F</span>
            </a>
            <a href="#" class="dropdown-item">
              Delete
              <span class="float-right">F4</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px">
            </div>-->
            <a href="#" class="dropdown-item">
              Save
              <span class="float-right">F11</span>
            </a>
            <a href="#" class="dropdown-item">
              Exit
              <span class="float-right">Ctrl+X</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Others</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 300px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Set System Date
              <span class="float-right">F5</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px">
            </div>-->
            <a href="#" class="dropdown-item">
              Find Client
              <span class="float-right">Ctrl+F2</span>
            </a>
            <a href="#" class="dropdown-item">
              Client Master
              <span class="float-right">Ctrl+F8</span>
            </a>
            <a href="#" class="dropdown-item">
              Loan Master
              <span class="float-right">F4</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px">
            </div>-->
            <a href="#" class="dropdown-item">
              Others Account Master
              <span class="float-right">Shift+F8</span>
            </a>
            <a href="#" class="dropdown-item">
              S/L Account Summary
              <span class="float-right">F7</span>
            </a>
            <a href="#" class="dropdown-item">
              Interest/Fines Worksheet
              <span class="float-right">F7</span>
            </a>
            <a href="#" class="dropdown-item">
              Loan History
              <span class="float-right">F7</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px;margin-bottom:50px">
            </div>-->
            <a href="#" class="dropdown-item">
              Amortization
              <span class="float-right">Shift+F7</span>
            </a>
            <a href="#" class="dropdown-item">
              Promissory Note
              <span class="float-right">Ctrl+F9</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px">
            </div>-->
            <a href="#" class="dropdown-item">
              Co-MAKER TO Inquiry
              <span class="float-right">Shift+F11</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 200px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Activity Logs
              <span class="float-right">Ctrl+T</span>
            </a>
          </div>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <!--FIND-->
          <button class="btn btn-sm btn-outline-primary mr-4" type="button" data-toggle="modal" data-target="#findLoanAppModal">
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </button>
          <!--NEW-->
          <button
            class="btn btn-sm btn-outline-primary mr-1"
            type="button"
            v-if="this.$route.params.id"
            @click="insertNew"
          >
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled v-else>
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          <!--END OF NEW-->
          <button class="btn btn-sm btn-outline-primary mr-1" @click="editForm(loan)" type="button" v-if="this.$route.params.laId">
            <i class="fa fa-pencil-square-o mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button" v-else>
            <i class="fa fa-pencil-square-o mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-4" v-if="this.$route.params.laId" type="button">
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-4" disabled type="button" v-else>
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-1" type="submit" @click="saveLoan" v-if="this.loan.statusId || this.edit">
            <i class="fa fa-floppy mr-1"></i>
            <span>
              <u>S</u>ave
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" disabled v-else>
            <i class="fa fa-floppy mr-1"></i>
            <span>
              <u>S</u>ave
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#cancelModal" type="button">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </button>
        </li>
      </ul>
    </nav>
  <div class="alert alert-success" v-if="this.successAdd" transition="expand">Loan Successfully Added.</div>
    <div class="form-row my-2">
      <div class="col">
        <div class="form-row">
          <div class="col-auto mt-2">
            <!--APPROVE-->
            <button class="btn btn-success btn-block p-3"  @click="updateLoanStatus(2)" v-if="this.$route.params.laId">
              <i class="fa fa-thumbs-up mr-1"></i>
              <span>
                <u>A</u>pprove
              </span>
            </button>
            <button class="btn btn-secondary btn-block p-3" disabled v-else>
              <i class="fa fa-thumbs-up mr-1"></i>
              <span>
                <u>A</u>pprove
              </span>
            </button>
          </div>
          <div class="col-auto mt-2">
            <!--DISAPPROVE-->
            <button class="btn btn-dark-blue btn-block p-3" @click="updateLoanStatus(3)" v-if="this.$route.params.laId">
              <i class="fa fa-thumbs-down mr-1"></i>
              <span>Disapprove</span>
            </button>
            <button class="btn btn-secondary btn-block p-3" disabled v-else>
              <i class="fa fa-thumbs-down mr-1"></i>
              <span>Disapprove</span>
            </button>
          </div>
          <div class="col-auto mt-2">
            <!--CANCEL APPLICATION-->
            <button class="btn btn-outline-dark-blue btn-block p-3" @click="updateLoanStatus(4)" v-if="this.$route.params.laId">
              <i class="fa fa-ban mr-1"></i>
              <span>Cancel Application</span>
            </button>
            <button class="btn btn-secondary btn-block p-3" disabled v-else>
              <i class="fa fa-ban mr-1"></i>
              <span>Cancel Application</span>
            </button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="form-row">
          <div class="col-auto mt-2">
            <!--PROCESS TRANSACTION-->
            <button class="btn btn-dark-blue btn-block p-3" v-if="this.$route.params.laId">
              <i class="fa fa-share mr-1"></i>
              <span>
                <u>P</u>rocess Transaction
              </span>
            </button>
            <button class="btn btn-secondary btn-block p-3" disabled v-else>
              <i class="fa fa-share mr-1"></i>
              <span>
                <u>P</u>rocess Transaction
              </span>
            </button>
          </div>
          <div class="col-auto mt-2">
            <!--LOAN FORMS-->
            <button class="btn btn-dark-blue btn-block p-3" v-if="this.$route.params.laId">
              <i class="fa fa-copy mr-1"></i>
              <span>
                <u>L</u>oan Forms
              </span>
            </button>
            <button class="btn btn-secondary btn-block p-3" disabled v-else>
              <i class="fa fa-copy mr-1"></i>
              <span>
                <u>L</u>oan Forms
              </span>
            </button>
          </div>
          <div class="col">
            <div class="form-row ml-2">
              <label
                class="col-md-4 col-form-label col-form-label-sm mt-1 text-truncate"
                for="approvedBy"
              >Approved By:</label>
              <div class="col-sm my-1">
                <input v-model="loan.apprvBy" class="form-control form-control-sm" name type="text" readonly>
              </div>
            </div>
            <div class="form-row ml-2">
              <label
                class="col-md-4 col-form-label col-form-label-sm mt-1 text-truncate"
                for="approvedDate"
              >Approved Date:</label>
              <div class="col-sm my-1">
                <input v-model="loan.apprvDate" class="form-control form-control-sm" name type="date" readonly>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="form-row align-items-stretch">
      <div class="col-md-4">
        <div class="bg-light">
          <fieldset class="border p-2">
            <h5>Account Info</h5>
            <div class="form-row justify-content-between">
              <!--HIDDEN INPUT-->
              <input type="hidden" v-model="loan.brCode">
              <input type="hidden" v-model="loan.sltCode">
              <input type="hidden" v-model="loan.slcCode">
              <input type="hidden" v-model="loan.refNo">
              <input type="hidden" v-model="loan.clientId">
              <!--CLIENT ID-->
              <div class="col-sm my-1">
                <label class="col-form-label col-form-label-sm" for="clientId">Client ID:</label>
                <input
                  class="form-control form-control-sm bg-light-green border-0"
                  v-model="client.clientId"
                  name="clientId"
                  type="text"
                  readonly
                >
              </div>
              <!--FIND CLIENT-->
              <div class="col-sm my-1 d-flex align-items-end justify-content-end">
                <div v-if="this.$route.params.id">
                  <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
                    <i class="fa fa-users mr-1"></i>
                    <span>Find</span>
                  </button>
                </div>
                <div v-else>
                  <a href="/loans/loans-app-search">
                    <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                      <i class="fa fa-users mr-1"></i>
                      <span>Find</span>
                    </button>
                  </a>
                </div>
                <a href="/loans/loans-application-module">
                <button class="btn btn-sm btn-outline-primary" type="button">
                  <i class="fa fa-ban mr-1"></i>
                  <span>Clear</span>
                </button>
                </a>
              </div>
            </div>

            <div class="form-row justify-content-between">
              <!--LAST NAME-->
              <div class="col-sm my-1">
                <label class="col-form-label col-form-label-sm" for="lastName">Last Name</label>
                <!--SEARCH CLIENT-->
                <input
                  class="form-control form-control-sm"
                  v-model="client.lastName"
                  name="lastName"
                  type="text"
                  readonly
                >
              </div>

              <div class="col-sm-auto d-none d-sm-block">
                <label></label>
                <p style="margin: 25px 0 0 -5px; font-weight: bolder;">,</p>
              </div>

              <!--FIRST NAME-->
              <div class="col-sm my-1">
                <label class="col-form-label col-form-label-sm" for="firstName">First Name</label>
                <input
                  class="form-control form-control-sm"
                  v-model="client.firstName"
                  name="firstName"
                  type="text"
                  readonly
                >
              </div>
            </div>
            <div class="form-row justify-content-between">
              <!--MIDDLE NAME-->
              <div class="col-sm my-1">
                <label class="col-form-label col-form-label-sm" for="middleName">Middle Name</label>
                <!--SEARCH CLIENT-->
                <input
                  class="form-control form-control-sm"
                  v-model="client.middleName"
                  name="middleName"
                  type="text"
                  readonly
                >
              </div>

              <!--SUFFIX-->
              <div class="col-sm-3 my-1">
                <label class="col-form-label col-form-label-sm" for="suffix">Suffix</label>
                <!--SEARCH CLIENT-->
                <input
                  class="form-control form-control-sm"
                  v-model="client.suffix"
                  name="suffix"
                  type="text"
                  readonly
                >
              </div>
            </div>
          </fieldset>
        </div>
      </div>

      <div class="col-md-4">
        <div class="bg-light mb-2">
          <fieldset class="border p-2 mb-2">
            <h5>Summary</h5>
            <div class="form-row justify-content-between">
              <!--PRINCIPAL AMOUNT-->
              <label
                class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-truncate"
                for="amountApplied"
              >
                Amount Applied:
              </label>
              <div class="col-sm my-1">
                <!--SEARCH LOAN-->
                <input
                  class="form-control form-control-sm"
                  v-model="loan.prinAmt"
                  name="PAMT"
                  type="text"
                  readonly
                >
              </div>
            </div>

            <div class="form-row justify-content-between">
              <!--DEDUCTIONS-->
              <label
                class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-truncate"
                for="deductions"
              >
                Deductions:
                <small class="d-block">(refer below)</small>
              </label>
              <!--INPUT-->
              <div class="col-sm my-1">
                <input class="form-control form-control-sm" name type="text" readonly>
              </div>
            </div>

            <div class="form-row justify-content-between">
              <!--NET PROCEEDS-->
              <label
                class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-truncate"
                for="netProceed"
              >Net Proceed:</label>
              <div class="col-sm my-1">
                <!--SEARCH LOAN-->
                <input
                  class="form-control form-control-sm"
                  v-model="loan.prinAmt"
                  name="PAMT"
                  type="text"
                  readonly
                >
              </div>
            </div>
          </fieldset>
        </div>
        <div class="bg-light">
          <fieldset class="border p-2">
            <!--STATUS-->
            <h5>STATUS</h5>
            <div class="form-row justify-content-between">
              <div class="col-sm my-1" v-if="this.$route.params.id">
                <select class="custom-select custom-select-sm" id="status" name="status" v-model="loan.statusId">
                  <option disabled v-for="loanStat in loanStats" v-bind:key="loanStat.id" :value="loanStat.id">{{loanStat.mDesc}}</option>
                </select>
              </div>
              <div class="col-sm my-1" v-else>
                <select disabled class="custom-select custom-select-sm" id="status" name="status" v-model="loan.statusId">
                  <option disabled v-for="loanStat in loanStats" v-bind:key="loanStat.id" :value="loanStat.id">{{loanStat.mDesc}}</option>
                </select>
              </div>
            </div>
          </fieldset>
        </div>
      </div>

      <div class="col-md-4">
        <div class="bg-light">
          <fieldset class="border p-2">
            <!--TRANSACTION-->
            <h5>Transaction</h5>
            <div class="form-row justify-content-between">
              <div class="col-sm my-1" v-if="this.$route.params.id">
                <label class="col-form-label col-form-label-sm" for="transType">Trans. Type:</label>
                <select class="custom-select custom-select-sm" id="transType" name="transType" v-model="loan.trCode">
                  <option :disabled="optionDisabled" v-for="transType in transTypes" v-bind:value="transType.transTypeId" :key="transType.transTypeId">{{transType.transTypeDesc}}</option>
                </select>  
              </div>
              <div class="col-sm my-1" v-else>
                <label class="col-form-label col-form-label-sm" for="transType">Trans. Type:</label>
                <select :disabled="selectDisabled" class="custom-select custom-select-sm" id="transType" name="transType" v-model="loan.trCode">
                  <option :disabled="optionDisabled" v-for="transType in transTypes" v-bind:value="transType.transTypeId" :key="transType.transTypeId">{{transType.transTypeDesc}}</option>
                </select>  
              </div>
            </div>
            <div class="form-row justify-content-between">
              <div class="col-sm my-1">
                <label
                  class="col-form-label col-form-label-sm font-weight-bold"
                  for="transType"
                >Control Number:</label>
                <input
                  v-model="loan.trCtlNo"
                  class="form-control form-control-sm bg-light-green border-0"
                  name
                  type="text"
                  readonly
                >
              </div>
            </div>
            <div class="d-flex justify-content-center align-items-center py-4">
              <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                <i class="fa fa-search-plus mr-1"></i>
                <span>View</span>
              </button>
            </div>
          </fieldset>
        </div>
      </div>
    </div>

    <div class="form-row my-2 align-items-stretch">
      <div class="col-md-8">
        <div class="custom-tabs tab-content-bg-light">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#information-tab" role="tab">
                <span>
                  <u>I</u>nformation
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#deductions-tab" role="tab">
                <span>
                  Ded
                  <u>u</u>ctions
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#cl-report-tab" role="tab">
                <span>
                  <u>C</u>l Report
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#recommendation-tab" role="tab">
                <span>
                  <u>R</u>ecommendation
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#remarks-tab" role="tab">
                <span>
                  Remar
                  <u>k</u>s
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#others-tab" role="tab">
                <span>
                  <u>O</u>thers
                </span>
              </a>
            </li>
          </ul>

          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="information-tab">
              <div class="form-row justify-content-between">
                <div class="col-sm-8">
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate font-weight-bold"
                      for="applicationNum"
                    >Application #:</label>
                    <div class="col my-1">
                      <input
                        class="form-control form-control-sm bg-light-green border-0"
                        name="applicationNum"
                        type="text"
                        readonly
                        v-model="loan.docNo"
                      >
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="setup"
                    >Setup:</label>

                    <div class="col my-1">
                      <!--SEARCH CLIENT: TO SEARCH FOR LOANS-->
                      <div v-if="this.$route.params.id && this.loan.statusId">
                        <router-link
                          v-bind:to="'/loans/loans-application-module/'+client.clientId+'/'+client.brCode+'/loans-account-number-inquiry'"  
                        >
                          <input
                            class="form-control form-control-sm"
                            name="setup"
                            type="text"
                            readonly
                          >
                        </router-link>
                      </div>
                      <!--LOAN: DISPLAY-->
                      <div v-else>
                        <input
                          class="form-control form-control-sm"
                          name="setup"
                          type="text"
                          v-model="this.loanRefNum"
                          readonly
                        >
                      </div>
                    </div>

                    <label
                      class="col-auto col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="documentNum"
                    >Document No.:</label>
                    <div class="col my-1">
                      <input v-model="loan.docNo" class="form-control form-control-sm" name="documentNum" type="text" readonly>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="loanType"
                    >Loan Type:</label>
                    <!--LOAN TYPE-->
                    <div class="col my-1">
                      <!--SEARCH LOAN-->
                      <input
                        class="form-control form-control-sm"
                        v-model="loan.loanType"
                        name="loanType"
                        type="text"
                        readonly
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-row">
                    <label
                      class="col col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="applicationDate"
                    >Application Date:</label>
                    <div class="col my-1">
                      <input
                        disabled
                        class="form-control form-control-sm"
                        name="applicationDate"
                        type="date"
                        v-model="loan.trDate"
                      >
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="releaseDate"
                    >Release Date:</label>
                    <div class="col-sm my-1">
                      <input
                        :disabled="selectDisabled"
                        class="form-control form-control-sm"
                        name="releaseDate"
                        type="date"
                        v-model="loan.rTrDate"
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <fieldset class="my-1 border pb-3 px-3 mx-1">
                    <legend
                      class="col-form-label col-form-label-sm w-auto px-1"
                      for="dateOpened"
                    >Loan Setup</legend>
                    <div v-if="this.$route.params.slcCode || this.$route.params.laId">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="ml-3 mb-3">
                            <div class="row">
                              <label class="mr-1">Principal Amount:</label>
                              <label>{{loan.prinAmt}}</label>
                            </div>
                          </div>
                          <div class="ml-3 mb-3">
                            <div class="row">
                              <label class="mr-1">Loan Date:</label>
                              <label>{{loan.trDate}}</label>
                            </div>
                            <div class="row">
                              <label class="mr-1">Maturity Date:</label>
                              <label>{{loan.matDate}}</label>
                            </div>
                          </div>
                          <div class="ml-3 mb-3">
                            <div class="row">
                              <label class="mr-1">Term:</label>
                              <label>{{loan.loanTerms}} {{loan.termDesc}}</label>
                            </div>
                            <div class="row">
                              <label class="mr-1">Mode:</label>
                              <label>{{loan.prinPayMode}}</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="ml-3 mb-3">
                            <div class="row">
                              <label class="mr-1">Interest Rate:</label>
                              <label>{{loan.loanIntRate}} %p.a.</label>
                            </div>
                          </div>
                          <div class="ml-3 mb-3">
                            <div class="row">
                              <label class="mr-1">Amortization Type:</label>
                              <label>{{loan.amorType}}</label>
                            </div>
                            <div class="row">
                              <label class="mr-1">Mode:</label>
                              <label>{{loan.intPayMode}}</label>
                            </div>
                          </div>
                          <div class="ml-3 mb-3">
                            <div class="row">
                              <label class="mr-1">Penalty Rate:</label>
                              <label>{{loan.loanPenRate}} %p.a.</label>
                            </div>
                            <div class="row">
                              <label class="mr-1">Mode:</label>
                              <label>{{loan.penPayMode}}</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="deductions-tab">
              <div>
                <div>
                  <div class="form-row">
                    <div class="col">
                      <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                        <i class="fa fa-file mr-1"></i>
                        <span>A/R Loans</span>
                      </button>
                      <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                        <i class="fa fa-file mr-1"></i>
                        <span>Other's A/R Loans</span>
                      </button>
                    </div>
                    <div class="col">
                      <div class="form-row">
                        <label
                          class="col col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="applicationDate"
                        >Group:</label>
                        <div class="col my-1">
                          <select class="custom-select custom-select-sm" name="deducGrp" v-model="loan.deducGroup" >
                            <option value="1" ng-reflect-value="1">1</option>
                            <option value="2" ng-reflect-value="2">2</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <table class="table table-sm table-bordered custom-table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Description</th>
                            <th scope="col">SC</th>
                            <th scope="col">ST</th>
                            <th scope="col">SE</th>
                            <th scope="col">Account No.</th>
                            <th scope="col">Client ID</th>
                            <th scope="col">G/L Account</th>
                            <th scope="col">Amount</th>
                            <th scope="col">SLB</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="cl-report-tab">
              <div class="form-row">
                <!-- <grammarly-ghost spellcheck="false">
                  <div
                    data-id="8d90fdc1-3c80-3835-83ff-3f7a52991ea1"
                    data-gramm_id="8d90fdc1-3c80-3835-83ff-3f7a52991ea1"
                    data-gramm="gramm"
                    data-gramm_editor="true"
                    class="gr_ver_2"
                    gramm="true"
                    contenteditable="true"
                    style="position: absolute; color: transparent; overflow: hidden; white-space: pre-wrap; border-radius: 4px; box-sizing: border-box; height: 214px; width: 873.328px; margin: 46px 0px 0px 11px; padding: 6px 12px; z-index: 0; border-width: 1px; border-style: solid; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 249, 196); top: 0px; left: 0px;"
                    width="873.328125"
                  >
                    <span
                      style="display: inline-block; font: 400 14px/20.3px -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; color: transparent; overflow: hidden; text-align: left; float: initial; clear: none; box-sizing: border-box; vertical-align: baseline; white-space: pre-wrap; width: 100%; margin: 0px; padding: 0px; border: 0px; letter-spacing: normal; text-shadow: none; height: 212px;"
                    ></span>
                    <br>
                  </div>
                </grammarly-ghost>-->
                <textarea
                  v-model="loan.ciReport"
                  :disabled="selectDisabled"
                  class="form-control form-control-sm w-100"
                  cols="30"
                  id
                  name
                  rows="10"
                  data-gramm="true"
                  data-txt_gramm_id="8d90fdc1-3c80-3835-83ff-3f7a52991ea1"
                  data-gramm_id="8d90fdc1-3c80-3835-83ff-3f7a52991ea1"
                  spellcheck="false"
                  data-gramm_editor="true"
                  style="z-index: auto; position: relative; line-height: 20.3px; font-size: 14px; transition: none 0s ease 0s; background: transparent !important;"
                ></textarea>
                <!-- <grammarly-btn>
                  <div
                    class="_1BN1N Kzi1t MoE_1 _2DJZN"
                    style="z-index: 2; transform: translate(853.328px, 229px);"
                  >
                    <div class="_1HjH7">
                      <div title="Protected by Grammarly" class="_3qe6h">&nbsp;</div>
                    </div>
                  </div>
                </grammarly-btn>-->
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="recommendation-tab">
              <div class="form-row">
                <!-- <grammarly-ghost spellcheck="false">
                  <div
                    data-id="320f0610-3c18-96fc-cdc5-c3e1d9643d32"
                    data-gramm_id="320f0610-3c18-96fc-cdc5-c3e1d9643d32"
                    data-gramm="gramm"
                    data-gramm_editor="true"
                    class="gr_ver_2"
                    gramm="true"
                    contenteditable="true"
                    style="position: absolute; color: transparent; overflow: hidden; white-space: pre-wrap; border-radius: 4px; box-sizing: border-box; height: 214px; width: 873.328px; margin: 46px 0px 0px 11px; padding: 6px 12px; z-index: 0; border-width: 1px; border-style: solid; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 249, 196); top: 0px; left: 0px;"
                    width="873.328125"
                  >
                    <span
                      style="display: inline-block; font: 400 14px/20.3px -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; color: transparent; overflow: hidden; text-align: left; float: initial; clear: none; box-sizing: border-box; vertical-align: baseline; white-space: pre-wrap; width: 100%; margin: 0px; padding: 0px; border: 0px; letter-spacing: normal; text-shadow: none; height: 212px;"
                    ></span>
                    <br>
                  </div>
                </grammarly-ghost>-->
                <textarea
                  v-model="loan.basisRecomm"
                  :disabled="selectDisabled"
                  class="form-control form-control-sm w-100"
                  cols="30"
                  id
                  name
                  rows="10"
                  data-gramm="true"
                  data-txt_gramm_id="320f0610-3c18-96fc-cdc5-c3e1d9643d32"
                  data-gramm_id="320f0610-3c18-96fc-cdc5-c3e1d9643d32"
                  spellcheck="false"
                  data-gramm_editor="true"
                  style="z-index: auto; position: relative; line-height: 20.3px; font-size: 14px; transition: none 0s ease 0s; background: transparent !important;"
                ></textarea>
                <!-- <grammarly-btn>
                  <div
                    class="_1BN1N Kzi1t MoE_1 _2DJZN"
                    style="z-index: 2; transform: translate(853.328px, 229px);"
                  >
                    <div class="_1HjH7">
                      <div title="Protected by Grammarly" class="_3qe6h">&nbsp;</div>
                    </div>
                  </div>
                </grammarly-btn>-->
              </div>
            </div>

            <div role="tabpanel" class="tab-pane" id="remarks-tab">
              <div class="form-row">
                <!-- <grammarly-ghost spellcheck="false">
                  <div
                    data-id="320f0610-3c18-96fc-cdc5-c3e1d9643d32"
                    data-gramm_id="320f0610-3c18-96fc-cdc5-c3e1d9643d32"
                    data-gramm="gramm"
                    data-gramm_editor="true"
                    class="gr_ver_2"
                    gramm="true"
                    contenteditable="true"
                    style="position: absolute; color: transparent; overflow: hidden; white-space: pre-wrap; border-radius: 4px; box-sizing: border-box; height: 214px; width: 873.328px; margin: 46px 0px 0px 11px; padding: 6px 12px; z-index: 0; border-width: 1px; border-style: solid; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 249, 196); top: 0px; left: 0px;"
                    width="873.328125"
                  >
                    <span
                      style="display: inline-block; font: 400 14px/20.3px -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; color: transparent; overflow: hidden; text-align: left; float: initial; clear: none; box-sizing: border-box; vertical-align: baseline; white-space: pre-wrap; width: 100%; margin: 0px; padding: 0px; border: 0px; letter-spacing: normal; text-shadow: none; height: 212px;"
                    ></span>
                    <br>
                  </div>
                </grammarly-ghost> -->
                <textarea
                  v-model="loan.remarks"
                  :disabled="selectDisabled"
                  class="form-control form-control-sm w-100"
                  cols="30"
                  id
                  name
                  rows="10"
                  data-gramm="true"
                  data-txt_gramm_id="320f0610-3c18-96fc-cdc5-c3e1d9643d32"
                  data-gramm_id="320f0610-3c18-96fc-cdc5-c3e1d9643d32"
                  spellcheck="false"
                  data-gramm_editor="true"
                  style="z-index: auto; position: relative; line-height: 20.3px; font-size: 14px; transition: none 0s ease 0s; background: transparent !important;"
                ></textarea>
                <!-- <grammarly-btn>
                  <div
                    class="_1BN1N Kzi1t MoE_1 _2DJZN"
                    style="z-index: 2; transform: translate(853.328px, 229px);"
                  >
                    <div class="_1HjH7">
                      <div title="Protected by Grammarly" class="_3qe6h">&nbsp;</div>
                    </div>
                  </div>
                </grammarly-btn> -->
              </div>
            </div>


            <div role="tabpanel" class="tab-pane" id="others-tab">
              <div class="form-row">
                <label
                  class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for
                >Proposal/Purpose:</label>
                <div class="col my-1">
                  <input :disabled="selectDisabled" v-model="loan.proposal" class="form-control form-control-sm" name type="text">
                </div>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  for
                >Repayment:</label>
                <div class="col my-1">
                  <input :disabled="selectDisabled" v-model="loan.repayment" class="form-control form-control-sm" name type="text">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <fieldset class="border p-2 bg-light">
          <h5 class="text-center">
            <u>N</u>ET PROCEEDS
          </h5>
          <div class="form-check mb-4">
            <input class="form-check-input" id="slRadio" name="netProceeds" type="radio" value @click="checkRadio">
            <label class="form-check-label" for="exampleRadios1">Subsidiary Ledger</label>
            <div class="form-row justify-content-between">
              <label
                class="col-12 col-form-label col-form-label-sm"
              >SL Type Where to CREDIT Net Proceeds</label>
              <!--SL CLASS-->
              <div class="col-sm-2">
                <input v-model="this.slcCodeSL" type="hidden">
                <input v-model="this.loan.npSlcCode" name="slcSL" class="form-control form-control-sm" type="number" data-toggle="modal" data-target="#slClassModal" readonly v-if="this.checkedSL && (this.$route.params.id || this.$route.params.clientId)">
                <input name="slcSL" class="form-control form-control-sm" type="number" readonly v-else>
              </div>
              <!--SL TYPE-->
              <div class="col-sm-2">
                <input v-model="loan.npSltCode" name="slType" class="form-control form-control-sm" type="number" data-toggle="modal" data-target="#slTypeModal" @click="showSLTypes" v-if="this.loan.npSlcCode" readonly>
                <input name="slType" class="form-control form-control-sm" type="number" readonly v-else>
              </div>
              <!--REF NO-->
              <div class="col">
                <input v-modal="loan.npRefNo" name="refNo" class="form-control form-control-sm" type="number" data-toggle="modal" data-target="#refNoModal" v-if="this.loan.npSlcCode" readonly>
                <input name="refNo" class="form-control form-control-sm" type="number" readonly v-else>
              </div>
              <div class="col-12 mt-3">
                <input name="slDesc" class="form-control form-control-sm bg-warning border-0" type="text" v-model="this.slDescSL" readonly>
              </div>
            </div>
          </div>
          <div class="form-check">
            <input class="form-check-input" id="glRadio" name="netProceeds" type="radio" value @click="checkRadio">
            <label class="form-check-label" for="exampleRadios2">General Ledger Only</label>
            <div class="form-row justify-content-between">
              <label
                class="col-12 col-form-label col-form-label-sm"
              >GL Account to CREDIT Net Proceeds</label>
              <div class="col-sm-4">
                <!--GL ACCOUNT-->
                <input v-model="loan.npAcctCode" name="glAccount" class="form-control form-control-sm" type="number" data-toggle="modal" data-target="#glAccountModal" v-if="this.checkedGL && (this.$route.params.id || this.$route.params.clientId)" readonly>
                <input v-model="loan.npAcctCode" name="glAccount" class="form-control form-control-sm" type="number" data-toggle="modal" data-target="#glAccountModal" v-else-if="this.$route.params.laId" readonly>
                <input name="glAccount" class="form-control form-control-sm" type="number" readonly v-else>
              </div>
              <div class="col">
                <input name="glDesc" class="form-control form-control-sm bg-warning border-0" type="text" v-model="this.glDescGL" readonly>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
    </div>

    <!--MODALS-->
    <!--SL CLASS MODAL-->
    <div class="modal" id="slClassModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">SL Class Inquiry</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <table class="table table-sm table-bordered table-hover custom-table">
              <thead>
                <tr>
                  <th scope="col">SL CLASS ID</th>
                  <th scope="col">SL CLASS DESCRIPTION</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="slClass in slClasses" v-bind:key="slClass.id">
                  <td>{{ slClass.slClassId }}</td>
                  <td>{{ slClass.slClassDesc }}</td>
                  <td>
                    <button
                      class="btn btn-primary"
                      @click="selectSlClass(slClass.slClassId)"
                      data-dismiss="modal"
                    >GO</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--END OF SL CLASS MODAL-->
    <!--SL TYPE MODAL-->
    <div class="modal" id="slTypeModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">SL Type Inquiry</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <table class="table table-sm table-bordered table-hover custom-table">
              <thead>
                <tr>
                  <th scope="col">SL TYPE ID</th>
                  <th scope="col">SL TYPE DESCRIPTION</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="slType in slTypes" v-bind:key="slType.id">
                    <td>{{ slType.sltCode }}</td>
                    <td>{{ slType.slDesc }}</td>
                    <td><button class="btn btn-primary" @click="selectSlType(slType.sltCode,slType.slDesc)" data-dismiss="modal">GO</button></td>
                </tr>
            </tbody>
        </table>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <!--END OF SL TYPE MODAL-->

    <!--REF NO MODAL-->
     <div class="modal" id="refNoModal">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">SL Type Inquiry</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <table class="table table-sm table-bordered table-hover custom-table">
            <thead>
                <tr>
                  <th scope="col">SL TYPE ID</th>
                  <th scope="col">SL TYPE DESCRIPTION</th>
                  <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="slType in slTypes" v-bind:key="slType.id">
                    <td>{{ slType.sltCode }}</td>
                    <td>{{ slType.slDesc }}</td>
                    <td><button class="btn btn-primary" data-dismiss="modal">GO</button></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--END OF SL TYPE MODAL-->
    <!--GL ACCOUNT MODAL-->
    <div class="modal" id="glAccountModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content content-custom">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">GL Account Inquiry</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body modal-custom " style="height:500px, overflow-y:auto">
            <table class="table table-sm table-bordered table-hover custom-table">
              <thead>
                <tr>
                  <th scope="col">Acct Code</th>
                  <th scope="col">Account Title</th>
                  <th scope="col">Lvl</th>
                  <th scope="col">Summ Acct</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="coa in coas" v-bind:key="coa.id">
                    <td>{{ coa.coaId }}</td>
                    <td>{{ coa.coaDesc }}</td>
                    <td>{{ coa.coaAcctTag }} {{coa.coaAcctlvl}}</td>
                    <td>{{ coa.coaAcctSum}}</td>
                    <td><button class="btn btn-primary" @click="selectGLAcc(coa.coaId,coa.coaDesc)" data-dismiss="modal">GO</button></td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--END OF GL ACCOUNT MODAL-->

    <!--LOAN APP MODAL-->
    <div class="modal" id="findLoanAppModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Loan Application Filter</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div class="form-row mt-1">
              <label for="loanStatus" class="form-label form-label-sm">STATUS:</label>
              <div class="col-sm">
                <select class="custom-select custom-select-sm" id="loanStatus" name="loanStatus" v-model="status">
                  <option v-for="loanStat in loanStats" v-bind:key="loanStat.statid" :value="loanStat.id">{{loanStat.mDesc}}</option>
                </select>
              </div>
            </div>
    
            <div class="form-row mt-1">
              <label class="form-label form-label-sm mb-1" for="controlNo">Control No.:</label>
              <input class="form-control form-control-sm" name="controlNo" id="controlNo">
            </div>
            
            <div class="form-row mt-1">
              <label class="form-label form-label-sm mb-1" for="documentNo">Document No.:</label>
              <input class="form-control form-control-sm" name="documentNo" id="documentNo">
            </div>

            <div class="form-row">
              <fieldset class="border p-2 col-sm-12">
                <legend class="col-form-label col-form-label-sm w-auto px-1">DATE FILTER:</legend>
                <div class="form-row">
                  <div class="col-sm-6">
                    <center><label class="form-label form-label-sm mb-1">DATE FROM:</label></center>
                  </div>
                  <div class="col-sm-6">
                    <center><label class="form-label form-label-sm mb-1">DATE TO:</label></center>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-sm-6">
                    <input class="form-control form-control-sm" type="date">
                  </div>
                  <div class="col-sm-6">
                    <input class="form-control form-control-sm" type="date">
                  </div>
                </div>
              </fieldset>
            </div>

            <div class="form-row m-3">
              <div class="col-sm-12">
                <center>
                  <div>
                    <router-link v-bind:to="'/loans/loans-app-search/'+status">
                      <button class="btn btn-outline-primary col-sm-4 m-1" type="button" data-dismiss="modal">GO</button>
                    </router-link>
                    <button class="btn btn-outline-primary col-sm-4 m-1" type="button" data-dismiss="modal">CANCEL</button>
                  </div>
                </center>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END OF LOAN APP MODAL-->

     <!--CANCEL MODAL-->
    <div class="modal" id="cancelModal">
      <div class="modal-dialog">
        <div class="modal-content" style="height:30%">
          <!-- Modal Header -->
          <div class="modal-header alert alert-warning">
           <div><i class="fa fa-exclamation mr-1"></i>CANCEL</div>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <div v-if="this.$route.params.id || this.$route.params.clientId || this.$route.params.laId">
              Are you sure you want to CANCEL current work?
            </div>
            <div v-else>
              Are you sure you want to EXIT this Module?
            </div>
          </div> 

           <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-primary col-sm-4 mr-1" @click="redirect('/loans/loans-application-module')" v-if="this.$route.params.id || this.$route.params.clientId || this.$route.params.laId" data-dismiss="modal">
              Ok
            </button>
            
            <button type="button" class="btn btn-primary col-sm-4 mr-1"  @click="redirect('/loans')" data-dismiss="modal" v-else>
              Ok
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--END OF GL ACCOUNT MODAL-->
    <!--END OF MODAL-->
    </form>
  </div>
</template>
<script>
export default {
  data() {
    return {
      //for net proceeds
      slcCodeSL:"",
      slDescSL:"",
      glDescGL:"",

      //for setup input value
      loanRefNum:"",

      //for find loan app (modal)
      status:"",

      //for loanapp insert and loan details display
      loan: {
        brCode:"",
        id:"",
        slcCode:"",
        sltCode:"",
        refNo:"",
        clientId:"",
        statusId:"",
        trDate:"",
        trTime:"",
        rTrDate:"",
        encdBy:"",
        apprvDate:"",
        apprvBy:"",
        trCode:"",
        trCtlNo:"",
        npSlcCode:"",
        npSltCode:"",
        npRefNo:"",
        npAcctCode:"",
        deducGroup:"",
        docNo:"",
        proposal:"",
        ciReport:"",
        basisRecomm:"",
        remarks:"",
        repayment:""
      },

      //for account info
      client: {},

      //for select loanappstatus
      loanStats: [],

      //for select transtypes
      transTypes: [],

      //for net proceeds SL SlcCode
      slClasses: [],

      //for net proceeds SL SltCode
      slTypes: [],

      //for net proceeds GL
      coas: [],

      edit: false,
      save: false,

      successAdd: false,
      successEdit: false,

      selectDisabled: true,

      optionDisabled: true,

      readOnly: true,

      approve: false,

      disapprove: false,

      cancel: false,

      checkedSL:false,

      checkedGL:false,

    };
  },

  mounted() {
    //SEARCH CLIENT
    this.paramId = this.$route.params.id;

    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
      this.fetchCoaForLoan(this.brCode); 
    }

    //SEARCH LOAN
    this.clientId = this.$route.params.clientId;
    this.brCode = this.$route.params.brCode;
    this.slcCode = this.$route.params.slcCode;
    this.sltCode = this.$route.params.sltCode;
    this.refNo = this.$route.params.refNo;

    if (
      this.refNo > 0 &&
      this.brCode > 0 &&
      this.slcCode > 0 &&
      this.sltCode > 0
    ) {
      this.fetchLoanById(
        this.clientId,
        this.brCode,
        this.refNo,
        this.slcCode,
        this.sltCode
      );
      this.fetchClient(this.clientId);
      this.formatReferenceNum();
      this.fetchCoaForLoan(this.brCode);
    }

    //SEARCH LOAN APPLICATION
    this.LAclientId = this.$route.params.laclientId;
    this.LAid = this.$route.params.laId;

    if(
      this.LAclientId > 0 &&
      this.LAid > 0
    ){
      this.fetchClient(this.LAclientId);
      this.fetchLoanApp(this.LAid);
    }
  },

  created() {
    this.fetchLoanAppStatus();
    this.fetchTransType();
    this.fetchSLClass();
  },

  methods: {
    fetchLoanById(clientId, branchCode, refNo, slcCode, sltCode) {
      fetch(
        `/api/loansAccount/${clientId}/${branchCode}/${refNo}/${slcCode}/${sltCode}/loanAcc`
      )
        .then(res => res.json())
        .then(res => {
          this.loan = res.data[0];
          this.loan.statusId = 1;
          this.optionDisabled = false;
          this.selectDisabled = false;
          document.getElementById('status').selectedIndex="0";
          document.getElementById('status').disabled=true;
        })
        .catch(err => console.log(err));
    },

    fetchClient(id) {
      fetch(`/api/client/${id}`)
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.client = res.data[0];
        })
        .catch(err => console.log(err));
    },

    fetchLoanAppStatus() {
      fetch(`/api/loanAppStatuses`)
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.loanStats = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchTransType() {
      fetch(`/api/transtypeLoan`)
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.transTypes = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchSLClass() {
      fetch(`/api/slClassLoan`)
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.slClasses = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchSLTypes(branchCode, slcCode) {
      fetch(`/api/slTypeLoan/${branchCode}/${slcCode}`)
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.slTypes = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchCoaForLoan(branchCode) {
      fetch(`/api/coaLoan/${branchCode}`)
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.coas = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchLoanApp(id){
      fetch(`/api/loanApp/${id}`)
        .then(res => res.json())
        .then(res => {
          this.loan = res.data[0];
          this.formatReferenceNum();
          this.setSelectedValue();
          this.fetchCoaForLoan(this.loan.brCode)
        })
        .catch(err => console.log(err));
    },

    insertNew(){
      document.getElementById('status').selectedIndex="0";
      document.getElementById('status').disabled=true;
      this.loan.statusId = 1;
      console.log(this.loan); 
      this.selectDisabled=false;
      this.optionDisabled=false;
    },

    setSelectedValue(){
      if(this.loan.npAcctCode > 0){
        document.getElementById('glRadio').checked = true;
      }else{
        document.getElementById('slRadio').checked = true;
      }

      document.getElementById('status').selectedIndex = this.loan.statusId - 1;
      document.getElementById('transType').selectedIndex = this.loan.trCode - 1;
      console.log(this.loan.statusId+":"+this.loan.trCode);
    },

    formatReferenceNum() {
      if(this.refNo > 0){
        this.refNo = ("00000000" + this.refNo).slice(-8);
        this.slcCode = ("00" + this.slcCode).slice(-2);
        this.sltCode = ("00" + this.sltCode).slice(-2);
        this.loanRefNum = "" + this.slcCode + "-" + this.sltCode + "-" + this.refNo + "";
      }else{
        this.loan.refNo = ("00000000" + this.loan.refNo).slice(-8);
        this.loan.slcCode = ("00" + this.loan.slcCode).slice(-2);
        this.loan.sltCode = ("00" + this.loan.sltCode).slice(-2);
        this.loanRefNum = "" + this.loan.slcCode + "-" + this.loan.sltCode + "-" + this.loan.refNo + "";
        console.log(this.loanRefNum);
      }
    },

    showSLTypes() {
      if (this.loan.npSlcCode> 0) {
        this.fetchSLTypes(this.brCode, this.loan.npSlcCode);
      }
    },

    selectSlClass(slcCode) {
      this.slcCodeSL = slcCode;
      this.loan.npSlcCode = slcCode;
    
    },

    selectSlType(slType,sldesc){
      this.loan.npSltCode = slType;
      this.slDescSL = sldesc;
    },

    selectGLAcc(glacc,gldesc){
      this.loan.npAcctCode = glacc;
      this.glDescGL = gldesc;
    },

    checkRadio(){
      if(document.getElementById('glRadio').checked) {
        console.log(this.loan.slcSL);
        this.checkedGL=true;
        this.checkedSL=false;
        this.loan.slcSL="";
        this.loan.npSltCode="";
        this.slDescSL="";
      }else if(document.getElementById('slRadio').checked) {
        this.checkedSL=true;
        this.checkedGL=false;
        this.loan.npAcctCode="";
        this.glDescGL="";
        console.log(this.loan.slcSL);
      }
   
    },

    insertToDB(){
      fetch(`/api/countLoanApp`)
        .then(res => res.json())
        .then(res => {
          if(this.edit === false){
            if(this.save){
              this.loan.id=res+1;
              this.loan.docNo=("00000000" + this.loan.id).slice(-8);
              fetch(`/api/loanApp`, {
                method: 'post',
                body: JSON.stringify(this.loan),
                headers: { 'content-type': 'application/json' }
              })
              .then(res => res.json())
              .then(data => {
                this.successAdd = true;
                this.loan = {};
                this.client = {};
                this.loanRefNum ="";
              })
              .catch(err => console.log(err));
            }else{
              fetch(`/api/loanApp`, {
                method: 'put',
                body: JSON.stringify(this.loan),
                headers: { 'content-type': 'application/json' }
              })
              .then(res => res.json())
              .then(res => {
                this.successAdd = true;
              })
              .catch(err => console.log(err));
            }
          }else{
            fetch(`/api/loanApp`, {
                method: 'put',
                body: JSON.stringify(this.loan),
                headers: { 'content-type': 'application/json' }
              })
              .then(res => res.json())
              .then(res => {
                this.successAdd = true;
              })
              .catch(err => console.log(err));
          }
        })
        .catch(err => console.log(err));
    },

    editForm(){
      this.edit=true;
      this.selectDisabled=false;
      this.optionDisabled=false;
    },

    updateLoanStatus(status){
      this.loan.statusId = status;
    },

    saveLoan(){
      this.save = true;
    },

    redirect(linkTo){
      console.log(linkTo);
      this.$router.push(linkTo);
      this.loan={};
      this.client={};
      this.loanRefNum="";

    }
  }
};
</script>
<style>
.loans-app-module {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
.btn-dark-blue {
  color: #fff;
  background-color: #418cb3;
  border-color: #418cb3;
}
.btn-outline-dark-blue {
  color: #418cb3;
  background-color: transparent;
  background-image: none;
  border-color: #418cb3 !important;
}
.btn-outline-dark-blue:hover {
  color: #fff;
  background-color: #418cb3;
  border-color: #418cb3;
}
.bg-light-green {
  background-color: #20c997 !important;
}
.modal-dialog,
.modal-content,
.content-custom {
  /* 80% of window height */
  height: 80%;
}
.modal-custom {
  /* 100% = dialog height, 120px = header + footer */
  max-height: calc(100% - 120px);
  overflow-y: scroll;
}
</style>