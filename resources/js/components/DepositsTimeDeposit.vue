<template>
  <div class="time-deposit">
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
            <router-link
              v-bind:to="'/deposits/tdsearch/'+client.clientId+'/time-deposit-search'"
              class="btn btn-sm btn-outline-primary mr-4"
              v-if="this.$route.params.id"
            >
              <i class="fa fa-search mr-1"></i>
              <span>Find</span>
            </router-link>

            <router-link
              to="/deposits/time-deposit-search"
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
              v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
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
              @click="editTd(timedeposit)"
              v-if=" this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
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
              @click="deleteTdById"
              v-if=" this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
            >
              <i class="fa fa-trash mr-1"></i>
              <span>
                <u>D</u>elete
              </span>
            </button>
            <button
              class="btn btn-sm btn-outline-secondary mr-4"
              type="button"
              @click="deleteTdById"
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

    <form @submit.prevent="insertTd">
      <div class="form-row py-2">
        <div class="col">
          <fieldset class="border p-2 bg-light">
            <h5>Account Info</h5>
            <div class="form-row align-items-stretch">
              <div class="col-md-7">
                <div class="form-row justify-content-between">
                  <div class="col-sm-4 my-1">
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
                      v-model="timedeposit.clientIdTd"
                      name="clientIdTd"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
                      type="text"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm bg-light-green border-0"
                      v-model="timedeposit.clientIdTd"
                      name="clientIdTd"
                      v-else
                      type="text"
                      readonly
                    >
                  </div>

                  <fieldset class="col-sm-3 my-1 border pb-3 px-3 mx-1">
                    <legend class="col-form-label col-form-label-sm w-auto px-1" for="rating">RATING</legend>
                    <select
                      class="custom-select custom-select-sm"
                      v-model="timedeposit.rating"
                      id
                      name="rating"
                      disabled
                    >
                      <option disabled>(Select one)</option>
                      <option
                        v-for=" rating in ratings"
                        v-bind:value="rating.ratingId"
                      >{{rating.ratingDesc}}</option>
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
                      v-model="timedeposit.lastName"
                      name="lastName"
                      type="text"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="timedeposit.lastName"
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
                      v-model="timedeposit.firstName"
                      name="firstName"
                      type="text"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="timedeposit.firstName"
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
                      v-model="timedeposit.middleName"
                      name="middleName"
                      type="text"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="timedeposit.middleName"
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
                      v-model="timedeposit.suffix"
                      name="suffix"
                      type="text"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
                      readonly
                    >
                    <input
                      class="form-control form-control-sm"
                      v-model="timedeposit.suffix"
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
                      for="orgName"
                    >Organization Name</legend>
                    <input
                      class="form-control form-control-sm"
                      v-model="timedeposit.accountName"
                      name="account"
                      type="text"
                      :readonly="readOnly"
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
                        v-if="this.$route.params.id"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="timedeposit.dateOpened"
                        name="dateOpened"
                        type="date"
                        v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
                        readonly
                      >
                      <input
                        class="form-control form-control-sm"
                        v-model="timedeposit.dateOpened"
                        name="dateOpened"
                        type="date"
                        v-else
                        readonly
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
                      v-model="timedeposit.acctType"
                      name="acctType"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
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
                      v-model="timedeposit.acctType"
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
                      v-model="timedeposit.jointType"
                      name="jntType"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
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
                      v-model="timedeposit.jointType"
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
                      v-model="timedeposit.clientType"
                      name="clientType"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
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
                      v-model="timedeposit.clientType"
                      name="jntType"
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
                        v-for="clientAcctStatus in clientAcctStatuses"
                        v-bind:value="clientAcctStatus.acctStatId"
                      >{{ clientAcctStatus.acctStatDesc }}</option>
                    </select>
                    <select
                      class="custom-select custom-select-sm"
                      v-model="timedeposit.accountStatus"
                      name="accountStatus"
                      v-else-if="this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd"
                      disabled
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="clientAcctStatus in clientAcctStatuses"
                        v-bind:value="clientAcctStatus.acctStatId"
                      >{{ clientAcctStatus.acctStatDesc }}</option>
                    </select>
                    <select
                      class="custom-select custom-select-sm"
                      v-model="timedeposit.accountStatus"
                      name="accountStatus"
                      v-else
                      disabled
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="clientAcctStatus in clientAcctStatuses"
                        v-bind:value="clientAcctStatus.acctStatId"
                      >{{ clientAcctStatus.acctStatDesc }}</option>
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
              <li class="nav-item">
                <a
                  class="nav-link active"
                  href
                  role="tab"
                  id="ngb-tab-3"
                  aria-controls="ngb-tab-3-panel"
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
                aria-labelledby="ngb-tab-3"
                id="ngb-tab-3-panel"
                aria-expanded="true"
              >
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
                          v-model="timedeposit.tdSltCode"
                          name="tdSltCode"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(Select one)</option>
                          <option
                            v-for="depositSlType in depositSlTypes"
                            v-bind:value="depositSlType.slTypeSltCode"
                          >{{ depositSlType.slTypeMDesc}}</option>
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
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm bg-light-green border-0"
                          v-model="timedeposit.tdRefNo"
                          name="tdRefNo"
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
                          v-model="timedeposit.tdTrDate"
                          name="tdTrDate"
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
                          v-model="timedeposit.tdStatus"
                          name="tdstatus"
                          :disabled="selectDisabled"
                        >
                          <option disabled>(Select one)</option>
                          <option
                            v-for="depositCtsType in depositCtsTypes"
                            v-bind:value="depositCtsType.ctsTypeCode"
                          >{{depositCtsType.ctsTypeDesc}}</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Time Certificate Number:</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm"
                          v-model="timedeposit.tdCertNum"
                          name="tdCertNum"
                          type="number"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-row justify-content-between">
                  <div class="col align-self-end">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                        for="interestRate"
                      >Interest Rate:</label>
                      <div class="col my-1">
                        <input
                          class="form-control form-control-sm text-right"
                          v-model="timedeposit.tdIntRate"
                          name="tdInRate"
                          type="number"
                          :readonly="readOnly"
                        >
                      </div>
                      <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Term:</label>
                      <div class="col-sm my-1">
                        <div class="form-row">
                          <div class="col-sm-3">
                            <input
                              class="form-control form-control-sm"
                              v-model="timedeposit.tdTerms"
                              name="tdTerm"
                              type="number"
                              :readonly="readOnly"
                            >
                          </div>
                          <div class="col my-1">
                            <select
                              class="custom-select custom-select-sm"
                              id
                              v-model="timedeposit.tdTermPerd"
                              name="tdTermPerds"
                              :disabled="selectDisabled"
                            >
                              <option disabled>(Select one)</option>
                              <option
                                v-for="tdTermPerd in tdTermPerds"
                                v-bind:value="tdTermPerd.termId"
                              >{{ tdTermPerd.termDesc }}</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Maturity</label>
                      <div class="col-sm my-1">
                        <input
                          class="form-control form-control-sm text-right bg-light-green border-0"
                          name
                          type="text"
                          :readonly="readOnly"
                        >
                      </div>
                    </div>
                  </div>

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
                    <u>R</u>emarks
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#rollover" role="tab">
                  <span>Rollover</span>
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
                      v-model="timedeposit.holdCode"
                      name="holdCode"
                      :disabled="selectDisabled"
                    >
                      <option disable>(Select one)</option>
                      <option
                        v-for="holdCode in holdCodes"
                        v-bind:value="holdCode.holdCodeId"
                      >{{ holdCode.holdCodeDesc}}</option>
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
                <textarea class="form-control form-control-sm" cols="30" v-model="timedeposit.tdRemarks" name="tdRemarks" rows="10" :readonly="readOnly"></textarea>
              </div>

              <div role="tabpanel" class="tab-pane" id="rollover">
                <fieldset class="border p-2 bg-light">
                  <h5 class="text-center">
                    <u>C</u>REDIT Interest Earned to:
                  </h5>
                  <div class="form-check mb-4">
                    <input
                      checked
                      class="form-check-input"
                      id="exampleRadios1"
                      name
                      type="radio"
                      value
                    >
                    <label class="form-check-label" for="exampleRadios1">Subsidiary Ledger</label>
                    <div class="form-row justify-content-between">
                      <div class="col-sm-2">
                        <input class="form-control form-control-sm" type="text">
                      </div>
                      <div class="col-sm-2">
                        <input class="form-control form-control-sm" type="text">
                      </div>
                      <div class="col">
                        <input class="form-control form-control-sm bg-warning border-0" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="exampleRadios2" name type="radio" value>
                    <label class="form-check-label" for="exampleRadios2">General Ledger Only</label>
                    <div class="form-row justify-content-between">
                      <div class="col-sm-4">
                        <input class="form-control form-control-sm" type="text">
                      </div>
                      <div class="col">
                        <input class="form-control form-control-sm bg-warning border-0" type="text">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="form-check mb-4">
                    <input
                      checked
                      class="form-check-input"
                      id="exampleRadios1"
                      name
                      type="radio"
                      value
                    >
                    <label class="form-check-label" for="exampleRadios1">Principal</label>
                  </div>
                </fieldset>
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
      timedeposit: {
        tdBrCode: "",
        tdSlcCode: "",
        tdSltCode: "",
        tdRefNo: "",
        clientIdTd: "",
        lastName: "",
        firstName: "",
        middleName: "",
        acctType: "",
        jointType: "",
        clientType: "",
        acctStatus: "",
        rating: "",
        accountName: "",
        dateOpened: "",
        tdStatus: "",
        tdIntRate: "",
        tdTerms: "",
        tdTermPerd: "",
        tdRefNo: "",
        tdCertNum: "",
        tdUpdUser: "",
        tdRemarks: "",
        tdUpdDateTime: "",
        tdMatDate: "",
        tdStatus: "",
        tdTrDate: "",
        tdRoSlcCode: "",
        tdRoSltCode: "",
        tdRoAcctCode: "",
        holdCode: ""
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
      clientAcctStatuses: [],

      // deposits only
      jointTypes: [],
      clientTypes: [],
      acctStatuses: [],
      ratings: [],
      depositSlTypes: [],
      depositCtsTypes: [],
      holdCodes: [],
      tdTermPerds: []
    };
  },

  //
  mounted() {
    this.tdBrCode = this.$route.params.tdBrCode;
    this.tdSlcCode = this.$route.params.tdSlcCode;
    this.tdSltCode = this.$route.params.tdSltCode;
    this.tdRefNo = this.$route.params.tdRefNo;
    this.clientIdTd = this.$route.params.clientIdTd;
    if (
      this.tdBrCode > 0 &&
      this.tdSlcCode > 0 &&
      this.tdSltNode > 0 &&
      this.tdRefNo > 0 &&
      this.clientIdTd > 0
    ) {
      this.fetchTdById(
        this.tdBrCode,
        this.tdSlcCode,
        this.tdSltCode,
        this.tdRefNo,
        this.clientIdTd
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
    this.fetchAcctStatuses();
    this.fetchRatings();
    this.fetchAcctStatuses();
    this.fetchRatings();
    this.fetchHoldCodes();
    this.fetchDepositSltTypes();
    this.fetchDepositCtsTypes();
    this.fetchTdTermPerds();
  },

  //
    methods: {
    fetchTdById(tdBrCode, tdSlcCode, tdSltCode, tdRefNo, clientIdTd) {
      fetch(
        `/api/td/${tdBrCode}/${tdSlcCode}/${tdSltCode}/${tdRefNo}/${clientIdTd}`
      )
        .then(res => res.json())
        .then(res => {
          this.timedeposit = res.data[0];
          console.log(this.timedeposit);
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

    fetchAcctStatuses() {
      fetch("/api/acctStatuses")
        .then(res => res.json())
        .then(res => {
          this.clientAcctStatuses = res.data;
          console.log(this.clientAcctStatuses);
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

    fetchTdTermPerds() {
      fetch("/api/terms")
        .then(res => res.json())
        .then(res => {
          this.tdTermPerds = res.data;
          console.log(this.tdTermPerds);
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
    insertTd() {
      if (this.edit === false) {
        fetch("/api/td", {
          method: "post",
          body: JSON.stringify(this.timedeposit),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            this.timedeposit.tdBrCode = "",
            this.timedeposit.tdSlcCode = "",
            this.timedeposit.tdSltCode = "",
            this.timedeposit.tdRefNo = "",
            this.timedeposit.clientIdTd = "",
            this.timedeposit.tdTrDate = "",
            this.timedeposit.tdStatus = "",
            this.timedeposit.tdIntRate = "",
            this.timedeposit.tdTerms = "",
            this.timedeposit.tdTermPerd = "",
            this.timedeposit.tdMatDate = "",
            this.timedeposit.tdCertNum = "",
            this.timedeposit.tdUpdDateTime = "",
            this.timedeposit.tdRemarks = "",
            this.timedeposit.tdUpdUser = "",
            this.timedeposit.tdRoSlcCode = "",
            this.timedeposit.tdRoSltCode = "",
            this.timedeposit.tdRoAcctCode = "",
            this.readOnly = true,
            this.selectDisabled = true,
            this.successAdd = true,
            setTimeout(() => {
              this.successAdd = false;
            }, 2000),
            console.log("Time Deposit Added");
          })
          .catch(err => console.log(err));
      } else {
        fetch("/api/td", {
          method: "put",
          body: JSON.stringify(this.timedeposit),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            this.successEdit = true;
            setTimeout(() => {
              this.successEdit = false;
            }, 2000),
              console.log("Time Deposit Update");
            this.fetchTdById(
              this.$route.params.tdBrCode,
              this.$route.params.tdSlcCode,
              this.$route.params.tdSltCode,
              this.$route.params.tdRefNo,
              this.$route.params.clientIdTd
            );
          })
          .catch(err => console.log(err));
      }
    },

    editTd(timedeposit) {
      this.edit = true;
      this.readOnly = false;
      this.selectDisabled = false;
      this.timedeposit.tdBrCode = timedeposit.tdBrCode;
      this.timedeposit.tdSlcCode = timedeposit.tdSlcCode;
      this.timedeposit.tdSltCode = timedeposit.tdSltCode;
      this.timedeposit.tdRefNo = timedeposit.tdRefNo;
      this.timedeposit.clientIdTd = timedeposit.clientIdTd;
      this.timedeposit.tdTrDate = timedeposit.tdTrDate;
      this.timedeposit.tdStatus = timedeposit.tdStatus;
      this.timedeposit.tdIntRate = timedeposit.tdIntRate;
      this.timedeposit.tdTerms = timedeposit.tdTerms;
      this.timedeposit.tdTermPerd = timedeposit.tdTermPerd;
      this.timedeposit.tdMatDate = timedeposit.tdMatDate;
      this.timedeposit.tdCertNum = timedeposit.tdCertNum;
      this.timedeposit.tdUpdDateTime = timedeposit.tdUpdDateTime;
      this.timedeposit.tdRemarks = timedeposit.tdRemarks;
      this.timedeposit.tdUpdUser = timedeposit.tdUpdUser;
      this.timedeposit.tdRoSlcCode = timedeposit.tdRoSlcCode;
      this.timedeposit.tdRoSltCode = timedeposit.tdRoSltCode;
      this.timedeposit.tdRoAcctCode = timedeposit.tdRoAcctCode;
    },

    deleteTdById() {
      const tdBrCode = this.$route.params.tdBrCode;
      const tdSlcCode = this.$route.params.tdSlcCode;
      const tdSltCode = this.$route.params.tdSltCode;
      const tdRefNo = this.$route.params.tdRefNo;
      const clientIdTd = this.$route.params.clientIdTd;
      if (confirm("Are You Sure?")) {
        fetch(
          `/api/td/${tdBrCode}/${tdSlcCode}/${tdSltCode}/${tdRefNo}/${clientIdTd}`,
          {
            method: "delete"
          }
        )
          .then(res => {
            res.json();
            (this.timedeposit.tdBrCode = ""),
              (this.timedeposit.tdSlcCode = ""),
              (this.timedeposit.tdSltCode = ""),
              (this.timedeposit.tdRefNo = ""),
              (this.timedeposit.clientIdTd = ""),
              (this.timedeposit.tdTrDate = ""),
              (this.timedeposit.tdStatus = ""),
              (this.timedeposit.tdIntRate = ""),
              (this.timedeposit.tdTerms = ""),
              (this.timedeposit.tdTermPerd = ""),
              (this.timedeposit.tdMatDate = ""),
              (this.timedeposit.tdCertNum = ""),
              (this.timedeposit.tdUpdDateTime = ""),
              (this.timedeposit.tdRemarks = ""),
              (this.timedeposit.tdUpdUser = ""),
              (this.timedeposit.tdRoSlcCode = ""),
              (this.timedeposit.tdRoSltCode = ""),
              (this.timedeposit.tdRoAcctCode = ""),
              console.log("Time Deposit Removed");
          })
          .catch(err => console.log(err));
      }
    },

    insertNew() {
      this.readOnly = false;
      this.selectDisabled = false;
      this.timedeposit.tdBrCode = "";
      this.timedeposit.tdSlcCode = "";
      this.timedeposit.tdSltCode = "";
      this.timedeposit.tdRefNo = "";
      if (this.$route.params.id) {
        this.timedeposit.clientIdTd = this.$route.params.id;
      } else if (this.$route.params.tdBrCode && this.$route.params.tdSlcCode && this.$route.params.tdSltCode && this.$route.params.tdRefNo && this.$route.params.clientIdTd) {
        this.timedeposit.clientIdTd = this.$route.params.clientIdTd;
      }
      this.timedeposit.tdTrDate = new Date().toISOString().slice(0,10);
      this.timedeposit.tdStatus = "";
      this.timedeposit.tdIntRate = "";
      this.timedeposit.tdTerms = "";
      this.timedeposit.tdTermPerd = "";
      this.timedeposit.tdMatDate = "";
      this.timedeposit.tdCertNum = "";
      this.timedeposit.tdUpdDateTime = "";
      this.timedeposit.tdRemarks = "";
      this.timedeposit.tdUpdUser = "";
      this.timedeposit.tdRoSlcCode = "";
      this.timedeposit.tdRoSltCode = "";
      this.timedeposit.tdRoAcctCode = "";
    },

    cancel() {
      this.readOnly = true;
      this.selectDisabled = true;
      this.timedeposit.tdBrCode = "";
      this.timedeposit.tdSlcCode = "";
      this.timedeposit.tdSltCode = "";
      this.timedeposit.tdRefNo = "";
      this.timedeposit.clientIdTd = "";
      this.timedeposit.tdTrDate = "";
      this.timedeposit.tdStatus = "";
      this.timedeposit.tdIntRate = "";
      this.timedeposit.tdTerms = "";
      this.timedeposit.tdTermPerd = "";
      this.timedeposit.tdMatDate = "";
      this.timedeposit.tdCertNum = "";
      this.timedeposit.tdUpdDateTime = "";
      this.timedeposit.tdRemarks = "";
      this.timedeposit.tdUpdUser = "";
      this.timedeposit.tdRoSlcCode = "";
      this.timedeposit.tdRoSltCode = "";
      this.timedeposit.tdRoAcctCode = "";
    }
  }
};
</script>

<style>
.time-deposit{
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