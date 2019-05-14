<template>
  <div class="payroll-computation">
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
            v-bind:to="'/deposits/share-capital-search/'+client.clientId+'/share-capital-search-deposit'"
            class="btn btn-sm btn-outline-primary mr-4"
            v-if="this.$route.params.id"
          >
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>
          <router-link
            to="/deposits/share-capital-search"
            class="btn btn-sm btn-outline-primary mr-4"
            v-else
          >
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>

          <button
            class="btn btn-sm btn-outline-primary mr-1"
            type="button"
            @click="insertNew"
            v-if="this.$route.params.id"
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
            @click="insertNew"
            v-if="this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc"
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
            @click="editShareCapital(sharecapital)"
            v-if=" this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc"
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
            @click="deleteShareCapital"
            v-if=" this.$route.params.scBrCode && this.$route.params.scSlcCode && this.$route.params.scSltCode && this.$route.params.scRefNo && this.$route.params.clientIdSc"
          >
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button
            class="btn btn-sm btn-outline-secondary mr-4"
            type="button"
            @click="deleteShareCapital"
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

    <div class="alert alert-success" v-if="successAdd" transition="expand">Share Successfully Added.</div>

    <div
      class="alert alert-success"
      v-if="successEdit"
      transition="expand"
    >Share Successfully Updated.</div>

    <form @submit.prevent="insertShare">
      <div class="form-row justify-content-center pt-3">
        <div class="col-sm-6">
          <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
            <ul role="tablist" class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#basic" role="tab">Basic</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#sloption" role="tab">SL Option</a>
              </li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="basic">
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Client Status:</label>
                  <div class="col my-1">
                    <select class="custom-select custom-select-sm" id name>
                      <option value="1" ng-reflect-value="1">1</option>
                      <option value="2" ng-reflect-value="2">2</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Employer Code:</label>
                  <div class="col my-1">
                    <select class="custom-select custom-select-sm" id name>
                      <option value="1" ng-reflect-value="1">1</option>
                      <option value="2" ng-reflect-value="2">2</option>
                    </select>
                  </div>
                  <div class="col-auto col-form-label col-form-label-sm align-self-center">
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">ALL CLIENTS</label>
                    </div>
                  </div>
                </div>
                <div class="form-row align-items-center">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Client Status:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="date">
                  </div>
                  <div class="col-auto col-form-label col-form-label-sm align-self-end">
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">Include Share Capital Pledge</label>
                    </div>
                    <div class="form-check form-check-sm">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">Include Savings Deposit Pledge</label>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">
                    <strong>Transaction Type:</strong>
                  </label>
                  <div class="col my-1">
                    <select class="custom-select custom-select-sm" id name>
                      <option value="1" ng-reflect-value="1">1</option>
                      <option value="2" ng-reflect-value="2">2</option>
                    </select>
                  </div>
                </div>
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">
                    <strong>Department:</strong>
                  </label>
                  <div class="col my-1">
                    <select class="custom-select custom-select-sm" id name>
                      <option value="1" ng-reflect-value="1">1</option>
                      <option value="2" ng-reflect-value="2">2</option>
                    </select>
                  </div>
                </div>
                <div class="form-row align-items-end my-1">
                  <label class="col-sm-2 col-form-label col-form-label-sm my-1 text-truncate">DEBIT:</label>
                  <div class="col">
                    <div class="form-row">
                      <div class="col-sm-2">
                        <div class="form-row">
                          <div class="col-12 text-center">
                            <span>GL Account Code</span>
                          </div>
                          <div class="col my-1">
                            <input class="form-control form-control-sm" name type="text">
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-row">
                          <div class="col-12 text-center">
                            <span>General Ledger Account Title</span>
                          </div>
                          <div class="col my-1">
                            <input
                              class="form-control form-control-sm bg-light-yellow border-0"
                              name
                              type="text"
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-2 col-form-label col-form-label-sm my-1 text-truncate"
                  >Explanation:</label>
                  <div class="col my-1">
                    <textarea class="form-control form-control-sm" cols="30" id name rows="10"></textarea>
                  </div>
                </div>
              </div>

              <div role="tabpanel" class="tab-pane" id="sloption">
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Date Released:</label>
                  <div class="col">
                    <div class="form-row">
                      <div class="col">
                        <div class="form-row">
                          <label
                            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          >From</label>
                          <div class="col my-1">
                            <input class="form-control form-control-sm" name type="date">
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-row">
                          <label
                            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                          >To</label>
                          <div class="col my-1">
                            <input class="form-control form-control-sm" name type="date">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row my-3">
                  <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Class:</label>
                  <div class="col">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select class="custom-select custom-select-sm" id multiple name>
                          <option value="1" ng-reflect-value="1">1</option>
                          <option value="2" ng-reflect-value="2">2</option>
                        </select>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-angle-double-right"></i>
                      </div>
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm bg-light-yellow border-0"
                          id
                          multiple
                          name
                        >
                          <option value="1" ng-reflect-value="1"></option>
                          <option value="2" ng-reflect-value="2"></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row my-3">
                  <label class="col-sm-1 col-form-label col-form-label-sm text-truncate">SL Type:</label>
                  <div class="col">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select class="custom-select custom-select-sm" id multiple name>
                          <option value="1" ng-reflect-value="1">1</option>
                          <option value="2" ng-reflect-value="2">2</option>
                        </select>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-angle-double-right"></i>
                      </div>
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm bg-light-yellow border-0"
                          id
                          multiple
                          name
                        >
                          <option value="1" ng-reflect-value="1"></option>
                          <option value="2" ng-reflect-value="2"></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Collection Type:</label>
                  <div class="col my-1">
                    <select class="custom-select custom-select-sm" id name>
                      <option value="1" ng-reflect-value="1">1</option>
                      <option value="2" ng-reflect-value="2">2</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </ngb-tabset>
          <div class="form-row justify-content-center">
            <div class="col-sm-auto my-2">
              <button class="btn btn-dark-blue btn-block p-3">
                <i class="fa fa-key mr-1"></i>
                <span>Generate</span>
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
      </div>
    </form>
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