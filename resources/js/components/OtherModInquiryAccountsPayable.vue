<template>
<div class="accounts-payable">

    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" tabindex="0" id="menuDropdown-1">Tools</a>
          </li>
        </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <router-link
            v-bind:to="'/other-mod/apsearch/'+client.clientId+'/inquiry-ap-search'"
            class="btn btn-sm btn-outline-primary mr-4"
            v-if="this.$route.params.id"
          >
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>
          <router-link
            to="/other-mod/inquiry-ap-search"
            class="btn btn-sm btn-outline-primary mr-4"
            v-else
          >
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>
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
          <button
            class="btn btn-sm btn-outline-primary mr-1"
            type="button"
            v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
            @click="insertNew"
          >
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>

          <button
            class="btn btn-sm btn-outline-primary mr-1"
            type="button"
            v-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
            @click="editAp(accountspayable)"
          >
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          
          <button
            class="btn btn-sm btn-outline-primary mr-4"
            type="button"
            v-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
            @click="deleteApById"
          >
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-4" type="button" v-else>
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
        </li>
      </ul>
    </nav>

    <div
      class="alert alert-success"
      v-if="successAdd"
      transition="expand"
    >Accounts Payable Successfully Added.</div>

    <div
      class="alert alert-success"
      v-if="successEdit"
      transition="expand"
    >Accounts Payable Successfully Updated.</div>
    
    <form @submit.prevent="insertAp">
      <div class="form-row">
        <div class="col-md-12">
          <div class="bg-light">
            <fieldset class="border p-2">
              <h5>Account Info</h5>
              <div class="form-row align-items-stretch">
                <div class="col-md-7">
                  <div class="form-row justify-content-between">
                    <div class="col-sm-6 my-1">
                      <label class="col-form-label col-form-label-sm" for="clientId">Client ID:</label>
                      <input
                        class="form-control form-control-sm bg-light-green border-0"
                        v-model="client.clientId"
                        name="clientId"
                        v-if="this.$route.params.id"
                        type="text"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm bg-light-green border-0"
                        v-model="accountspayable.clientIdAp"
                        name="clientIdAp"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        type="text"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm bg-light-green border-0"
                        v-model="accountspayable.clientIdAp"
                        name="clientIdAp"
                        v-else
                        type="text"
                        readonly
                      >
                    </div>
                    <fieldset class="col-sm-3 my-1 border pb-3 px-3 mx-1">
                      <legend
                        class="col-form-label col-form-label-sm w-auto px-1"
                        for="rating"
                      >RATING</legend>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.rating"
                        id
                        name="rating"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="rating in ratings"
                          v-bind:value="rating.ratingId"
                        >{{ rating.ratingDesc }}</option>
                      </select>
                    </fieldset>
                  </div>
                  <div class="form-row justify-content-between">
                    <div class="col-sm my-1">
                      <label class="col-form-label col-form-label-sm" for="lastName">Last Name</label>
                      <input
                        class="form-control form-control-sm"
                        v-model="client.lastName"
                        name="lastName"
                        type="text"
                        v-if="this.$route.params.id"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.lastName"
                        name="lastName"
                        type="text"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.lastName"
                        name="lastName"
                        type="text"
                        v-else
                        readonly
                      >
                    </div>
                    <div class="col-sm-auto d-none d-sm-block align-self-end">
                      <strong>,</strong>
                    </div>
                    <div class="col-sm my-1">
                      <label class="col-form-label col-form-label-sm" for="firstName">First Name</label>
                      <input
                        class="form-control form-control-sm"
                        v-model="client.firstName"
                        name="firstName"
                        type="text"
                        v-if="this.$route.params.id"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.firstName"
                        name="firstName"
                        type="text"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.firstName"
                        name="firstName"
                        type="text"
                        v-else
                        readonly
                      >
                    </div>
                    <div class="col-sm my-1">
                      <label class="col-form-label col-form-label-sm" for="middleName">Middle Name</label>
                      <input
                        class="form-control form-control-sm"
                        v-model="client.middleName"
                        name="middleName"
                        type="text"
                        v-if="this.$route.params.id"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.middleName"
                        name="middleName"
                        type="text"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.middleName"
                        name="middleName"
                        type="text"
                        v-else
                        readonly
                      >
                    </div>
                    <div class="col-sm-1 my-1">
                      <label class="col-form-label col-form-label-sm" for="suffix">Suffix</label>
                      <input
                        class="form-control form-control-sm"
                        v-model="client.suffix"
                        name="suffix"
                        type="text"
                        v-if="this.$route.params.id"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.suffix"
                        name="suffix"
                        type="text"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.suffix"
                        name="suffix"
                        type="text"
                        v-else
                        readonly
                      >
                    </div>
                  </div>
                  <div class="form-row mb-2 justify-content-between">
                    <fieldset class="col-sm my-1 border pb-3 px-3 mx-1">
                      <legend
                        class="col-form-label col-form-label-sm w-auto px-1"
                        for="dateOpened"
                      >Organization</legend>
                      <input
                        class="form-control form-control-sm"
                        v-model="client.accountName"
                        name="accountName"
                        type="text"
                        v-if="this.$route.params.id"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.accountName"
                        name="accountName"
                        type="text"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.accountName"
                        name="accountName"
                        type="text"
                        v-else
                        readonly
                      >
                    </fieldset>
                    <fieldset class="my-1 border pb-3 px-3 mx-1">
                      <legend
                        class="col-form-label col-form-label-sm w-auto px-1"
                        for="dateOpened"
                      >Date Opened</legend>
                      <input
                        class="form-control form-control-sm"
                        v-model="client.dateOpened"
                        name="dateOpened"
                        type="date"
                        readonly
                        v-if="this.$route.params.id"
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.dateOpened"
                        name="dateOpened"
                        type="date"
                        readonly
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="accountspayable.dateOpened"
                        name="dateOpened"
                        type="date"
                        readonly
                        v-else
                      >
                    </fieldset>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="apType"
                    >Account Type:</label>
                    <div class="col-sm-6 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.acctType"
                        name="acctType"
                        v-if="this.$route.params.id"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientAcctType in clientAcctTypes"
                          v-bind:value="clientAcctType.acctTypeId"
                        >{{ clientAcctType.acctTypeDesc }}</option>
                      </select>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.acctType"
                        name="acctType"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientAcctType in clientAcctTypes"
                          v-bind:value="clientAcctType.acctTypeId"
                        >{{ clientAcctType.acctTypeDesc }}</option>
                      </select>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.acctType"
                        name="acctType"
                        v-else
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientAcctType in clientAcctTypes"
                          v-bind:value="clientAcctType.acctTypeId"
                        >{{ clientAcctType.acctTypeDesc }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="tdType"
                    >Joint Type:</label>
                    <div class="col-sm-6 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.jointType"
                        name="jntType"
                        v-if="this.$route.params.id"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientJointType in clientJointTypes"
                          v-bind:value="clientJointType.jntTypeId"
                        >{{ clientJointType.jntTypeDesc }}</option>
                      </select>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.jointType"
                        name="jntType"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientJointType in clientJointTypes"
                          v-bind:value="clientJointType.jntTypeId"
                        >{{ clientJointType.jntTypeDesc }}</option>
                      </select>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.jointType"
                        name="jntType"
                        v-else
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientJointType in clientJointTypes"
                          v-bind:value="clientJointType.jntTypeId"
                        >{{ clientJointType.jntTypeDesc }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="apType"
                    >Client Type:</label>
                    <div class="col-sm-6 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.clientType"
                        name="clientType"
                        v-if="this.$route.params.id"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientClientType in clientClientTypes"
                          v-bind:value="clientClientType.clientTypeId"
                        >{{ clientClientType.clientTypeDesc }}</option>
                      </select>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.clientType"
                        name="clientType"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientClientType in clientClientTypes"
                          v-bind:value="clientClientType.clientTypeId"
                        >{{ clientClientType.clientTypeDesc }}</option>
                      </select>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.clientType"
                        name="clientType"
                        v-else
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientClientType in clientClientTypes"
                          v-bind:value="clientClientType.clientTypeId"
                        >{{ clientClientType.clientTypeDesc }}</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="apType"
                    >Account Status:</label>
                    <div class="col-sm-6 col my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.accountStatus"
                        name="accountStatus"
                        v-if="this.$route.params.id"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientAccountStatus in clientAccountStatuses"
                          v-bind:value="clientAccountStatus.acctStatId"
                        >{{ clientAccountStatus.acctStatDesc }}</option>
                      </select>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.accountStatus"
                        name="accountStatus"
                        v-else-if="this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp"
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientAccountStatus in clientAccountStatuses"
                          v-bind:value="clientAccountStatus.acctStatId"
                        >{{ clientAccountStatus.acctStatDesc }}</option>
                      </select>
                      <select
                        class="custom-select custom-select-sm"
                        v-model="accountspayable.accountStatus"
                        name="accountStatus"
                        v-else
                        disabled
                      >
                        <option disabled>(select one)</option>
                        <option
                          v-for="clientAccountStatus in clientAccountStatuses"
                          v-bind:value="clientAccountStatus.acctStatId"
                        >{{ clientAccountStatus.acctStatDesc }}</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
        
        <div class="form-row mt-2">
            <div class="col-md-7 align-items-stretch custom-tabs">
                <ul role="tablist" class="nav nav-tabs nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="" role="tab">
                            <span>Se<u>t</u>up</span>
                        </a>
                    </li>
                </ul>
            <div class="tab-content">
              <div
                role="tabpanel"
                class="tab-pane active"
                aria-labelledby="ngb-tab-23"
                id="ngb-tab-23-panel"
                aria-expanded="true"
              >
                <div class="form-row justify-content-between">
                  <label
                    class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    for="depositType"
                  >Account Type:</label>
                  <div class="col-sm my-1">
                    <select
                      class="custom-select custom-select-sm"
                      id
                      v-model="accountspayable.apSltCode"
                      name="apSltCode"
                      :disabled="selectDisabled"
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="accountspayableSlType in accountspayableSlTypes"
                        v-bind:value="accountspayableSlType.slTypeSltCode"
                      >{{ accountspayableSlType.slTypeMDesc }}</option>
                    </select>
                  </div>
                  <label
                    class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    for="accountNum"
                  >Account Number:</label>
                  <div class="col-sm my-1">
                    <input
                      class="form-control form-control-sm bg-light-green border-0"
                      v-model="accountspayable.apRefNo"
                      name="apRefNo"
                      type="text"
                      :readonly="readOnly"
                    >
                  </div>
                </div>
                <div class="form-row mt-4 align-items-center">
                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="minBalance"
                      >Setup Amount:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-green border-0"
                          v-model="accountspayable.apPamt"
                          name="apPamt"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="minBalance"
                      >Balance:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm text-right bg-light-pink border-0"
                          name="minBalance"
                          type="text"
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="status"
                      >Status:</label>
                      <div class="col-sm my-1">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          v-model="accountspayable.apStatus"
                          name="apStatus"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(select one)</option>
                          <option
                            v-for="accountspayableCtsType in accountspayableCtsTypes"
                            v-bind:value="accountspayableCtsType.ctsTypeCode"
                          >{{ accountspayableCtsType.ctsTypeDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="dateOpened"
                      >Loan Date:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm"
                          v-model="accountspayable.apTrDate"
                          name="apTrDate"
                          type="date"
                          readonly
                        >
                      </div>
                    </div>
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Term</label>
                    <div class="col my-1">
                      <div class="form-row">
                        <div class="col-sm-3 my-1">
                        <input
                          class="form-control form-control-sm"
                          v-model="accountspayable.apTerms"
                          name="apTerms"
                          type="text"
                          readonly
                        >
                        </div>
                        <div class="col my-1">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          v-model="accountspayable.apTermPerd"
                          name="apTermPerd"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(select one)</option>
                          <option
                            v-for="accountspayableTermPerd in accountspayableTermPerds"
                            v-bind:value="accountspayableTermPerd.termId"
                          >{{ accountspayableTermPerd.termDesc }}</option>
                        </select>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="totalBalance"
                      >Pymt. Mode:</label>
                      <div class="col-sm my-1">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          v-model="accountspayable.apPppmtMode"
                          name="apPppmtMode"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(select one)</option>
                          <option
                            v-for="accountspayablePaymentMode in accountspayablePppmtModes"
                            v-bind:value="accountspayablePaymentMode.paymentModeId"
                          >{{ accountspayablePaymentMode.paymentModeDesc }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="floats"
                      >DueDate Option:</label>
                      <div class="col-sm my-1">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          v-model="accountspayable.apDdFlag"
                          name="apDdFlag"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(select one)</option>
                          <option
                            v-for="accountspayableDueDateType in accountspayableDueDateTypes"
                            v-bind:value="accountspayableDueDateType.dueDateTypeID"
                          >{{ accountspayableDueDateType.dueDateTypeDesc }}</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="dateOpened"
                      >1st Due Date:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm"
                          v-model="accountspayable.apFpdDate"
                          name="apFpdDate"
                          type="date"
                          readonly
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="dateOpened"
                      >Maturity Date:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm"
                          v-model="accountspayable.apMatDate"
                          name="apMatDate"
                          type="date"
                          readonly
                        >
                      </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-md-5">
          <div class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
            <ul role="tablist" class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  href
                  role="tab"
                  id="ngb-tab-24"
                  aria-controls="ngb-tab-24-panel"
                  aria-expanded="true"
                  aria-disabled="false"
                >
                  <span>
                    <u>R</u>emarks
                  </span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div
                role="tabpanel"
                class="tab-pane active"
                aria-labelledby="ngb-tab-24"
                id="ngb-tab-24-panel"
                aria-expanded="true"
              >
                <textarea class="form-control form-control-sm" name="remarks"></textarea>
              </div>
            </div>
          </div>
        </div>
        </div>

      <div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 20px;">
        <button class="btn btn-secondary mr-1" type="submit" v-if="selectDisabled">
          <i class="fa fa-save mr-1"></i>
          <span>
            <u>S</u>ave
          </span>
        </button>
        <button class="btn btn-success mr-1" type="submit" v-else :disabled="selectDisabled">
          <i class="fa fa-save mr-1"></i>
          <span>
            <u>S</u>ave
          </span>
        </button>
        
        <button class="btn btn-secondary" type="button" v-if="selectDisabled">
          <i class="fa fa-times-circle mr-1"></i>
          <span>
            Canc
            <u>e</u>l
          </span>
        </button>
        <button
          class="btn btn-outline-primary"
          type="button"
          v-else
          :disabled="selectDisabled"
          @click="cancel"
        >
          <router-link
            to="/other-mod/inquiry-accounts-payable"
            class="new"
            :disabled="selectDisabled"
          >
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </router-link>
        </button>
      </div>
    </form>

</div>
</template>

<script>
export default {
    data() {
        return {
      accountspayable: {
        apBrCode: "",
        apSlcCode: "",
        apSltCode: "",
        apRefNo: "",
        clientIdAp: "",
        lastName: "",
        firstName: "",
        middleName: "",
        suffix: "",
        acctType: "",
        jointType: "",
        clientType: "",
        accountStatus: "",
        accountName: "",
        dateOpened: "",
        apPamt: "",
        apStatus: "",
        apTrDate: "",
        apTerms: "",
        apTermPerd: "",
        apPppmtMode: "",
        apPppmtMfac: "",
        apPppmtMod2: "",
        apDdFlag: "",
        apFpdDate: "",
        apMatDate: "",
        apRemarks: "",
        apUpdDateTime: "",
        apUpdUser: "",
        aplSlcCode: "",
        aplSltCode: "",
        aplRef_No: ""
      },

      client: {
        clientId: "",
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

      //
      edit: false,

      successAdd: "",

      successEdit: "",

      selectDisabled: true,

      readOnly: true,

      paramId: "",

      // client
      clientAcctTypes: [],
      clientJointTypes: [],
      clientClientTypes: [],
      clientAccountStatuses: [],

      // accountspayable only plural
      ratings: [],
      accountspayableSlTypes: [],
      accountspayableCtsTypes: [],
      accountspayablePamt: [],
      accountspayableStatus: [],
      accountspayableapTrDates: [],
      accountspayableapTerms: [],
      accountspayableTermPerds: [],
      accountspayablePppmtModes: [],
      accountspayablePppmtMfacs: [],
      accountspayablePppmtMod2s: [],
      accountspayableDueDateTypes: [],
      accountspayableMatDates: [],
      accountspayableRemarks: [],
      accountspayableUpdDateTimes: [],
      accountspayableUpdUser: [],
      accountspayablelSlcCode: [],
      accountspayablelSltCode: [],
      accountspayablelRef_No: []
    };
  },

  mounted() {
    this.apBrCode = this.$route.params.apBrCode;
    this.apSlcCode = this.$route.params.apSlcCode;
    this.apSltCode = this.$route.params.apSltCode;
    this.apRefNo = this.$route.params.apRefNo;
    this.clientIdAp = this.$route.params.clientIdAp;
    if (
      this.apBrCode > 0 &&
      this.apSlcCode > 0 &&
      this.apSltCode > 0 &&
      this.apRefNo > 0 &&
      this.clientIdAp > 0
    ) {
      this.fetchApById(
        this.apBrCode,
        this.apSlcCode,
        this.apSltCode,
        this.apRefNo,
        this.clientIdAp
      );
    }

    this.paramId = this.$route.params.id;
    console.log(this.paramId);
    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
    }
  },

  //
  created() {
    this.fetchRatings();
    this.fetchAccountsPayableSlTypes();
    this.fetchAccountsPayableCtsTypes();
    this.fetchAccountsPayableTermPerds();
    this.fetchAccountsPayablePppmtModes();
    this.fetchAccountsPayableDueDateTypes();
    this.fetchAcctTypes();
    this.fetchJointTypes();
    this.fetchClientTypes();
    this.fetchAccountStatuses();
  },

  //
  methods: {
    fetchApById(apBrCode, apSlcCode, apSltCode, apRefNo, clientIdAp) {
      fetch(
        `/api/ap/${apBrCode}/${apSlcCode}/${apSltCode}/${apRefNo}/${clientIdAp}`
      )
        .then(res => res.json())
        .then(res => {
          this.accountspayable = res.data[0];
          console.log(this.accountspayable);
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

    fetchRatings() {
      fetch("/api/ratings")
        .then(res => res.json())
        .then(res => {
          this.ratings = res.data;
          console.log(this.ratings);
        })
        .catch(err => console.log(err));
    },

    fetchAcctTypes() {
      fetch("/api/acctTypes")
        .then(res => res.json())
        .then(res => {
          this.clientAcctTypes = res.data;
          console.log(this.clientAcctTypes);
        })
        .catch(err => console.log(err));
    },

    fetchJointTypes() {
      fetch("/api/jointTypes")
        .then(res => res.json())
        .then(res => {
          this.clientJointTypes = res.data;
          console.log(this.clientJointTypes);
        })
        .catch(err => console.log(err));
    },

    fetchClientTypes() {
      fetch("/api/clientTypes")
        .then(res => res.json())
        .then(res => {
          this.clientClientTypes = res.data;
          console.log(this.clientClientTypes);
        })
        .catch(err => console.log(err));
    },

    fetchAccountStatuses() {
      fetch("/api/acctStatuses")
        .then(res => res.json())
        .then(res => {
          this.clientAccountStatuses = res.data;
          console.log(this.clientAccountStatuses);
        })
        .catch(err => console.log(err));
    },

    fetchAccountsPayableSlTypes() {
      fetch("/api/slTypes")
        .then(res => res.json())
        .then(res => {
          this.accountspayableSlTypes = res.data;
          console.log(this.accountspayableSlTypes);
        })
        .catch(err => console.log(err));
    },

    fetchAccountsPayableCtsTypes() {
      fetch("/api/ctsTypes")
        .then(res => res.json())
        .then(res => {
          this.accountspayableCtsTypes = res.data;
          console.log(this.accountspayableCtsTypes);
        })
        .catch(err => console.log(err));
    },

    fetchAccountsPayableTermPerds() {
      fetch("/api/terms")
        .then(res => res.json())
        .then(res => {
          this.accountspayableTermPerds = res.data;
          console.log(this.accountspayableTermPerds);
        })
        .catch(err => console.log(err));
    },

    fetchAccountsPayablePppmtModes() {
      fetch("/api/paymentModes")
        .then(res => res.json())
        .then(res => {
          this.accountspayablePppmtModes = res.data;
          console.log(this.accountspayablePppmtModes);
        })
        .catch(err => console.log(err));
    },

    fetchAccountsPayableDueDateTypes() {
      fetch("/api/dueDateTypes")
        .then(res => res.json())
        .then(res => {
          this.accountspayableDueDateTypes = res.data;
          console.log(this.accountspayableDueDateTypes);
        })
        .catch(err => console.log(err));
    },

    // inserting api
    insertAp() {
      if (this.edit === false) {
        fetch("/api/ap", {
          method: "post",
          body: JSON.stringify(this.accountspayable),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            (this.accountspayable.apBrCode = ""),
              (this.accountspayable.apSlcCode = ""),
              (this.accountspayable.apSltCode = ""),
              (this.accountspayable.apRefNo = ""),
              (this.accountspayable.apPamt = ""),
              (this.accountspayable.apStatus = ""),
              (this.accountspayable.apTrDate = ""),
              (this.accountspayable.apTerms = ""),
              (this.accountspayable.apTermPerd = ""),
              (this.accountspayable.apPppmtMode = ""),
              (this.accountspayable.apPppmtMfac = ""),
              (this.accountspayable.apPppmtMod2 = ""),
              (this.accountspayable.apDdFlag = ""),
              (this.accountspayable.apFpdDate = ""),
              (this.accountspayable.apMatDate = ""),
              (this.accountspayable.apAmortzn = ""),
              (this.accountspayable.apRemarks = ""),
              (this.accountspayable.apUpdDateTime = ""),
              (this.accountspayable.apUpdUse = ""),
              (this.accountspayable.aplSlcCode = ""),
              (this.accountspayable.aplSltCode = ""),
              (this.accountspayable.aplRef_No = ""),
              (this.readOnly = true);
            this.selectDisabled = true;
            this.successAdd = true;
            setTimeout(() => {
              this.successAdd = false;
            }, 2000),
              console.log("Accounts Payable Added");
          })
          .catch(err => console.log(err));
      } else {
        fetch("/api/ap", {
          method: "put",
          body: JSON.stringify(this.accountspayable),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            this.successEdit = true;
            this.readOnly = true;
            this.selectDisabled = true;
            setTimeout(() => {
              this.successEdit = false;
            }, 2000),
              console.log("Accounts Payable Update");
            this.fetchApById(
              this.$route.params.apBrCode,
              this.$route.params.apSlcCode,
              this.$route.params.apSltCode,
              this.$route.params.apRefNo,
              this.$route.params.clientIdAp
            );
          })
          .catch(err => console.log(err));
      }
    },

     editAp(accountspayable) {
       this.edit = true;
       this.readOnly = false;
       this.selectDisabled = false;
       this.accountspayable.apBrCode = accountspayable.apBrCode;
       this.accountspayable.apSlcCode = accountspayable.apSlcCode;
       this.accountspayable.apSltCode = accountspayable.apSltCode;
       this.accountspayable.apRefNo = accountspayable.apRefNo;
       this.accountspayable.clientIdAp = accountspayable.clientIdAp;
       this.accountspayable.apStatus = accountspayable.apStatus;
       this.accountspayable.apTrDate = accountspayable.apTrDate;
       this.accountspayable.apTerms = accountspayable.apTerms;
       this.accountspayable.apTermPerd = accountspayable.apTermPerd;
       this.accountspayable.apPppmtMode = accountspayable.apPppmtMode;
       this.accountspayable.apPppmtMfac = accountspayable.apPppmtMfac;
       this.accountspayable.apPppmtMod2 = accountspayable.apPppmtMod2;
       this.accountspayable.apDdFlag = accountspayable.apDdFlag;
       this.accountspayable.apFpdDate = accountspayable.apFpdDate;
       this.accountspayable.apMatDate = accountspayable.apMatDate;
       this.accountspayable.apAmortzn = accountspayable.apAmortzn;
       this.accountspayable.apRemarks = accountspayable.apRemarks;
       this.accountspayable.apUpdDateTime = accountspayable.apUpdDateTime;
       this.accountspayable.apUpdUse = accountspayable.apUpdUse;
       this.accountspayable.aplSlcCode = accountspayable.aplSlcCode;
       this.accountspayable.aplSltCode = accountspayable.aplSltCode;
       this.accountspayable.aplRef_No = accountspayable.aplRef_No;
     },

     insertNew() {
       this.readOnly = false;
       this.selectDisabled = false;
       this.accountspayable.apBrCode = "";
       this.accountspayable.apSlcCode = "";
       this.accountspayable.apSltCode = "";
       this.accountspayable.apRefNo = "";
      if (this.$route.params.id) {
        this.accountspayable.clientIdAp = this.$route.params.id;
      } else if (this.$route.params.apBrCode && this.$route.params.apSlcCode && this.$route.params.apSltCode && this.$route.params.apRefNo && this.$route.params.clientIdAp) {
        this.accountspayable.clientIdAp = this.$route.params.clientIdAp;
      }
       this.accountspayable.apPamt = "";
       this.accountspayable.apStatus = "";
       this.accountspayable.apTrDate = new Date().toISOString().slice(0,10);
       this.accountspayable.apTerms = "";
       this.accountspayable.apTermPerd = "";
       this.accountspayable.apPppmtMode = "";
       this.accountspayable.apPppmtMfac = "";
       this.accountspayable.apPppmtMod2 = "";
       this.accountspayable.apDdFlag = "";
       this.accountspayable.apFpdDate = "";
       this.accountspayable.apMatDate = "";
       this.accountspayable.apAmortzn = "";
       this.accountspayable.apRemarks = "";
       this.accountspayable.apUpdDateTime = "";
       this.accountspayable.apUpdUse = "";
       this.accountspayable.aplSlcCode = "";
       this.accountspayable.aplSltCode = "";
       this.accountspayable.aplRef_No = "";
     },

     cancel() {
       this.readOnly = true;
       this.selectDisabled = true;
       this.accountspayable.apBrCode = "";
       this.accountspayable.apSlcCode = "";
       this.accountspayable.apSltCode = "";
       this.accountspayable.apRefNo = "";
       this.accountspayable.clientIdAp = "";
       this.accountspayable.lastName = "";
       this.accountspayable.firstName = "";
       this.accountspayable.middleName = "";
       this.accountspayable.suffix = "";
       this.accountspayable.acctType = "";
       this.accountspayable.jointType = "";
       this.accountspayable.clientType = "";
       this.accountspayable.accountStatus = "";
       this.accountspayable.accountName = "";
       this.accountspayable.dateOpened = "";
       this.accountspayable.apPamt = "";
       this.accountspayable.apStatus = "";
       this.accountspayable.apTrDate = "";
       this.accountspayable.apTerms = "";
       this.accountspayable.apTermPerd = "";
       this.accountspayable.apPppmtMode = "";
       this.accountspayable.apPppmtMfac = "";
       this.accountspayable.apPppmtMod2 = "";
       this.accountspayable.apDdFlag = "";
       this.accountspayable.apFpdDate = "";
       this.accountspayable.apMatDate = "";
       this.accountspayable.apAmortzn = "";
       this.accountspayable.apRemarks = "";
       this.accountspayable.apUpdDateTime = "";
       this.accountspayable.apUpdUse = "";
       this.accountspayable.aplSlcCode = "";
       this.accountspayable.aplSltCode = "";
       this.accountspayable.aplRef_No = "";

     },

     deleteApById() {
       const apBrCode = this.$route.params.apBrCode;
       const apSlcCode = this.$route.params.apSlcCode;
       const apSltCode = this.$route.params.apSltCode;
       const apRefNo = this.$route.params.apRefNo;
       const clientIdAp = this.$route.params.clientIdAp;
       if (confirm("Are You Sure?")) {
         fetch(
           `/api/ap/${apBrCode}/${apSlcCode}/${apSltCode}/${apRefNo}/${clientIdAp}`,
           {
             method: "delete"
           }
         ).then(res => {
           res.json();
           (this.accountspayable.apBrCode = ""),
              (this.accountspayable.apSlcCode = ""),
              (this.accountspayable.apSltCode = ""),
              (this.accountspayable.apRefNo = ""),
              (this.accountspayable.clientIdAp = ""),
              (this.accountspayable.lastName = ""),
              (this.accountspayable.firstName = ""),
              (this.accountspayable.middleName = ""),
              (this.accountspayable.suffix = ""),
              (this.accountspayable.acctType = ""),
              (this.accountspayable.jointType = ""),
              (this.accountspayable.clientType = ""),
              (this.accountspayable.accountStatus = ""),
              (this.accountspayable.accountName = ""),
              (this.accountspayable.dateOpened = ""),
              (this.accountspayable.apPamt = ""),
              (this.accountspayable.apStatus = ""),
              (this.accountspayable.apTrDate = ""),
              (this.accountspayable.apTerms = ""),
              (this.accountspayable.apTermPerd = ""),
              (this.accountspayable.apPppmtMode = ""),
              (this.accountspayable.apPppmtMfac = ""),
              (this.accountspayable.apPppmtMod2 = ""),
              (this.accountspayable.apDdFlag = ""),
              (this.accountspayable.apFpdDate = ""),
              (this.accountspayable.apMatDate = ""),
              (this.accountspayable.apAmortzn = ""),
              (this.accountspayable.apRemarks = ""),
              (this.accountspayable.apUpdDateTime = ""),
              (this.accountspayable.apUpdUse = ""),
              (this.accountspayable.aplSlcCode = ""),
              (this.accountspayable.aplSltCode = ""),
              (this.accountspayable.aplRef_No = ""),
             console.log("Accounts Payable Removed");
         });
       }
     }
  }
};
</script>

<style>
.inquiry-accounts-payable {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
.bg-light-green {
  background-color: #20c997 !important;
}

.bg-light-blue {
  background-color: #6dcff6 !important;
}

.bg-light-pink {
  background-color: #ef80ff !important;
}

.bg-light-yellow {
  background-color: #fff9c4 !important;
}

.custom-tab > .nav-tabs {
  background-color: #418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link.active {
  color: #fff;
  background-color: #418cb3;
}

.custom-tab > .nav-tabs > .nav-item > .nav-link {
  color: #fff;
  background-color: #418cb3;
  border: 0;
}
</style>