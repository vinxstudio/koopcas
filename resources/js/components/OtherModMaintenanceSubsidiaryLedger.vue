<template>
  <div class="subsidiary-ledger">
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
            v-bind:to="'/other-mod/oslsearch/'+client.clientId+'/maintenance-sl-search'"
            class="btn btn-sm btn-outline-primary mr-4"
            v-if="this.$route.params.id"
          >
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>
          <router-link
            to="/other-mod/maintenance-sl-search"
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
            v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
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
            v-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
            @click="editOsl(subsidiaryledger)"
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
            v-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
            @click="deleteOslById"
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
    >Subsidiary Ledger Successfully Added.</div>

    <div
      class="alert alert-success"
      v-if="successEdit"
      transition="expand"
    >Subsidiary Ledger Successfully Updated.</div>

    <form @submit.prevent="insertOsl">
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
                        v-model="subsidiaryledger.clientIdOsl"
                        name="clientIdOsl"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
                        type="text"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm bg-light-green border-0"
                        v-model="subsidiaryledger.clientIdOsl"
                        name="clientIdOsl"
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
                        v-model="subsidiaryledger.rating"
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
                        v-model="subsidiaryledger.lastName"
                        name="lastName"
                        type="text"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="subsidiaryledger.lastName"
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
                        v-model="subsidiaryledger.firstName"
                        name="firstName"
                        type="text"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="subsidiaryledger.firstName"
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
                        v-model="subsidiaryledger.middleName"
                        name="middleName"
                        type="text"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="subsidiaryledger.middleName"
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
                        v-model="subsidiaryledger.suffix"
                        name="suffix"
                        type="text"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="subsidiaryledger.suffix"
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
                        v-model="subsidiaryledger.accountName"
                        name="accountName"
                        type="text"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="subsidiaryledger.accountName"
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
                        v-model="subsidiaryledger.dateOpened"
                        name="dateOpened"
                        type="date"
                        readonly
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="subsidiaryledger.dateOpened"
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
                      for="slType"
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
                        v-model="subsidiaryledger.acctType"
                        name="acctType"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
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
                        v-model="subsidiaryledger.acctType"
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
                        v-model="subsidiaryledger.jointType"
                        name="jntType"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
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
                        v-model="subsidiaryledger.jointType"
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
                      for="slType"
                    >Client Type:</label>
                    <div class="col-sm-6 my-1">
                      <select
                        class="custom-select custom-select-sm"
                        v-model="client.clientType"
                        name="acctType"
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
                        v-model="subsidiaryledger.clientType"
                        name="acctType"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
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
                        v-model="subsidiaryledger.clientType"
                        name="acctType"
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
                      for="tdType"
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
                        v-model="subsidiaryledger.accountStatus"
                        name="accountStatus"
                        v-else-if="this.$route.params.oslBrCode && this.$route.params.oslSlcCode && this.$route.params.oslSltCode && this.$route.params.oslRefNo && this.$route.params.clientIdOsl"
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
                        v-model="subsidiaryledger.accountStatus"
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

      <div class="form-row mt-2 align-items-stretch">
        <div class="col-md-7">
          <div class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
            <ul role="tablist" class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  href
                  role="tab"
                  id="ngb-tab-25"
                  aria-controls="ngb-tab-25-panel"
                  aria-expanded="true"
                  aria-disabled="false"
                >
                  <span>
                    Se
                    <u>t</u>up
                  </span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div
                role="tabpanel"
                class="tab-pane active"
                aria-labelledby="ngb-tab-25"
                id="ngb-tab-25-panel"
                aria-expanded="true"
              >
                <div class="form-row justify-content-between">
                  <label
                    class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Account Name:</label>
                  <div class="col-sm my-1">
                    <select
                      class="custom-select custom-select-sm"
                      id
                      v-model="subsidiaryledger.oslSltCode"
                      name="oslSltCode"
                      :disabled="selectDisabled"
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="subsidiaryledgerSlType in subsidiaryledgerSlTypes"
                        v-bind:value="subsidiaryledgerSlType.slTypeSltCode"
                      >{{ subsidiaryledgerSlType.slTypeMDesc2 }}</option>
                    </select>
                  </div>
                  <label
                    class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    for="accountNum"
                  >Account Number:</label>
                  <div class="col-sm my-1">
                    <input
                      class="form-control form-control-sm bg-light-green border-0"
                      v-model="subsidiaryledger.oslRefNo"
                      name="oslRefNo"
                      type="text"
                      :readonly="readOnly"
                    >
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="dateopened"
                      >Date Opened:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm text-right"
                          v-model="subsidiaryledger.oslTrDate"
                          name="oslTrDate"
                          type="date"
                          readonly
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
                          v-model="subsidiaryledger.oslStatus"
                          name="oslStatus"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(select one)</option>
                          <option
                            v-for="subsidiaryledgerCtsType in subsidiaryledgerCtsTypes"
                            v-bind:value="subsidiaryledgerCtsType.ctsTypeCode"
                          >{{ subsidiaryledgerCtsType.ctsTypeDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="totalBalance"
                      >Total Balance:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-pink border-0"
                          for="totalBalance"
                          name="totalBalance"
                          type="text"
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="floats"
                      >Floats:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-pink border-0"
                          for="floats"
                          name="floats"
                          type="text"
                        >
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-md-4 col-sm-5 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="avalibalance"
                      >Avail. Balance:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-pink"
                          for="availbalance"
                          name="avalibalance"
                          type="text"
                        >
                      </div>
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
                  id="ngb-tab-26"
                  aria-controls="ngb-tab-26-panel"
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
                aria-labelledby="ngb-tab-26"
                id="ngb-tab-26-panel"
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
            to="/other-mod/maintenance-subsidiary-ledger"
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
      subsidiaryledger: {
        oslBrCode: "",
        oslSlcCode: "",
        oslSltCode: "",
        oslRefNo: "",
        clientIdOsl: "",
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
        oslTrDate: "",
        oslStatus: "",
        oslPamt: "",
        oslUpdDateTime: "",
        oslRemarks: "",
        oslUpdUser: ""
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

      // subsidiaryledger only plural
      ratings: [],
      subsidiaryledgerSlTypes: [],
      subsidiaryledgerCtsTypes: [],
      subsidiaryledgerStatus: [],
      subsidiaryledgerPamt: [],
      subsidiaryledgerUpdDateTime: [],
      subsidiaryledgerRemarks: [],
      subsidiaryledgerUpdUser: []
    };
  },

  mounted() {
    this.oslBrCode = this.$route.params.oslBrCode;
    this.oslSlcCode = this.$route.params.oslSlcCode;
    this.oslSltCode = this.$route.params.oslSltCode;
    this.oslRefNo = this.$route.params.oslRefNo;
    this.clientIdOsl = this.$route.params.clientIdOsl;
    if (
      this.oslBrCode > 0 &&
      this.oslSlcCode > 0 &&
      this.oslSltCode > 0 &&
      this.oslRefNo > 0 &&
      this.clientIdOsl > 0
    ) {
      this.fetchOslById(
        this.oslBrCode,
        this.oslSlcCode,
        this.oslSltCode,
        this.oslRefNo,
        this.clientIdOsl
      );
    }

    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
    }
  },

  //
  created() {
    this.fetchRatings();
    this.fetchSubsidiaryLedgerSlTypes();
    this.fetchSubsidiaryLedgerCtsTypes();
    this.fetchAcctTypes();
    this.fetchJointTypes();
    this.fetchClientTypes();
    this.fetchAccountStatuses();
  },

  //
  methods: {
    fetchOslById(oslBrCode, oslSlcCode, oslSltCode, oslRefNo, clientIdOsl) {
      fetch(
        `/api/osl/${oslBrCode}/${oslSlcCode}/${oslSltCode}/${oslRefNo}/${clientIdOsl}`
      )
        .then(res => res.json())
        .then(res => {
          this.subsidiaryledger = res.data[0];
          console.log(this.subsidiaryledger);
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

    fetchSubsidiaryLedgerSlTypes() {
      fetch("/api/slTypes")
        .then(res => res.json())
        .then(res => {
          this.subsidiaryledgerSlTypes = res.data;
          console.log(this.subsidiaryledgerSlTypes);
        })
        .catch(err => console.log(err));
    },

    fetchSubsidiaryLedgerCtsTypes() {
      fetch("/api/ctsTypes")
        .then(res => res.json())
        .then(res => {
          this.subsidiaryledgerCtsTypes = res.data;
          console.log(this.subsidiaryledgerCtsTypes);
        })
        .catch(err => console.log(err));
    },

    // inserting api
    insertOsl() {
      if (this.edit === false) {
        fetch("/api/osl", {
          method: "post",
          body: JSON.stringify(this.subsidiaryledger),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            (this.subsidiaryledger.oslBrCode = ""),
              (this.subsidiaryledger.oslSlcCode = ""),
              (this.subsidiaryledger.oslSltCode = ""),
              (this.subsidiaryledger.oslRefNo = ""),
              (this.subsidiaryledger.clientIdOsl = ""),
              (this.subsidiaryledger.lastName = ""),
              (this.subsidiaryledger.firstName = ""),
              (this.subsidiaryledger.middleName = ""),
              (this.subsidiaryledger.suffix = ""),
              (this.subsidiaryledger.acctType = ""),
              (this.subsidiaryledger.jointType = ""),
              (this.subsidiaryledger.clientType = ""),
              (this.subsidiaryledger.accountStatus = ""),
              (this.subsidiaryledger.accountName = ""),
              (this.subsidiaryledger.dateOpened = ""),
              (this.subsidiaryledger.oslTrDate = ""),
              (this.subsidiaryledger.oslStatus = ""),
              (this.subsidiaryledger.oslUpdDateTime = ""),
              (this.subsidiaryledger.oslRemarks = ""),
              (this.subsidiaryledger.oslUpdUser = ""),
              (this.readOnly = true);
            this.selectDisabled = true;
            this.successAdd = true;
            setTimeout(() => {
              this.successAdd = false;
            }, 2000),
              console.log("Subsidiary Ledger Added");
          })
          .catch(err => console.log(err));
      } else {
        fetch("/api/osl", {
          method: "put",
          body: JSON.stringify(this.subsidiaryledger),
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
              console.log("Subsidiary Ledger Update");
            this.fetchOslById(
              this.$route.params.oslBrCode,
              this.$route.params.oslSlcCode,
              this.$route.params.oslSltCode,
              this.$route.params.oslRefNo,
              this.$route.params.clientIdOsl
            );
          })
          .catch(err => console.log(err));
      }
    },

    editOsl(subsidiaryledger) {
      this.edit = true;
      this.readOnly = false;
      this.selectDisabled = false;
      this.subsidiaryledger.oslBrCode = subsidiaryledger.oslBrCode;
      this.subsidiaryledger.oslSlcCode = subsidiaryledger.oslSlcCode;
      this.subsidiaryledger.oslSltCode = subsidiaryledger.oslSltCode;
      this.subsidiaryledger.oslRefNo = subsidiaryledger.oslRefNo;
      if (this.$route.params.id) {
        this.accountspayable.clientIdOsl = this.$route.params.id;
      } else if (
        this.$route.params.oslBrCode &&
        this.$route.params.oslSlcCode &&
        this.$route.params.oslSltCode &&
        this.$route.params.oslRefNo &&
        this.$route.params.clientIdOsl
      ) {
        this.accountspayable.clientIdOsl = this.$route.params.clientIdOsl;
      }
      this.subsidiaryledger.oslTrDate = subsidiaryledger.oslTrDate;
      this.subsidiaryledger.oslStatus = subsidiaryledger.oslStatus;
      this.subsidiaryledger.oslUpdDateTime = subsidiaryledger.oslUpdDateTime;
      this.subsidiaryledger.oslRemarks = subsidiaryledger.oslRemarks;
      this.subsidiaryledger.oslUpdUser = subsidiaryledger.oslUpdUser;
    },

    insertNew() {
      this.readOnly = false;
      this.selectDisabled = false;
      this.subsidiaryledger.oslBrCode = "";
      this.subsidiaryledger.oslSlcCode = "";
      this.subsidiaryledger.oslSltCode = "";
      this.subsidiaryledger.oslRefNo = "";
      this.subsidiaryledger.oclientIdOsl = "";
      this.subsidiaryledger.oslTrDate = "";
      this.subsidiaryledger.oslStatus = "";
      this.subsidiaryledger.oslUpdDateTime = "";
      this.subsidiaryledger.oslRemarks = "";
      this.subsidiaryledger.oslUpdUser = "";
    },

    cancel() {
      this.readOnly = true;
      this.selectDisabled = true;
      this.subsidiaryledger.oslBrCode = "";
      this.subsidiaryledger.oslSlcCode = "";
      this.subsidiaryledger.oslSltCode = "";
      this.subsidiaryledger.oslRefNo = "";
      this.subsidiaryledger.clientIdOsl = "";
      this.subsidiaryledger.oslTrDate = "";
      this.subsidiaryledger.oslStatus = "";
      this.subsidiaryledger.oslUpdDateTime = "";
      this.subsidiaryledger.oslRemarks = "";
      this.subsidiaryledger.oslUpdUser = "";
    },

    deleteOslById() {
      const oslBrCode = this.$route.params.oslBrCode;
      const oslSlcCode = this.$route.params.oslSlcCode;
      const oslSltCode = this.$route.params.oslSltCode;
      const oslRefNo = this.$route.params.oslRefNo;
      const oclientIdOsl = this.$route.params.clientIdOsl;
      if (confirm("Are You Sure?")) {
        fetch(
          `/api/osl/${oslBrCode}/${oslSlcCode}/${oslSltCode}/${oslRefNo}/${clientIdOsl}`,
          {
            method: "delete"
          }
        ).then(res => {
          res.json();
          (this.subsidiaryledger.oslBrCode = ""),
            (this.subsidiaryledger.oslSlcCode = ""),
            (this.subsidiaryledger.oslSltCode = ""),
            (this.subsidiaryledger.oslRefNo = ""),
            (this.subsidiaryledger.clientIdOsl = ""),
            (this.subsidiaryledger.oslTrDate = ""),
            (this.subsidiaryledger.oslMinBal = ""),
            (this.subsidiaryledger.oslIntRate = ""),
            (this.subsidiaryledger.oslUpdDateTime = ""),
            (this.subsidiaryledger.oslRemarks = ""),
            (this.subsidiaryledger.oslUpdUser = ""),
            (this.subsidiaryledger.oslSavClass = ""),
            console.log("Subsidiary Ledger Removed");
        });
      }
    }
  }
};
</script>

<style>
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