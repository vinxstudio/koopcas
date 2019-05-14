<template>
  <div class="inquiry">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
          <div class="dropdown-menu" style="left: 5px; min-width: 200px; font-size: 13px;">
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
              <span class="float-right">Ctrl+F2</span>
            </a>
            <a href="#" class="dropdown-item">
              Delete
              <span class="float-right">F4</span>
            </a>
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
          <div class="dropdown-menu" style="left: 5px; min-width: 200px; font-size: 13px;">
            <a href="#" class="dropdown-item">Activity Logs</a>
            <a href="#" class="dropdown-item">
              Load Tree View
              <span class="float-right">F5</span>
            </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <router-link to="/back-office/inquiry-search" class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>

          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-4" type="button">
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-save mr-1"></i>
            <span>
              <u>S</u>ave
            </span>
          </button>
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </button>
        </li>
      </ul>
    </nav>

    <div class="form-row">
      <div class="col-md-4">
        <fieldset class="border p-2 h-100 bg-light">
          <botreebrowser-app :node="root" @onClick="nodeWasClicked"></botreebrowser-app>
        </fieldset>
      </div>
      <div class="col-md-8">
        <div class="form-row">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountType"
          >Account Type:</label>
          <div class="col-md-4 my-1">
            <select class="custom-select custom-select-sm" name="accountType">
              <option
                value
                v-for="account in accounts"
                :value="account.acctTypeId"
              >{{account.acctTypeDesc}}</option>
            </select>
          </div>
          <div class="form-check ml-auto mr-2 mt-2">
            <input
              class="form-check-input"
              id="disabled"
              style="margin-top: 10px;"
              type="checkbox"
              value
            >
            <label class="form-check-label" for="disabled" style="margin-top: 5px;">DISABLED</label>
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="summaryAcct"
            value="COAacct_sum"
          >Summary Account:</label>
          <div class="col-md-6 my-1">
            <select class="custom-select custom-select-sm" name="summaryAcct">
              <option v-for="coa in coas" :value="coa.coaBrCode">{{coa.coaDesc}}</option>
            </select>
          </div>
          <div class>
            <button class="btn btn-sm btn-outline-primary" style="margin-top:8px">
              <i class="fa fa-search-plus"></i>
            </button>
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountCode"
          >Account Code:</label>
          <div class="col my-1">
            <div class="form-row m-0">
              <select class="custom-select custom-select-sm" name="summaryAcct">
                <option v-for="coa in coas" :value="coa.coaId">{{coa.coaId}}</option>
              </select>
              
              <select class="custom-select custom-select-sm" name="summaryAcct">
                <option v-for="coa in coas" :value="coa.coaDesc">{{coa.coaDesc}}</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-row justify-content-between">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="accountLevel"
          >Account Level:</label>
          <div class="col-sm my-1">
            <select class="custom-select custom-select-sm" name="accountLevel">
              <option v-for="level in levels" :value="level.acctLevelId">{{level.acctLevelDesc}}</option>
            </select>
          </div>
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="balanceType"
          >Balance Type:</label>
          <div class="col-sm my-1">
            <select class="custom-select custom-select-sm" name="balanceType">
              <option v-for="bal in bals" :value="bal.balTypeId">{{bal.balTypeDesc}}</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            for="consoAcct"
          >Conso Account:</label>
          <div class="col-md-4 my-1">
            <select class="custom-select custom-select-sm" name="consoAcct">
              <option v-for="coac in coacs" :value="coac.coacId">{{coac.coacConsoAcct}}</option>
            </select>
          </div>
          <div class>
            <button class="btn btn-sm btn-outline-primary" style="margin-top:8px">
              <i class="fa fa-search-plus"></i>
            </button>
          </div>
          <div class="form-check ml-auto mr-2 mt-2">
            <input
              class="form-check-input"
              id="canTransactGLOnly"
              style="margin-top: 10px;"
              type="checkbox"
              value
            >
            <label
              class="form-check-label"
              for="canTransactGLOnly"
              style="margin-top: 5px;"
            >Can Transact GL Only</label>
          </div>
        </div>
        <fieldset class="border py-2 px-3 my-2">
          <div class="form-row">
            <label
              class="col-md-2 col-form-label col-form-label-sm mt-1 text-truncate"
              for="cutoffDates"
            >Cut-off Dates:</label>
            <div class="col-md-6 my-1">
              <div class="form-row m-0">
                <input
                  class="col mr-sm-2 form-control form-control-sm"
                  name="cutoffDates1"
                  type="date"
                >
                <input class="col form-control form-control-sm" name="cutoffDates2" type="date">
              </div>
            </div>
            <div class="col-auto ml-auto my-1">
              <button class="btn btn-sm btn-outline-primary mr-1" type="button">
                <i class="fa fa-search-plus mr-1"></i>
                <span>
                  Q
                  <u>u</u>ery
                </span>
              </button>
              <button class="btn btn-sm btn-outline-primary" type="button">
                <i class="fa fa-ban mr-1"></i>
                <span>Clear</span>
              </button>
            </div>
          </div>

          <div class="form-row">
            <label
              class="col-md-2 col-form-label col-form-label-sm mt-1 text-truncate"
              for="beginningBalance"
            >Beginning Balance:</label>
            <div class="col-md-6 my-1">
              <div class="form-row m-0">
                <input
                  class="col mr-sm-2 form-control form-control-sm bg-light-blue border-0 text-right"
                  name="balance2"
                  type="text"
                  value="0.00"
                >
                <input
                  class="col form-control form-control-sm bg-light-blue border-0 text-right"
                  name="balance3"
                  type="text"
                  value="0.00"
                >
              </div>
            </div>
            <label
              class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
              for="balanceType"
            >Branch Type:</label>
            <div class="col-sm my-1">
              <select class="custom-select custom-select-sm" name="balanceType">
                <option
                  v-for="branch in branches"
                  :value="branch.branchesId"
                >{{branch.branchesDesc}}</option>
              </select>
            </div>
          </div>

          <h5 class="mt-4 font-weight-bold">G/L Account Search:</h5>
          <div class="bg-dark" style="min-height: 339px;">
            <table class="table table-sm table-bordered custom-table">
              <thead>
                <tr>
                  <th scope="col">Account Code</th>
                  <th scope="col">Account Description</th>
                  <th scope="col">Levels</th>
                  <th scope="col">Summary Account</th>
                  <th scope="col">Branch Code</th>
                </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
          <div class="form-row justify-content-center">
            <label
              class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate"
              for="transactions"
            >Transactions:</label>
            <div class="col-md-6 my-1">
              <div class="form-row m-0">
                <input
                  class="col mr-sm-2 form-control form-control-sm bg-light-blue border-0 text-right"
                  name="transactions1"
                  type="text"
                  value="0.00"
                >
                <input
                  class="col form-control form-control-sm bg-light-blue border-0 text-right"
                  name="transactions2"
                  type="text"
                  value="0.00"
                >
              </div>
            </div>
          </div>
          <div class="form-row justify-content-center">
            <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate"></label>
            <div class="col-md-6 my-1">
              <div class="form-row m-0">
                <input
                  class="col mr-sm-2 form-control form-control-sm bg-light-blue border-0 text-right"
                  name="transactions3"
                  type="text"
                  value="0.00"
                >
                <input
                  class="col form-control form-control-sm bg-light-blue border-0 text-right"
                  name="transactions4"
                  type="text"
                  value="0.00"
                >
              </div>
            </div>
          </div>
          <div class="form-row justify-content-center">
            <label
              class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate"
              for="balance"
            >Balance:</label>
            <div class="col-md-6 my-1">
              <div class="form-row m-0">
                <input
                  class="col mr-sm-2 form-control form-control-sm bg-light-blue border-0 text-right"
                  name="balance1"
                  type="text"
                  value="0.00"
                >
                <input
                  class="col form-control form-control-sm bg-light-blue border-0 text-right"
                  name="balance2"
                  type="text"
                  value="0.00"
                >
              </div>
            </div>
          </div>
          <div class="form-row justify-content-center">
            <label class="col-md-2 col-sm-3 col-form-label col-form-label-sm mt-1 text-truncate"></label>
            <div class="col-md-6 my-1">
              <div class="form-row m-0">
                <input
                  class="col mr-sm-2 form-control form-control-sm bg-light-blue border-0 text-right"
                  name="balance2"
                  type="text"
                  value="0.00"
                >
                <input
                  class="col form-control form-control-sm bg-light-blue border-0 text-right"
                  name="balance3"
                  type="text"
                  value="0.00"
                >
              </div>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      accounts: {},
      levels: {},
      levels: {},
      coas: {},
      bals: {},
      coacs: {},
      branches: {},
      root: {
        name: "Chart of Accounts",
        children: [
          {
            name: "10000 ASSETS",
        children: [
              {
                name: "11000 CURRENT ASSETS"
              }
            ]
          },
          {
            name: "20000 LIABILITIES",
            children: [
              {
                name: "21000 CURRENT LIABILITIES"
              }
            ]
          }
        ]
      }
    };
  },
  mounted() {
    this.fetchClient();
    this.fetchAccountLevels();
    this.fetchCoa();
    this.fetchBals();
    this.fetchCoac();
    this.fetchbranches();
  },
  methods: {
    fetchClient() {
      axios
        .get("/api/acctTypes")
        .then(response => {
          this.accounts = response.data.data;
          console.log(this.accounts);
        })
        .catch(error => console.log(error));
    },
    nodeWasClicked(node) {
      console.log("we are clicked");
      alert(node.name);
    },
    fetchClient() {
      axios
        .get("/api/acctTypes")
        .then(response => {
          this.accounts = response.data.data;
          console.log(this.accounts);
        })
        .catch(error => console.log(error));
    },
    fetchAccountLevels() {
      axios
        .get("/api/acctLevels")
        .then(response => {
          this.levels = response.data.data;
          console.log(this.levels);
        })
        .catch(error => console.log(error));
    },
    fetchCoa() {
      axios
        .get("/api/coas")
        .then(response => {
          this.coas = response.data.data;
          console.log(this.coas);
        })
        .catch(error => console.log(error));
    },
    fetchBals() {
      axios
        .get("/api/balTypes")
        .then(response => {
          this.bals = response.data.data;
          console.log(this.bals);
        })
        .catch(error => console.log(error));
    },
    fetchCoac() {
      axios
        .get("/api/coacs")
        .then(response => {
          this.coacs = response.data.data;
          console.log(this.coacs);
        })
        .catch(error => console.log(error));
    },
    fetchbranches() {
      axios
        .get("/api/branches")
        .then(response => {
          this.branches = response.data.data;
          console.log(this.branches);
        })
        .catch(error => console.log(error));
    }
  }
};
</script>

<style>
.inquiry {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.bg-light-blue {
  background-color: #6dcff6 !important;
}
</style>