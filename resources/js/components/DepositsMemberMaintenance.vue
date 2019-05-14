<template>
  <div class="member-maintenance">
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
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Document</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 300px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Tag Cancelled
              <span class="float-right">Shift+F3</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px">
            </div>-->
            <a href="#" class="dropdown-item">
              Tag Approve
              <span class="float-right">Ctrl+A</span>
            </a>
            <a href="#" class="dropdown-item">
              Post
              <span class="float-right">Ctrl+F11</span>
            </a>
            <a href="#" class="dropdown-item">
              Reverse
              <span class="float-right">Shift+F11</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Other</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 300px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Set System Date
              <span class="float-right">F5</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px">
            </div>-->
            <a href="#" class="dropdown-item">
              S/L Account Summary
              <span class="float-right">F7</span>
            </a>
            <a href="#" class="dropdown-item">
              View SL Setup
              <span class="float-right">F8</span>
            </a>
            <a href="#" class="dropdown-item">
              Client Master Maintenance
              <span class="float-right">Ctrl+F8</span>
            </a>
            <a href="#" class="dropdown-item">
              SL Master Maintenance
              <span class="float-right">Shift+F8</span>
            </a>
            <a href="#" class="dropdown-item">
              Chart of Account Inquiry
              <span class="float-right">Shift+Ctrl+F8</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 300px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Activity Logs
              <span class="float-right">Ctrl+T</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px">
            </div>-->
            <a href="#" class="dropdown-item">
              Zoom Transaction Grid
              <span class="float-right">F4</span>
            </a>
            <a href="#" class="dropdown-item">
              Payroll
              <span class="float-right">F8</span>
            </a>
            <a href="#" class="dropdown-item">
              Client Master Maintenance
              <span class="float-right">Ctrl+F8</span>
            </a>
            <a href="#" class="dropdown-item">
              SL Master Maintenance
              <span class="float-right">Shift+F8</span>
            </a>
            <a href="#" class="dropdown-item">
              Chart of Account Inquiry
              <span class="float-right">Shift+Ctrl+F8</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Print</a>
          <div class="dropdown-menu" style="left: 0px; min-width: 300px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Document
              <span class="float-right">Ctrl+F9</span>
            </a>
            <!-- <div>
              <hr style="margin-left:25px">
            </div>-->
            <a href="#" class="dropdown-item">
              Print Reciept Details
              <span class="float-right">Ctrl+R</span>
            </a>
            <a href="#" class="dropdown-item">
              Print Voucher
              <span class="float-right">Ctrl+P</span>
            </a>
            <a href="#" class="dropdown-item">
              Print Formatted Voucher
              <span class="float-right">Ctrl+W</span>
            </a>
            <a href="#" class="dropdown-item">
              Print Purchased Order Certificate
              <span class="float-right">Ctrl+Z</span>
            </a>
            <a href="#" class="dropdown-item disabled">
              Check Format 1
              <span class="float-right">Shift+F9</span>
            </a>
            <a href="#" class="dropdown-item disabled">
              Check Format 2
              <span class="float-right">Shift+Ctrl+F9</span>
            </a>
          </div>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <router-link to class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>

          <button class="btn btn-sm btn-outline-secondary mr-1" type="button">
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button">
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-secondary mr-4" type="button">
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="submit">
            <i class="fa fa-save mr-1"></i>
            <span>
              <u>S</u>ave
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-secondary mr-4" type="button">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button">
            <i class="fa fa-arrow-circle-up mr-1"></i>
            <span>
              Page
              <u>U</u>p
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button">
            <i class="fa fa-arrow-circle-down mr-1"></i>
            <span>
              Page
              <u>D</u>own
            </span>
          </button>
        </li>
      </ul>
    </nav>
    <div class="form-row my-3">
      <div class="col">
        <fieldset class="bg-light border p-2">
          <div class="form-row justify-content-between">
            <div class="col-sm-6">
              <div class="form-row">
                <label
                  class="col-sm-4 text-sm-right text-truncate ol-form-label col-form-label-sm mt-1"
                >Transaction Type:</label>
                <div class="col my-1">
                  <select
                    class="custom-select custom-select-sm"
                    name="transType"
                    v-model="transTypeId"
                  >
                    <option
                      v-for="dep in tanstype.data"
                      :value="dep.transTypeId"
                    >{{dep.transTypeDesc}}</option>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-4 text-sm-right text-truncate col-form-label col-form-label-sm mt-1"
                >Control Number:</label>
                <div class="col my-1">
                  <div class="form-row align-items-center">
                    <div class="col-2">
                      <input class="form-control form-control-sm" type="text" name>
                    </div>
                    <span class="col-auto">-</span>
                    <div class="col">
                      <input class="form-control form-control-sm" type="text" name>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-row">
                <label
                  class="col-sm-4 text-sm-right text-truncate col-form-label col-form-label-sm mt-1"
                >Department:</label>
                <div class="col my-1">
                  <select class="custom-select custom-select-sm" name="dept" v-model="deptId">
                    <option v-for="dept in department.data" :value="dept.deptId">{{dept.deptDesc}}</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-row">
                <label
                  class="col-sm-2 text-sm-right text-truncate col-form-label col-form-label-sm mt-1"
                >Client:</label>
                <div class="col">
                  <div class="form-row justify-content-end">
                    <div class="col-sm-4 my-1">
                      <input class="form-control form-control-sm" type="text" name>
                    </div>
                    <div class="col-sm-8 my-1">
                      <input class="form-control form-control-sm" type="text" name>
                    </div>
                    <div class="col-sm-8 my-1">
                      <input class="form-control form-control-sm" type="text" name>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="col-sm-3">
        <fieldset class="bg-light border p-2 h-100">
          <div class="form-row">
            <label
              class="col-form-label col-form-label-sm mt-1 col-sm-3 text-sm-right text-truncate"
            >Reference Number</label>
            <div class="col my-1">
              <input class="form-control form-control-sm" name="refNo" type="number">
            </div>
          </div>
          <div class="form-row">
            <label
              class="col-form-label col-form-label-sm mt-1 col-sm-3 text-sm-right text-truncate"
            >Transaction Date:</label>
            <div class="col my-1">
              <input class="form-control form-control-sm" type="date" name>
            </div>
          </div>
          <div class="form-row">
            <label
              class="col-form-label col-form-label-sm mt-1 col-sm-3 text-sm-right text-truncate"
            >Batch Number</label>
            <div class="col my-1">
              <input class="form-control form-control-sm" type="number" name>
            </div>
          </div>
        </fieldset>
      </div>
      <div class="col-sm-2">
        <p class="h4 text-center p-4">Press F4 to Enlarge the Transaction Grid</p>
      </div>
    </div>
    <div class="form-row align-items-stretch">
      <div class="col">
        <div class="custom-tabs tab-content-bg-light">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#glslentries"
                data-toggle="tab"
                role="tab"
              >GL/SL Entries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cocidetails" data-toggle="tab" role="tab">COCI Details</a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="glslentries" class="tab-pane active">
              <div class="form-row">
                <table class="table table-sm table-bordered custom-table table-dark">
                  <thead>
                    <tr>
                      <th>P</th>
                      <th>SC</th>
                      <th>ST</th>
                      <th>SE</th>
                      <th>SN</th>
                      <th>G/L Acct.</th>
                      <th>Acct Description</th>
                      <th>Debit</th>
                      <th>Credit</th>
                      <th>Client ID</th>
                      <th>Name of Client</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>P</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>7338010</td>
                      <td>Meetings and Conferences - Staff</td>
                      <td>1,894.50</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>P</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>2310009</td>
                      <td>Vouches Payable</td>
                      <td></td>
                      <td>1,894.50</td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="form-row justify-content-between my-2">
                <div class="col">
                  <div class="form-row justify-content-start">
                    <label class="col-auto col-form-label col-form-label-sm mt-1">Difference:</label>
                    <div class="col-sm-4 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm bg-light-blue border-0"
                        name
                      >
                    </div>
                  </div>
                </div>
                <label class="col-sm-auto col-form-label col-form-label-sm mt-1">Debit:</label>
                <div class="col-sm-2 my-1">
                  <input
                    type="text"
                    class="form-control form-control-sm bg-light-blue border-0"
                    name
                  >
                </div>
                <label class="col-sm-auto col-form-label col-form-label-sm mt-1">Credit:</label>
                <div class="col-sm-2 my-1">
                  <input
                    type="text"
                    class="form-control form-control-sm bg-light-blue border-0"
                    name
                  >
                </div>
              </div>
            </div>

            <div id="cocidetails" class="tab-pane">
              <div class="form-row">
                <table class="table table-sm table-bordered custom-table table-dark">
                  <thead>
                    <tr>
                      <th>P</th>
                      <th>SC</th>
                      <th>ST</th>
                      <th>SE</th>
                      <th>SN</th>
                      <th>G/L Acct.</th>
                      <th>Acct Description</th>
                      <th>Debit</th>
                      <th>Credit</th>
                      <th>Client ID</th>
                      <th>Name of Client</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>P</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>7338010</td>
                      <td>Meetings and Conferences - Staff</td>
                      <td>1,894.50</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>P</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>2310009</td>
                      <td>Vouches Payable</td>
                      <td></td>
                      <td>1,894.50</td>
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
    </div>
    <div class="form-row my-3">
      <div class="col">
        <div class="custom-tabs tab-content-bg-light">
          <ul role="tablist" class="nav nav-tabs nav-fill">
            <li class="nav-item">
              <a
                class="nav-link active"
                href="#explanation"
                data-toggle="tab"
                role="tab"
              >Explanation</a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="explanation" class="tab-pane active">
              <div class="form-row justify-content-between">
                <textarea class="form-control form-control-sm" name id cols="30" rows="5"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      transTypeId: "",
      deptId: "",
      tanstype: {},
      department: {}
    };
  },
  created() {
    this.transactType();
    this.departmentList();
  },
  methods: {
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
    },

    clickSave() {
      console.log(this.$data);
    },
    clickFind() {
      console.log("find");
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
</style>