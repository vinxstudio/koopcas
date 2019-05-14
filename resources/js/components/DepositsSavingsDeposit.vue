<template>
  <div class="savings-deposit">
    <div>
      <nav class="navbar navbar-expand-lg p-0" id="toolbar">
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
            <!--added router-->
            <router-link
              v-bind:to="'/deposits/sdsearch/'+client.clientId+'/savings-deposit-search'"
              class="btn btn-sm btn-outline-primary mr-4"
              v-if="this.$route.params.id"
            >
              <i class="fa fa-search mr-1"></i>
              <span>Find</span>
            </router-link>

            <!--added v-else-->
            <router-link
              to="/deposits/savings-deposit-search"
              class="btn btn-sm btn-outline-primary mr-4"
              v-else
            >
              <i class="fa fa-search mr-1"></i>
              <span>Find</span>
            </router-link>

            <!--added button @insert-->
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
              v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
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
              @click="editSd(savingsdeposit)"
              v-if=" this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
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
              @click="deleteSdById"
              v-if=" this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
            >
              <i class="fa fa-trash mr-1"></i>
              <span>
                <u>D</u>elete
              </span>
            </button>
            <button
              class="btn btn-sm btn-outline-secondary mr-4"
              type="button"
              @click="deleteSdById"
              v-else
            >
              <i class="fa fa-trash mr-1"></i>
              <span>
                <u>D</u>elete
              </span>
            </button>
          </li>
        </ul>
      </nav>
    </div>

    <div
      class="alert alert-success"
      v-if="successAdd"
      transition="expand"
    >Deposit Successfully Added.</div>

    <div
      class="alert alert-success"
      v-if="successEdit"
      transition="expand"
    >Deposit Successfully Updated.</div>

    <form @submit.prevent="insertSd">
      <div class="form-row py-2">
        <div class="col">
          <fieldset class="border p-2 bg-light">
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
                      v-model="savingsdeposit.clientIdSd"
                      name="clientIdSd"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
                      type="text"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm bg-light-green border-0"
                      v-model="savingsdeposit.clientIdSd"
                      name="clientIdSd"
                      v-else
                      type="text"
                      readonly
                    >
                  </div>

                  <fieldset class="col-sm-3 my-1 border pb-3 px-3 mx-1">
                    <legend class="col-form-label col-form-label-sm w-auto px-1" for="rating">RATING</legend>
                    <select
                      class="custom-select custom-select-sm"
                      v-model="savingsdeposit.rating"
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
                      v-model="savingsdeposit.lastName"
                      name="lastName"
                      type="text"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="savingsdeposit.lastName"
                      name="lastName"
                      type="text"
                      v-else
                      readonly
                    >
                  </div>

                  <div class="col-sm-auto d-none d-sm-block">
                    <label></label>
                    <p style="margin: 25px 0 0 -5px; font-weight: bolder;">,</p>
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
                      v-model="savingsdeposit.firstName"
                      name="firstName"
                      type="text"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="savingsdeposit.firstName"
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
                      v-model="savingsdeposit.middleName"
                      name="middleName"
                      type="text"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="savingsdeposit.middleName"
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
                      v-model="savingsdeposit.suffix"
                      name="suffix"
                      type="text"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="savingsdeposit.suffix"
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
                      v-model="savingsdeposit.accountName"
                      name="accountName"
                      type="text"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="savingsdeposit.accountName"
                      name="accountName"
                      type="text"
                      v-else
                      readonly
                    >
                  </fieldset>

                  <div class="col-sm-4">
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
                        v-model="savingsdeposit.dateOpened"
                        name="dateOpened"
                        type="date"
                        readonly
                        v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="savingsdeposit.dateOpened"
                        name="dateOpened"
                        type="date"
                        readonly
                        v-else
                      >
                    </fieldset>
                  </div>
                </div>
              </div>

              <div class="col-md-5">
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    for="sdType"
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
                      v-model="savingsdeposit.acctType"
                      name="acctType"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
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
                      v-model="savingsdeposit.acctType"
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
                      v-model="savingsdeposit.jointType"
                      name="jntType"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
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
                      v-model="savingsdeposit.jointType"
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
                    for="sdType"
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
                      v-model="savingsdeposit.clientType"
                      name="acctType"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
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
                      v-model="savingsdeposit.clientType"
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
                      v-model="savingsdeposit.accountStatus"
                      name="accountStatus"
                      v-else-if="this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd"
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
                      v-model="savingsdeposit.accountStatus"
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

      <div class="form-row mt-2">
        <div class="col-md-7 align-items-stretch">
          <div class="custom-tabs tab-content-bg-light">
            <ul role="tablist" class="nav nav-tabs nav-fill">
              <!---->
              <li class="nav-item">
                <a class="nav-link active" href="#setup" role="tab">
                  <span>
                    Se
                    <u>t</u>up
                  </span>
                </a>
              </li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="setup">
                <div class="form-row justify-content-between">
                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="depositType"
                      >Deposit Type:</label>

                      <div class="col-sm my-1">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          v-model="savingsdeposit.sdSltCode"
                          name="sdSltCode"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(select one)</option>
                          <option
                            v-for="depositSlType in depositSlTypes"
                            v-bind:value="depositSlType.slTypeSltCode"
                          >{{ depositSlType.slTypeMDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="accountNum"
                      >Account Number:</label>
                      <div class="col my-1">
                        <input
                          class="form-control form-control-sm bg-light-green border-0"
                          v-model="savingsdeposit.sdRefNo"
                          name="sdRefNo"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-row justify-content-between">
                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="dateOpened"
                      >Date Opened:</label>

                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm"
                          v-model="savingsdeposit.sdTrDate"
                          name="sdTrDate"
                          type="date"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>

                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="status"
                      >Status:</label>

                      <div class="col-sm my-1">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          v-model="savingsdeposit.sdStatus"
                          name="sdStatus"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(select one)</option>
                          <option
                            v-for="depositCtsType in depositCtsTypes"
                            v-bind:value="depositCtsType.ctsTypeCode"
                          >{{ depositCtsType.ctsTypeDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="savingsClass"
                      >Savings Class:</label>

                      <div class="col-sm my-1">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          v-model="savingsdeposit.sdSavClass"
                          name="sdSavClass"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(select one)</option>
                          <option
                            v-for="depositSavClass in depositSavClasses"
                            v-bind:value="depositSavClass.SavClassID"
                          >{{ depositSavClass.SavClassDesc }}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-row justify-content-between">
                  <div class="col align-self-end">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="minBalance"
                      >Minimum Balance:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm text-right"
                          v-model="savingsdeposit.sdMinBal"
                          name="sdminBalance"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>

                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="interestRate"
                      >Interest Rate:</label>
                      <div class="col my-1">
                        <input
                          class="form-control form-control-sm text-right"
                          v-model="savingsdeposit.sdIntRate"
                          name="interestRate"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                      <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                    </div>
                  </div>

                  <!-- Still need to Add Formula  -->
                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="totalBalance"
                      >Total Balance:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-pink border-0 text-right"
                          name="totalBalance"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>

                    <!-- Still need to Add Formula  -->
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="floats"
                      >Floats:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-pink border-0 text-right"
                          name="floats"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>

                    <!-- Still need to Add Formula  -->
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="encumbered"
                      >Encumbered:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-pink border-0 text-right"
                          name="encumbered"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>

                    <!-- Still need to Add Formula  -->
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="availBalance"
                      >Avail. Balance:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-pink border-0 text-right"
                          name="availBalance"
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!---->
          </div>
        </div>

        <div class="col-md-5 align-items-stretch">
          <div class="custom-tabs tab-content-bg-light">
            <ul role="tablist" class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#holdouts" role="tab">
                  <span>
                    <u>H</u>oldouts
                  </span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#remarks" role="tab">
                  <span>
                    <u>R</u>
                    emarks
                  </span>
                </a>
              </li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="holdouts">
                <div class="form-row justify-content-between">
                  <div class="col-sm my-1">
                    <label class="col-form-label col-form-label-sm" for="clientId">Amount Held:</label>
                    <input
                      class="form-control form-control-sm"
                      name="clientId"
                      type="text"
                      :readonly="readOnly"
                    >
                  </div>

                  <div class="col-sm my-1">
                    <label
                      class="col-form-label col-form-label-sm"
                      for="reason"
                    >Reason for Hold-out:</label>
                    <select
                      class="custom-select custom-select-sm"
                      id
                      v-model="savingsdeposit.holdCode"
                      name="holdCode"
                      :disabled="selectDisabled"
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="holdCode in holdCodes"
                        v-bind:value="holdCode.holdCodeId"
                      >{{ holdCode.holdCodeDesc }}</option>
                    </select>
                  </div>
                </div>

                <div class="form-row justify-content-center mt-5 mb-2">
                  <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
                    <i class="fa fa-plus mr-1"></i>
                    <span>Add</span>
                  </button>
                  
                  <button class="btn btn-sm btn-outline-secondary mr-1" disabled type="button">
                    <i class="fa fa-pencil-alt mr-1"></i>
                    <span>Update</span>
                  </button>
                  
                  <button class="btn btn-sm btn-outline-primary" type="button">
                    <i class="fa fa-ban mr-1"></i>
                    <span>Clear</span>
                  </button>
                </div>

                <div class="bg-dark">
                  <table class="table table-sm table-bordered custom-table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">BR</th>
                        <th scope="col">Held Amount</th>
                        <th scope="col">Reason for Hold-out</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>30</td>
                        <td>test</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>30</td>
                        <td>test</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="remarks">
                <label class>Remarks:</label>
                <textarea
                  class="form-control form-control-sm"
                  cols="30"
                  id
                  v-model="savingsdeposit.sdRemarks"
                  name="remarks"
                  rows="10"
                  :readonly="readOnly"
                ></textarea>
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
          <router-link to="/deposits/time-deposit" class="new" :disabled="selectDisabled">
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
      //
      savingsdeposit: {
        sdBrCode: "",
        sdSlcCode: "",
        sdSltCode: "",
        sdRefNo: "",
        clientIdSd: "",
        acctType: "",
        jointType: "",
        clientType: "",
        accountStatus: "",
        department: "",
        accountName: "",
        referenceId: "",
        holdCode: "",
        dateOpened: "",
        rating: "",
        firstName: "",
        lastName: "",
        middlename: "",
        alertLevel: "",
        sdTrDate: "",
        sdStatus: "",
        sdMinBal: "",
        sdIntRate: "",
        sdUpdDateTime: "",
        sdRemarks: "",
        sdUpdUser: "",
        sdSavClass: ""
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

      // deposits only plural
      jointTypes: [],
      clientTypes: [],
      accountStatuses: [],
      ratings: [],
      holdCodes: [],
      depositSlTypes: [],
      depositCtsTypes: [],
      depositSavClasses: []
    };
  },

  //
  mounted() {
    this.sdBrCode = this.$route.params.sdBrCode;
    this.sdSlcCode = this.$route.params.sdSlcCode;
    this.sdSltCode = this.$route.params.sdSltCode;
    this.sdRefNo = this.$route.params.sdRefNo;
    this.clientIdSd = this.$route.params.clientIdSd;
    if (
      this.sdBrCode > 0 &&
      this.sdSlcCode > 0 &&
      this.sdSltCode > 0 &&
      this.sdRefNo > 0 &&
      this.clientIdSd > 0
    ) {
      this.fetchSdById(
        this.sdBrCode,
        this.sdSlcCode,
        this.sdSltCode,
        this.sdRefNo,
        this.clientIdSd
      );
    }

    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
    }
  },

  //
  created() {
    this.fetchAcctTypes();
    this.fetchJointTypes();
    this.fetchClientTypes();
    this.fetchAccountStatuses();
    this.fetchRatings();
    this.fetchHoldCodes();
    this.fetchDepositSltTypes();
    this.fetchDepositCtsTypes();
    this.fetchDepositSavClasses();
  },

  //
  methods: {
    fetchSdById(sdBrCode, sdSlcCode, sdSltCode, sdRefNo, clientIdSd) {
      fetch(
        `/api/sd/${sdBrCode}/${sdSlcCode}/${sdSltCode}/${sdRefNo}/${clientIdSd}`
      )
        .then(res => res.json())
        .then(res => {
          this.savingsdeposit = res.data[0];
          console.log(this.savingsdeposit);
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

    fetchRatings() {
      fetch("/api/ratings")
        .then(res => res.json())
        .then(res => {
          this.ratings = res.data;
          console.log(this.ratings);
        })
        .catch(err => console.log(err));
    },

    fetchDepositSltTypes() {
      fetch("/api/slTypes")
        .then(res => res.json())
        .then(res => {
          this.depositSlTypes = res.data;
          console.log(this.depositSlTypes);
        })
        .catch(err => console.log(err));
    },

    fetchDepositCtsTypes() {
      fetch("/api/ctsTypes")
        .then(res => res.json())
        .then(res => {
          this.depositCtsTypes = res.data;
          console.log(this.depositCtsTypes);
        })
        .catch(err => console.log(err));
    },

    fetchDepositSavClasses() {
      fetch("/api/savClasses")
        .then(res => res.json())
        .then(res => {
          this.depositSavClasses = res.data;
          console.log(this.depositSavClasses);
        })
        .catch(err => console.log(err));
    },

    fetchHoldCodes() {
      fetch("/api/holdCodes")
        .then(res => res.json())
        .then(res => {
          this.holdCodes = res.data;
          console.log(this.holdCodes);
        })
        .catch(err => console.log(err));
    },

    // inserting api
    insertSd() {
      if (this.edit === false) {
        fetch("/api/sd", {
          method: "post",
          body: JSON.stringify(this.savingsdeposit),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            this.savingsdeposit.sdBrCode = "",
            this.savingsdeposit.sdSlcCode = "",
            this.savingsdeposit.sdSltCode = "",
            this.savingsdeposit.sdRefNo = "",
            this.savingsdeposit.sdTrDate = "",
            this.savingsdeposit.sdMinBal = "",
            this.savingsdeposit.sdIntRate = "",
            this.savingsdeposit.sdUpdDateTime = "",
            this.savingsdeposit.sdRemarks = "",
            this.savingsdeposit.sdUpdUser = "",
            this.savingsdeposit.sdSavClass = "",
            this.readOnly = true,
            this.selectDisabled = true,
            this.successAdd = true,
            setTimeout(() => {
              this.successAdd = false;
            }, 2000),
            console.log("Deposit Added");
          })
          .catch(err => console.log(err));
      } else {
        fetch("/api/sd", {
          method: "put",
          body: JSON.stringify(this.savingsdeposit),
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
              console.log("Deposit Update");
            this.fetchSdById(
              this.$route.params.sdBrCode,
              this.$route.params.sdSlcCode,
              this.$route.params.sdSltCode,
              this.$route.params.sdRefNo,
              this.$route.params.clientIdSd
            );
          })
          .catch(err => console.log(err));
      }
    },

    editSd(savingsdeposit) {
      this.edit = true;
      this.readOnly = false;
      this.selectDisabled = false;
      this.savingsdeposit.sdBrCode = savingsdeposit.sdBrCode;
      this.savingsdeposit.sdSlcCode = savingsdeposit.sdSlcCode;
      this.savingsdeposit.sdSltCode = savingsdeposit.sdSltCode;
      this.savingsdeposit.sdRefNo = savingsdeposit.sdRefNo;
      this.savingsdeposit.clientIdSd = savingsdeposit.clientIdSd;
      this.savingsdeposit.sdTrDate = savingsdeposit.sdTrDate;
      this.savingsdeposit.sdMinBal = savingsdeposit.sdMinBal;
      this.savingsdeposit.sdIntRate = savingsdeposit.sdIntRate;
      this.savingsdeposit.sdUpdDateTime = savingsdeposit.sdUpdDateTime;
      this.savingsdeposit.sdRemarks = savingsdeposit.sdRemarks;
      this.savingsdeposit.sdUpdUser = savingsdeposit.sdUpdUser;
      this.savingsdeposit.sdSavClass = savingsdeposit.sdSavClass;
    },

    insertNew() {
      this.readOnly = false;
      this.selectDisabled = false;
      this.savingsdeposit.sdBrCode = "";
      this.savingsdeposit.sdSlcCode = "";
      this.savingsdeposit.sdSltCode = "";
      this.savingsdeposit.sdRefNo = "";
      if (this.$route.params.id) {
        this.savingsdeposit.clientIdSd = this.$route.params.id;
      } else if (this.$route.params.sdBrCode && this.$route.params.sdSlcCode && this.$route.params.sdSltCode && this.$route.params.sdRefNo && this.$route.params.clientIdSd) {
        this.savingsdeposit.clientIdSd = this.$route.params.clientIdSd;
      }
      this.savingsdeposit.sdTrDate = new Date().toISOString().slice(0,10);
      this.savingsdeposit.sdMinBal = "";
      this.savingsdeposit.sdIntRate = "";
      this.savingsdeposit.sdUpdDateTime = "";
      this.savingsdeposit.sdRemarks = "";
      this.savingsdeposit.sdUpdUser = "";
      this.savingsdeposit.sdSavClass = "";
    },

    cancel() {
      this.readOnly = true;
      this.selectDisabled = true;
      this.savingsdeposit.sdBrCode = "";
      this.savingsdeposit.sdSlcCode = "";
      this.savingsdeposit.sdSltCode = "";
      this.savingsdeposit.sdRefNo = "";
      this.savingsdeposit.clientIdSd = "";
      this.savingsdeposit.sdTrDate = "";
      this.savingsdeposit.sdStatus = "";
      this.savingsdeposit.sdMinBal = "";
      this.savingsdeposit.sdIntRate = "";
      this.savingsdeposit.sdUpdDateTime = "";
      this.savingsdeposit.sdRemarks = "";
      this.savingsdeposit.sdUpdUser = "";
      this.savingsdeposit.sdSavClass = "";
    },

    deleteSdById() {
      const sdBrCode = this.$route.params.sdBrCode;
      const sdSlcCode = this.$route.params.sdSlcCode;
      const sdSltCode = this.$route.params.sdSltCode;
      const sdRefNo = this.$route.params.sdRefNo;
      const clientIdSd = this.$route.params.clientIdSd;
      if (confirm("Are You Sure?")) {
        fetch(
          `/api/sd/${sdBrCode}/${sdSlcCode}/${sdSltCode}/${sdRefNo}/${clientIdSd}`,
          {
            method: "delete"
          }
        ).then(res => {
          res.json();
          (this.savingsdeposit.sdBrCode = ""),
            (this.savingsdeposit.sdSlcCode = ""),
            (this.savingsdeposit.sdSltCode = ""),
            (this.savingsdeposit.sdRefNo = ""),
            (this.savingsdeposit.clientIdSd = ""),
            (this.savingsdeposit.sdTrDate = ""),
            (this.savingsdeposit.sdMinBal = ""),
            (this.savingsdeposit.sdIntRate = ""),
            (this.savingsdeposit.sdUpdDateTime = ""),
            (this.savingsdeposit.sdRemarks = ""),
            (this.savingsdeposit.sdUpdUser = ""),
            (this.savingsdeposit.sdSavClass = ""),
            console.log("Savings Deposit Removed");
        });
      }
    }
  }
};
</script>

<style>
.savings-deposit {
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
</style>