<template>
  <div class="report-ap-listing">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
      </ul>
    </nav>
    <div class="form-row mt-2 mb-2 align-items-stretch justify-content-center">
      <div class="col-9">
        <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#basic"
                data-toggle="tab"
                role="tab"
                id="ngb-tab-3"
                aria-controls="ngb-tab-3-panel"
                aria-expanded="true"
                aria-disabled="false"
              >
                <span>
                  <u>B</u>asic
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#clientinfo"
                role="tab"
                id="ngb-tab-4"
                aria-expanded="false"
                aria-disabled="false"
              >
                <span>
                  <u>C</u>lient Info
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="tab"
                href="#advance"
                role="tab"
                id="ngb-tab-5"
                aria-expanded="false"
                aria-disabled="false"
              >
                <span>
                  <u>A</u>dvance
                </span>
              </a>
            </li>
          </ul>
          <div class="tab-content">
            <div
              role="tabpanel"
              class="tab-pane active"
              aria-labelledby="ngb-tab-3"
              id="basic"
              aria-expanded="true"
            >
              <div class="form-row pt-3 no-gutters">
                <div class="col align-items-stretch">
                  <div class="col">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="customCheck1" type="checkbox">
                      <label class="custom-control-label" for="customCheck1">Show Totals Only</label>
                    </div>
                  </div>
                  <br>
                  <div class="form-row align-items-center align-items-stretch">
                    <label
                      class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >CUT-OFF DATE:</label>
                    <div class="col-sm-4">
                      <input class="form-control form-control-sm" type="date">
                    </div>
                  </div>
                  <br>
                  <fieldset class="border p-2">
                    <legend class="col-form-label col-form-label-sm w-auto px-1">Setup Dates</legend>
                    <div class="form-row align-items-center">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Date Setup:</label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="fromdate"
                        >From:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="fromdate" type="date">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row align-items-center">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      ></label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="tomdate"
                        >To:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="tomdate" type="date">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row align-items-center">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Maturity Date:</label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="fromdate"
                        >From:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="fromdate" type="date">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row align-items-center">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      ></label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="todate"
                        >To:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="todate" type="date">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <br>
                  <fieldset class="border p-2">
                    <div class="form-row align-items-center align-items-stretch">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Last Trans Date:</label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="fromdate"
                        >From:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="fromdate" type="date">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="form-row align-items-center align-items-stretch">
                      <label
                        class="col-md-3 col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      ></label>
                      <div class="col form-row align-items-center">
                        <label
                          class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          for="todate"
                        >To:</label>
                        <div class="col">
                          <input class="form-control form-control-sm" name="todate" type="date">
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
                <div class="col-2">
                  <div class="custom-control custom-checkbox justify-content-center">
                    <input class="custom-control-input" id="customCheck2" type="checkbox">
                    <label class="custom-control-label" for="customCheck2">Balance Not ZERO</label>
                  </div>
                  <div class="col justify-content-center">
                    <input
                      class="form-control form-control-sm"
                      style="text-align: center"
                      type="text"
                      value="<>0"
                    >
                  </div>
                  <br>
                  <div class="custom-control custom-checkbox justify-content-center">
                    <input class="custom-control-input" id="customCheck3" type="checkbox">
                    <label class="custom-control-label" for="customCheck3">Group by SL Type</label>
                  </div>
                  <div class="custom-control custom-checkbox justify-content-center">
                    <input class="custom-control-input" id="customCheck4" type="checkbox">
                    <label class="custom-control-label" for="customCheck4">Group by Chapter</label>
                  </div>
                  <br>
                  <br>
                  <div class="custom-control custom-checkbox justify-content-center">
                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                    <label class="custom-control-label" for="customCheck5">Group by Gender</label>
                  </div>
                  <div class="custom-control custom-checkbox justify-content-center">
                    <input class="custom-control-input" id="customCheck6" type="checkbox">
                    <label class="custom-control-label" for="customCheck6">Group by Client ID</label>
                  </div>
                </div>
              </div>
              <div class="form-row justify-content-center">
                <div class="col-sm-10 p-3">
                  <div class="form-row my-5">
                    <label
                      class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                    >
                      <b>SL Type:</b>
                    </label>
                    <div class="col">
                      <div class="form-row align-items-center">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value ng-reflect-value>26-A/P - CFP</option>
                            <option value ng-reflect-value>26-A/P - COSPP</option>
                            <option value ng-reflect-value>26-A/P - GLAFI</option>
                            <option value ng-reflect-value>26-A/P - GPP</option>
                            <option value ng-reflect-value>26-A/P - KASAPI</option>
                            <option value ng-reflect-value>26-A/P - Pioneer</option>
                          </select>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-angle-double-right"></i>
                        </div>
                        <div class="col">
                          <select
                            class="custom-select custom-select-sm bg-warning border-0 h-100"
                            id
                            multiple
                            name
                          >
                            <option value ng-reflect-value></option>
                            <option value ng-reflect-value></option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row my-5">
                    <label
                      class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                    >
                      <b>SL Status:</b>
                    </label>
                    <div class="col">
                      <div class="form-row align-items-center align-items-stretch">
                        <div class="col">
                          <select class="custom-select custom-select-sm h-100" id multiple name>
                            <option value ng-reflect-value>Cancelled</option>
                            <option value ng-reflect-value>G/L Acct Error</option>
                            <option value ng-reflect-value>Pending</option>
                            <option value ng-reflect-value>Posted</option>
                            <option value ng-reflect-value>Reversed</option>
                            <option value ng-reflect-value>S/L Info Error</option>
                          </select>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-angle-double-right"></i>
                        </div>
                        <div class="col">
                          <select
                            class="custom-select custom-select-sm bg-warning border-0 h-100"
                            id
                            multiple
                            name
                          >
                            <option value ng-reflect-value></option>
                            <option value ng-reflect-value></option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              role="tabpanel"
              class="tab-pane"
              aria-labelledby="ngb-tab-22"
              id="clientinfo"
              aria-expanded="true"
            >
              <div class="bg-light">
                <div class="form-row">
                  <fieldset class="col border p-2">
                    <div class="form-row">
                      <div class="col-sm-10 p-3">
                        <div class="form-row my-5">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Client Type:</b>
                          </label>
                          <div class="col">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value>Receiving Voucher</option>
                                  <option value ng-reflect-value>Return Journal</option>
                                </select>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-angle-double-right"></i>
                              </div>
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm bg-warning border-0 h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row my-5">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Gender:</b>
                          </label>
                          <div class="col">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-angle-double-right"></i>
                              </div>
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm bg-warning border-0 h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row my-5">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Civil Status:</b>
                          </label>
                          <div class="col">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value>Cancelled</option>
                                  <option value ng-reflect-value>G/L Acct Error</option>
                                  <option value ng-reflect-value>Pending</option>
                                  <option value ng-reflect-value>Posted</option>
                                  <option value ng-reflect-value>Reversed</option>
                                  <option value ng-reflect-value>S/L Info Error</option>
                                </select>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-angle-double-right"></i>
                              </div>
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm bg-warning border-0 h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row my-5">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Chapter:</b>
                          </label>
                          <div class="col">
                            <div class="form-row align-items-center">
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value>Cancelled</option>
                                  <option value ng-reflect-value>G/L Acct Error</option>
                                  <option value ng-reflect-value>Pending</option>
                                  <option value ng-reflect-value>Posted</option>
                                  <option value ng-reflect-value>Reversed</option>
                                  <option value ng-reflect-value>S/L Info Error</option>
                                </select>
                              </div>
                              <div class="col-auto">
                                <i class="fas fa-angle-double-right"></i>
                              </div>
                              <div class="col">
                                <select
                                  class="custom-select custom-select-sm bg-warning border-0 h-100"
                                  id
                                  multiple
                                  name
                                >
                                  <option value ng-reflect-value></option>
                                  <option value ng-reflect-value></option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <label
                            class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                          >
                            <b>Client ID:</b>
                          </label>
                          <div class="col">
                            <textarea
                              class="form-control form-control-sm bg-warning border-0"
                              cols="30"
                              id="textarea1"
                              name
                              rows="10"
                            ></textarea>
                          </div>
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <button class="btn btn-sm btn-outline-primary mr-4" type="button">
                                <i class="fa fa-search mr-1"></i>
                                <span>
                                  B
                                  <u>r</u>owse
                                </span>
                              </button>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </div>

            <div
              role="tabpanel"
              class="tab-pane"
              aria-labelledby="ngb-tab-26"
              id="advance"
              aria-expanded="true"
            >
              <div class="col">
                <div class="form-row align-items-stretch align-items-center justify-content-center">
                  <label class="col-form-label col-form-label-sm">Remarks:</label>
                  <div class="col">
                    <input class="form-control form-control-sm" type="text">
                  </div>
                </div>
                <br>
                <div class="form-row align-items-center">
                  <label class="col-form-label col-form-label-sm">Birthday:</label>
                  <div class="col form-row align-items-center">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="fromdate"
                    >From:</label>
                    <div class="col-sm-3">
                      <input class="form-control form-control-sm" name="fromdate" type="date">
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-row align-items-center">
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <label class="col-form-label col-form-label-sm"></label>
                  <div class="col form-row align-items-center">
                    <label
                      class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      for="todate"
                    >To:</label>
                    <div class="col-sm-3">
                      <input class="form-control form-control-sm" name="todate" type="date">
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-row align-items-stretch align-items-center justify-content-center">
                  <label class="col-form-label col-form-label-sm">Age:</label>
                  <div class="col">
                    <input class="form-control form-control-sm" type="text">
                  </div>
                </div>
                <div class="form-row my-5">
                  <label class="col-form-label col-form-label-sm text-sm-right text-truncate">
                    <b>Principal Payment Mode:</b>
                  </label>
                  <div class="col">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select class="custom-select custom-select-sm h-100" id multiple name>
                          <option value ng-reflect-value>Cancelled</option>
                          <option value ng-reflect-value>G/L Acct Error</option>
                          <option value ng-reflect-value>Pending</option>
                          <option value ng-reflect-value>Posted</option>
                          <option value ng-reflect-value>Reversed</option>
                          <option value ng-reflect-value>S/L Info Error</option>
                        </select>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-angle-double-right"></i>
                      </div>
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm bg-warning border-0 h-100"
                          id
                          multiple
                          name
                        >
                          <option value ng-reflect-value></option>
                          <option value ng-reflect-value></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row my-5">
                  <label class="col col-form-label col-form-label-sm text-sm-right text-truncate">
                    <b></b>
                  </label>
                  <label
                    class="col-sm-2 col-form-label col-form-label-sm text-sm-right text-truncate"
                  >
                    <b>Restriction Group:</b>
                  </label>
                  <div class="col">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm bg-warning border-0 h-100"
                          id
                          multiple
                          name
                        >
                          <option value ng-reflect-value></option>
                          <option value ng-reflect-value></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </ngb-tabset>
      </div>
    </div>
    <div class="form-row justify-content-center">
      <div class="col-sm-auto my-2">
        <button class="btn btn-dark-blue btn-block p-3">
          <i class="fa fa-save mr-1"></i>
          <span>OK</span>
        </button>
      </div>
      <div class="col-sm-auto my-2">
        <button class="btn btn-outline-dark-blue btn-block p-3">
          <i class="fa fa-ban mr-1"></i>
          <span>Cancel</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      sharecapital: {
        scBrCode: 18,
        scSlcCode: "",
        scSltCode: "",
        scRefNo: "",
        clientIdSc: "",
        lastName: "",
        firstName: "",
        middleName: "",
        suffix: "",
        alertLevel: "",
        department: "",
        acctType: "",
        accountName: "",
        jointType: "",
        clientType: "",
        accountStatus: "",
        dateOpened: "",
        scTrDate: "",
        scStatus: "",
        scMinBal: "",
        scUpdDateTime: "",
        scRemarks: "",
        scUpdUser: "",
        holdReason: ""
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

      successAdd: "",

      successEdit: "",

      selectDisabled: true,

      readOnly: true,

      edit: false,

      clientAcctTypes: [],
      clientJointTypes: [],
      clientClientTypes: [],
      clientAcctStatuses: [],
      depositDepositTypes: [],
      depositDepositStatuses: [],
      depositHoldCodes: []
    };
  },

  mounted() {
    this.scBrCode = this.$route.params.scBrCode;
    this.scSlcCode = this.$route.params.scSlcCode;
    this.scSltCode = this.$route.params.scSltCode;
    this.scRefNo = this.$route.params.scRefNo;
    this.clientIdSc = this.$route.params.clientIdSc;
    if (
      this.scBrCode > 0 &&
      this.scSlcCode > 0 &&
      this.scSltCode > 0 &&
      this.scRefNo > 0 &&
      this.clientIdSc
    ) {
      this.fetchShareCapital(
        this.scBrCode,
        this.scSlcCode,
        this.scSltCode,
        this.scRefNo,
        this.clientIdSc
      );
    }

    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
    }
  },

  created() {
    this.fetchAcctTypes();
    this.fetchJointTypes();
    this.fetchClientTypes();
    this.fetchAcctStatuses();
    this.fetchDepositTypes();
    this.fetchDepositStatus();
    this.fetchDepositHoldCodes();
  },

  methods: {
    fetchShareCapital(scBrCode, scSlcCode, scSltCode, scRefNo, clientIdSc) {
      fetch(
        `/api/sc/${scBrCode}/${scSlcCode}/${scSltCode}/${scRefNo}/${clientIdSc}`
      )
        .then(res => res.json())
        .then(res => {
          this.sharecapital = res.data[0];
          console.log(this.sharecapital);
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

    fetchDepositTypes() {
      fetch("/api/slTypes")
        .then(res => res.json())
        .then(res => {
          this.depositDepositTypes = res.data;
          console.log(this.depositDepositTypes);
        })
        .catch(err => console.log(err));
    },

    fetchDepositStatus() {
      fetch("/api/ctsTypes")
        .then(res => res.json())
        .then(res => {
          this.depositDepositStatuses = res.data;
          console.log(this.depositDepositStatuses);
        })
        .catch(err => console.log(err));
    },

    fetchDepositHoldCodes() {
      fetch("/api/holdCodes")
        .then(res => res.json())
        .then(res => {
          this.depositHoldCodes = res.data;
          console.log(this.depositHoldCodes);
        })
        .catch(err => console.log(err));
    },

    insertShare() {
      if (this.edit === false) {
        fetch("/api/sc", {
          method: "post",
          body: JSON.stringify(this.sharecapital),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            this.sharecapital.scBrCode = "";
            this.sharecapital.scSlcCode = "";
            this.sharecapital.scSltCode = "";
            this.sharecapital.scRefNo = "";
            (this.sharecapital.clientIdSc = ""),
              (this.sharecapital.lastName = ""),
              (this.sharecapital.firstName = ""),
              (this.sharecapital.middleName = ""),
              (this.sharecapital.suffix = ""),
              (this.sharecapital.alertLevel = ""),
              (this.sharecapital.department = ""),
              (this.sharecapital.acctType = ""),
              (this.sharecapital.accountName = ""),
              (this.sharecapital.jointType = ""),
              (this.sharecapital.clientType = ""),
              (this.sharecapital.accountStatus = ""),
              (this.sharecapital.dateOpened = ""),
              (this.sharecapital.scTrDate = "");
            this.sharecapital.scStatus = "";
            this.sharecapital.scMinBal = "";
            this.sharecapital.scUpdDateTime = "";
            this.sharecapital.scRemarks = "";
            this.sharecapital.scUpdUser = "";
            this.sharecapital.holdReason = "";
            this.successAdd = true;
            this.readOnly = true;
            this.selectDisabled = true;
            setTimeout(() => {
              this.successAdd = false;
            }, 2000),
              console.log("Share Capital Added");
          })
          .catch(err => console.log(err));
      } else {
        fetch("/api/sc", {
          method: "put",
          body: JSON.stringify(this.sharecapital),
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
              console.log("Share Capital Updated");
            this.fetchShareCapital(
              this.$route.params.scBrCode,
              this.$route.params.scSlcCode,
              this.$route.params.scSltCode,
              this.$route.params.scRefNo,
              this.$route.params.clientIdSc
            );
          })
          .catch(err => console.log(err));
      }
    },

    editShareCapital(sharecapital) {
      this.edit = true;
      this.readOnly = false;
      this.selectDisabled = false;
      this.sharecapital.scBrCode = sharecapital.scBrCode;
      this.sharecapital.scSlcCode = sharecapital.scSlcCode;
      this.sharecapital.scSltCode = sharecapital.scSltCode;
      this.sharecapital.scRefNo = sharecapital.scRefNo;
      this.sharecapital.scTrDate = sharecapital.scTrDate;
      this.sharecapital.scStatus = sharecapital.scStatus;
      this.sharecapital.scMinBal = sharecapital.scMinBal;
      this.sharecapital.scUpdDateTime = sharecapital.scUpdDateTime;
      this.sharecapital.scRemarks = sharecapital.scRemarks;
      this.sharecapital.scUpdUser = sharecapital.scUpdUser;
      this.sharecapital.holdReason = sharecapital.holdReason;
    },

    deleteShareCapital() {
      const scBrCode = this.$route.params.scBrCode;
      const scSlcCode = this.$route.params.scSlcCode;
      const scSltCode = this.$route.params.scSltCode;
      const scRefNo = this.$route.params.scRefNo;
      const clientIdSc = this.$route.params.clientIdSc;
      if (confirm("Are you sure?")) {
        fetch(
          `/api/sc/${scBrCode}/${scSlcCode}/${scSltCode}/${scRefNo}/${clientIdSc}`,
          {
            method: "delete"
          }
        )
          .then(res => {
            res.json();
            this.sharecapital.scBrCode = "";
            this.sharecapital.scSlcCode = "";
            this.sharecapital.scSltCode = "";
            this.sharecapital.scRefNo = "";
            (this.sharecapital.clientIdSc = ""),
              (this.sharecapital.lastName = "");
            this.sharecapital.firstName = "";
            this.sharecapital.middleName = "";
            this.sharecapital.suffix = "";
            this.sharecapital.alertLevel = "";
            this.sharecapital.department = "";
            this.sharecapital.acctType = "";
            this.sharecapital.accountName = "";
            this.sharecapital.jointType = "";
            this.sharecapital.clientType = "";
            this.sharecapital.accountStatus = "";
            this.sharecapital.dateOpened = "";
            this.sharecapital.scTrDate = "";
            this.sharecapital.scStatus = "";
            this.sharecapital.scMinBal = "";
            this.sharecapital.scUpdDateTime = "";
            this.sharecapital.scRemarks = "";
            this.sharecapital.scUpdUser = "";
            this.sharecapital.holdReason = "";
            console.log("Share Capital Delete");
          })
          .catch(err => console.log(err));
      }
    },

    insertNew() {
      this.readOnly = false;
      this.selectDisabled = false;
      if (this.$route.params.id) {
        this.sharecapital.clientIdSc = this.$route.params.id;
      } else if (
        this.$route.params.scBrCode &&
        this.$route.params.scSlcCode &&
        this.$route.params.scSltCode &&
        this.$route.params.scRefNo &&
        this.$route.params.clientIdSc
      ) {
        this.sharecapital.clientIdSc = this.$route.params.clientIdSc;
      }
      this.sharecapital.scSltCode = "";
      this.sharecapital.scRefNo = "";
      this.sharecapital.scTrDate = new Date().toISOString().slice(0, 10);
      this.sharecapital.scStatus = "";
      this.sharecapital.scMinBal = "";
      this.sharecapital.scUpdDateTime = "";
      this.sharecapital.scRemarks = "";
      this.sharecapital.scUpdUser = "";
      this.sharecapital.holdReason = "";
    },

    cancel() {
      this.readOnly = true;
      this.selectDisabled = true;
      this.sharecapital.scBrCode = "";
      this.sharecapital.scSlcCode = "";
      this.sharecapital.scSltCode = "";
      this.sharecapital.scRefNo = "";
      (this.sharecapital.clientIdSc = ""), (this.sharecapital.lastName = "");
      this.sharecapital.firstName = "";
      this.sharecapital.middleName = "";
      this.sharecapital.suffix = "";
      this.sharecapital.alertLevel = "";
      this.sharecapital.department = "";
      this.sharecapital.acctType = "";
      this.sharecapital.accountName = "";
      this.sharecapital.jointType = "";
      this.sharecapital.clientType = "";
      this.sharecapital.accountStatus = "";
      this.sharecapital.dateOpened = "";
      this.sharecapital.scTrDate = "";
      this.sharecapital.scStatus = "";
      this.sharecapital.scMinBal = "";
      this.sharecapital.scUpdDateTime = "";
      this.sharecapital.scRemarks = "";
      this.sharecapital.scUpdUser = "";
      this.sharecapital.holdReason = "";
    }
  }
};
</script>

<style>
.time-deposit {
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