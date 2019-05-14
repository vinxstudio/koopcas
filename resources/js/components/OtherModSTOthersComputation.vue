<template>
  <div class="others-computation">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-1">Tools</a>
        </li>
      </ul>
    </nav>

    <form @submit.prevent="insertOthersComputation">
      <div class="form-row pt-3">
        <div class="col">
          <span>Amount to debit/credit per Client:</span>
          <div class="form-row">
            <div class="col">
              <select
                class="custom-select custom-select-sm"
                id
                v-model="otherscomputation.oslSlcCode"
                name="oslSlcCode"
                :disabled="selectDisabled"
              >
                <option disabled>(select one)</option>
                <option
                  v-for="otherscomputationSlClasses in otherscomputationSlClasses"
                  v-bind:value="otherscomputationSlClasses.slClassId"
                >{{ otherscomputationSlClasses.slClassDesc }}</option>
              </select>
            </div>
            <div class="col-sm-5">
              <input
                class="form-control form-control-sm"
                v-model="otherscomputation.sdMinBal"
                name="sdMinBal"
                type="number"
              >
            </div>
          </div>
          <div class="pt-3">
            <p>If Balance of SL affected would result to a negative balance, do this:</p>
            <div class="p-3">
              <div class="form-check form-check-sm">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Use the actual balance instead</label>
              </div>
              <div class="form-check form-check-sm">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Skip Client</label>
              </div>
            </div>
            <p>Other Conditions:</p>
            <div class="p-3">
              <div class="form-check form-check-sm">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Post to Existing SL, if non Post to New</label>
              </div>
              <div class="form-check form-check-sm">
                <input class="form-check-input" type="checkbox">
                <label
                  class="form-check-label"
                >Post to Existing SL Only, skip client if SL does not exist</label>
              </div>
              <div class="form-check form-check-sm">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Post to New SL Only, skip client if SL exists</label>
              </div>
              <div class="form-check form-check-sm">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Post to New SL ALWAYS</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <span>Conditions:</span>
          <div class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
            <ul role="tablist" class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#general" role="tab">General</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#clientinfo" role="tab">Client Info</a>
              </li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="general">
                <div class="form-check form-check-sm">
                  <input class="form-check-input" name="naem" type="radio" value="option1">
                  <label class="form-check-label">All Clients</label>
                </div>
                <div class="form-check form-check-sm">
                  <input checked class="form-check-input" name="naem" type="radio" value="option2">
                  <label class="form-check-label">With SL Specified below:</label>
                </div>
                <fieldset class="border p-2">
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >SL Type:</label>
                    <div class="col">
                      <div class="form-row">
                        <div class="col">
                          <input
                            class="form-control form-control-sm"
                            v-model="otherscomputation.sdMinBal"
                            name="sdMinBal"
                            type="number"
                            :readonly="readOnly"
                          >
                        </div>
                        <div class="col">
                          <input
                            class="form-control form-control-sm"
                            v-model="otherscomputation.sdMinBal"
                            name="sdMinBal"
                            type="number"
                            :readonly="readOnly"
                          >
                        </div>
                        <div class="col-sm-8">
                          <input
                            class="form-control form-control-sm bg-light-yellow border-0"
                            name
                            type="text"
                            :readonly="readOnly"
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Balance:</label>
                    <div class="col">
                      <div class="form-row">
                        <div class="col-sm-7 my-1">
                          <select
                            class="custom-select custom-select-sm"
                            id
                            v-model="otherscomputation.oslSlcCode"
                            name="oslSlcCode"
                            :disabled="selectDisabled"
                          >
                            <option disabled>(select one)</option>
                            <option
                              v-for="otherscomputationSlClasses in otherscomputationSlClasses"
                              v-bind:value="otherscomputationSlClasses.slClassId"
                            >{{ otherscomputationSlClasses.slClassDesc }}</option>
                          </select>
                        </div>
                        <div class="col my-1">
                          <input
                            class="form-control form-control-sm"
                            v-model="otherscomputation.sdMinBal"
                            name="sdMinBal"
                            type="number"
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <label
                      class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >As Of:</label>
                    <div class="col">
                      <div class="form-row">
                        <div class="col my-1">
                          <input
                            class="form-control form-control-sm"
                            type="date"
                            name="sdTrDate"
                            v-model="otherscomputation.sdTrDate"
                            readonly
                          >
                        </div>
                        <div class="col-auto my-1">
                          <div class="form-check form-check-sm">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Consider Hold-outs</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <fieldset class="border p-2">
                    <div class="form-row">
                      <label
                        class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                      >Last Transaction Date:</label>
                      <div class="col my-1">
                        <input
                          class="form-control form-control-sm"
                          type="date"
                          name="tdTrDate"
                          v-model="otherscomputation.tdTrDate"
                          readonly
                        >
                      </div>
                    </div>
                  </fieldset>
                </fieldset>
              </div>

              <div role="tabpanel" class="tab-pane" id="clientinfo">
                <div class="form-row">
                  <div class="col">
                    <label class="col-form-label col-form-label-sm text-truncate">Client Status:</label>
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          multiple
                          v-model="otherscomputation.clStats"
                          name="clStats"
                        >
                          <option
                            @click="filterSelect(clientFilters,clientClStats,index,clientClientStatus)"
                            v-for="(clientClientStatus,index) in clientClStats"
                            v-bind:key="clientClientStatus.id"
                            :value="clientClientStatus.clStatId"
                          >{{ clientClientStatus.clStatDesc }}</option>
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
                          <option
                            @click="reverseFilter(clientClStats,clientFilters,index,clientFilter)"
                            v-for="(clientFilter,index) in clientFilters"
                            v-bind:key="clientFilter.clsid"
                            :value="clientFilter.clStatId"
                          >{{clientFilter.clStatDesc}}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label class="col-form-label col-form-label-sm text-truncate">Client Type:</label>
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm"
                          id
                          multiple
                          v-model="otherscomputation.clientTypes"
                          name="clientTypes"
                        >
                          <option
                            @click="filterSelect(clientFilters,clientClientTypes,index,clientClientType)"
                            v-for="(clientClientType,index) in clientClientTypes"
                            v-bind:key="clientClientType.id"
                            :value="clientClientType.clientTypeId"
                          >{{ clientClientType.clientTypeDesc }}</option>
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
                          <option
                            @click="reverseFilter(clientClientTypes,clientFilters,index,clientFilter)"
                            v-for="(clientFilter,index) in clientFilters"
                            v-bind:key="clientFilter.cltid"
                            :value="clientFilter.clientTypeId"
                          >{{clientFilter.clientTypeDesc}}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col">
                    <label class="col-form-label col-form-label-sm text-truncate">Employer:</label>
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
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-row align-items-center my-3">
        <div class="col">
          <div class="form-row">
            <label
              class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            >Transaction Date:</label>
            <div class="col my-1">
              <input
                class="form-control form-control-sm"
                type="date"
                name="sdTrDate"
                v-model="otherscomputation.sdTrDate"
                readonly
              >
            </div>
          </div>
        </div>
        <div class="col">
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">
              <strong>Transaction Type:</strong>
            </label>
            <div class="col my-1">
              <select
                class="custom-select custom-select-sm"
                id
                v-model="otherscomputation.AccountType"
                name="AccountType"
                :disabled="selectDisabled"
              >
                <option disabled>(select one)</option>
                <option
                  v-for="otherscomputationAcctTypes in otherscomputationAcctTypes"
                  v-bind:value="otherscomputationAcctTypes.acctTypeId"
                >{{ otherscomputationAcctTypes.acctTypeDesc }}</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate">
              <strong>Department:</strong>
            </label>
            <div class="col my-1">
              <select
                class="custom-select custom-select-sm"
                id
                v-model="otherscomputation.AccountType"
                name="AccountType"
                :disabled="selectDisabled"
              >
                <option disabled>(select one)</option>
                <option
                  v-for="otherscomputationAcctTypes in otherscomputationAcctTypes"
                  v-bind:value="otherscomputationAcctTypes.acctTypeId"
                >{{ otherscomputationAcctTypes.acctTypeDesc }}</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div class="form-row align-items-end">
        <label class="col-sm-1 col-form-label col-form-label-sm my-1 text-truncate">DEBIT:</label>
        <div class="col">
          <div class="form-row">
            <div class="col">
              <div class="form-row">
                <div class="col-12 text-center">
                  <span>Subsidiary Ledger (SL)</span>
                </div>
                <div class="col my-1">
                  <input
                    class="form-control form-control-sm"
                    v-model="otherscomputation.sdMinBal"
                    name="sdMinBal"
                    type="number"
                    :readonly="readOnly"
                  >
                </div>
                <div class="col my-1">
                  <input
                    class="form-control form-control-sm"
                    v-model="otherscomputation.sdMinBal"
                    name="sdMinBal"
                    type="number"
                    :readonly="readOnly"
                  >
                </div>
                <div class="col-sm-8 my-1">
                  <input
                    class="form-control form-control-sm bg-light-yellow border-0"
                    name
                    type="text"
                    :readonly="readOnly"
                  >
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-row">
                <div class="col-12 text-center">
                  <span>GL Account Code</span>
                </div>
                <div class="col my-1">
                  <input
                    class="form-control form-control-sm"
                    v-model="otherscomputation.sdMinBal"
                    name="sdMinBal"
                    type="number"
                    :readonly="readOnly"
                  >
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
                    :readonly="readOnly"
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-row align-items-end">
        <label class="col-sm-1 col-form-label col-form-label-sm my-1 text-truncate">CREDIT:</label>
        <div class="col">
          <div class="form-row">
            <div class="col">
              <div class="form-row">
                <div class="col-12 text-center d-block d-sm-none">
                  <span>Subsidiary Ledger (SL)</span>
                </div>
                <div class="col my-1">
                  <input
                    class="form-control form-control-sm"
                    v-model="otherscomputation.sdMinBal"
                    name="sdMinBal"
                    type="number"
                    :readonly="readOnly"
                  >
                </div>
                <div class="col my-1">
                  <input
                    class="form-control form-control-sm"
                    v-model="otherscomputation.sdMinBal"
                    name="sdMinBal"
                    type="number"
                    :readonly="readOnly"
                  >
                </div>
                <div class="col-sm-8 my-1">
                  <input
                    class="form-control form-control-sm bg-light-yellow border-0"
                    name
                    type="text"
                    :readonly="readOnly"
                  >
                </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div class="form-row">
                <div class="col-12 text-center d-block d-sm-none">
                  <span>GL Account Code</span>
                </div>
                <div class="col my-1">
                  <input
                    class="form-control form-control-sm"
                    v-model="otherscomputation.sdMinBal"
                    name="sdMinBal"
                    type="number"
                    :readonly="readOnly"
                  >
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-row">
                <div class="col-12 text-center d-block d-sm-none">
                  <span>General Ledger Account Title</span>
                </div>
                <div class="col my-1">
                  <input
                    class="form-control form-control-sm bg-light-yellow border-0"
                    name
                    type="text"
                    :readonly="readOnly"
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-row">
        <label class="col-sm-1 col-form-label col-form-label-sm my-1 text-truncate">Explanation:</label>
        <div class="col my-1">
          <textarea
            class="form-control form-control-sm"
            cols="30"
            id
            v-model="otherscomputation.explanation"
            name="explanation"
            rows="10"
            :readonly="readOnly"
          ></textarea>
        </div>
      </div>

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
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      otherscomputation: {
        acctType: "",
        oslSlcCode: "",
        sdTrDate: "",
        sdMinBal: "",
        clientTypes: [],
        clStats: [],
        tdTrDate: ""
      },

      selectDisabled: true,

      readOnly: true,

      // others computation only plural
      otherscomputationSlClasses: [],
      otherscomputationAcctTypes: [],

      clientFilters: [],
      clientClientTypes: [],
      clientClStats: []
    };
  },

  created() {
    this.fetchSlClasses();
    this.fetchAcctTypes();
    this.fetchClientTypes();
    this.fetchClStats();
  },

  methods: {
    fetchSlClasses() {
      fetch("/api/slClasses")
        .then(res => res.json())
        .then(res => {
          this.otherscomputationSlClasses = res.data;
          console.log(this.otherscomputationSlClasses);
        })
        .catch(err => console.log(err));
    },

    fetchClStats() {
      fetch("/api/clStats")
        .then(res => res.json())
        .then(res => {
          this.clientClStats = res.data;
          console.log(this.clientClStats);
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

    fetchAcctTypes() {
      fetch("/api/acctTypes")
        .then(res => res.json())
        .then(res => {
          this.otherscomputationAcctTypes = res.data;
          console.log(this.otherscomputationAcctTypes);
        })
        .catch(err => console.log(err));
    },

    filterSelect(array1, array2, index, object) {
      array1.push(object);
      array2.splice(index, 1);
    },

    reverseFilter(array2, array1, index, object) {
      array2.push(object);
      array1.splice(index, 1);
    }
  }
};
</script>

<style>
.others-computation {
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