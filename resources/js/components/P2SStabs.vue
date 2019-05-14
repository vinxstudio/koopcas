<template>
  <div class="playtosave">
    <nav class="navbar navbar-expand-lg p-0 mt-2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <button class="btn btn-sm btn-outline-primary mr-4" data-toggle="modal" data-target="#branch">
                  <i class="fa fa-file mr-1"></i><span>Add Branch</span>
                </button>

                <router-link to="/play-to-save/p2s-stabs-search" class="btn btn-sm btn-outline-primary mr-1">
                    <i class="fa fa-search mr-1"></i><span>Find</span>
                </router-link>

                <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="newStabs">
                    <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
                </button>

                <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
                    <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
                </button>
            </li>
        </ul>
    </nav>

    <div class="container">
      <div class="alert alert-success mt-2" v-if="successAdd" transition="expand">Play to Save Stabs Added Successfully.</div>

      <div class="alert alert-success mt-2 alert-dismissible" v-if="successAddBranch" transition="expand"><button type="button" class="close" data-dismiss="alert">&times;</button> Branch has been added successfully.</div>
      
      <h3 class="mt-2">Play To Save Stabs</h3>
      <form @submit.prevent="insertStabs">
        <fieldset class="border p-4 bg-light mt-2">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Location</label>
                <!-- <input type="text" name="branchAllocation" v-model="playtosavestabs.branchAllocation" class="form-control" :readonly="readOnly"> -->
                <select name="branchAllocation" v-model="playtosavestabs.branchAllocation" class="form-control" :disabled="selectDisabled">
                  <option v-for="branch in branches" v-bind:value="branch.branchesId" :key="branch.id">{{ branch.branchesDesc }}</option>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <!-- <label for="">Serial Number</label>
                <input type="text" name="serialNumber" v-model="playtosavestabs.serialNumber" class="form-control" :readonly="readOnly"> -->
                <div class="row">
                  <div class="col-md-6">
                    <label for="">Serial Number Start</label>
                    <input type="number" name="serialNumberStart" v-model="playtosavestabs.serialNumberStart" class="form-control" :readonly="readOnly">
                  </div>

                  <div class="col-md-6">
                    <label for="">Serial Number End</label>
                    <input type="number" name="serialNumberEnd" v-model="playtosavestabs.serialNumberEnd" class="form-control" :readonly="readOnly">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Quantity</label>
                <input type="number" name="quantity" v-model="playtosavestabs.quantity" class="form-control" :readonly="readOnly">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="">Date Added</label>
                <input type="date" name="dateAdded" v-model="playtosavestabs.dateAdded" class="form-control" :readonly="readOnly">
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label for="">Solicitor Name</label>
                <input type="text" name="ticketSolicitor" v-model="playtosavestabs.ticketSolicitor" class="form-control" :readonly="readOnly">
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 20px;">
              <button class="btn btn-secondary mr-1" type="submit" v-if="selectDisabled">
                  <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
              </button>
              <button class="btn btn-success mr-1" type="submit" v-else :disabled="selectDisabled">
                  <i class="fa fa-save mr-1"></i><span><u>S</u>ave</span>
              </button>
              
              <button class="btn btn-secondary" type="button" v-if="selectDisabled">
                  <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
              </button>
              <button class="btn btn-outline-primary" type="button" v-else :disabled="selectDisabled" @click="cancel">
                  <router-link to="/play-to-save/p2s-stabs" class="new" :disabled="selectDisabled">
                      <i class="fa fa-times-circle mr-1"></i><span>Canc<u>e</u>l</span>
                  </router-link>
              </button>
          </div>
        </fieldset>
      </form>

      <div class="modal fade" id="branch">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form @submit="insertBranch">
              <div class="modal-header">
                <label class="modal-title">INSERT NEW BRANCH</label>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Branch Code</label>
                      <input type="number" name="branchesId" v-model="playtosavebranch.branchesId" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Branch Address</label>
                      <input type="text" name="address" v-model="playtosavebranch.address" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Branch Contact Number</label>
                      <input type="text" name="contactNumbers" v-model="playtosavebranch.contactNumbers" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">TIN</label>
                      <input type="text" name="tin" v-model="playtosavebranch.tin" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">POST Min.</label>
                      <input type="text" name="posMin" v-model="playtosavebranch.posMin" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Enable Rebates</label>
                      <select name="isEnableRebates" v-model="playtosavebranch.isEnableRebates" class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Branch Name</label>
                      <input type="text" name="branchesDesc" v-model="playtosavebranch.branchesDesc" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Branch Manager</label>
                      <input type="text" name="manager" v-model="playtosavebranch.manager" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">PO Contact Name</label>
                      <input type="text" name="poContactName" v-model="playtosavebranch.poContactName" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Branch Email</label>
                      <input type="email" name="emailAddress" v-model="playtosavebranch.emailAddress" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">POS Serial Number</label>
                      <input type="text" name="posSerialNumber" v-model="playtosavebranch.posSerialNumber" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">POS Permit Number</label>
                      <input type="text" name="posPermitNumber" v-model="playtosavebranch.posPermitNumber" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Consolidate Rebate Entries</label>
                      <select name="isConsolidateRebateEntries" v-model="playtosavebranch.isConsolidateRebateEntries" class="form-control">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Add</button>
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      playtosavestabs: {
        ptsSsId: "",
        branchAllocation: "",
        serialNumberStart: "",
        serialNumberEnd: "",
        quantity: "",
        dateAdded: "",
        ticketSolicitor: "",
        status: "not sold",
        dateTimeAdded: moment(new Date).format('YYYY-MM-DD hh:mm:ss'),
        serialNumber: ""
      },

      // playtosavebranch: {
      //   ptsBrCode: "",
      //   ptsBranchName: "",
      //   ptsBranchAddress: "",
      //   ptsBranchManager: "",
      //   ptsBranchContact: "",
      //   ptsBranchEmail: "",
      //   ptsBranchDateAdded: moment(new Date).format('YYYY-MM-DD hh:mm:ss'),
      // },

      playtosavebranch: {
        branchesId: "",
        branchesDesc: "",
        address: "",
        manager: "",
        poContactName: "",
        contactNumbers: "",
        tin: "",
        posSerialNumber: "",
        posMin: "",
        emailAddress: "",
        posPermitNumber: "",
        isEnableRebates: "",
        rebSlcCode: 22,
        rebSltCode: 1,
        rebExpAcct: 2111001,
        isConsolidateRebateEntries: "",
        cdARegNum: "",
        acronym: "",
        pnLocation: "",
        pnSsAt: "",
        lottoNumDigt: "",
        lottoDepositLimit: ""
      },

      branches: [],
      
      successAddBranch: "",
      successAdd: "",
      successEdit: "",
      readOnly: true,
      selectDisabled: true,
    }
  },

  created() {
    this.fetchAllBranches();
  },

  methods: {
    fetchAllBranches() {
      fetch("/api/branches")
        .then(res => res.json())
        .then(res => {
          this.branches = res.data;
          console.log(this.branches);
        })
        .catch(err => console.log(err));
    },

    insertStabs() {
      fetch("/api/playtosaveserialnumber", {
        method: "post",
        body: JSON.stringify(this.playtosavestabs),
        headers: { "content-type": "application/json" }
      })
      .then(res => {
        this.playtosavestabs.branchAllocation = "";
        this.playtosavestabs.serialNumberStart = "";
        this.playtosavestabs.serialNumberEnd = "";
        this.playtosavestabs.quantity = "";
        this.playtosavestabs.serialNumber = "";
        this.successAdd = true;
        setTimeout(() => {
          this.successAdd = false;
        }, 2000),
        console.log("Stabs Added");
      })
      .catch(err => console.log(err));
    },

    insertBranch() {
      fetch("/api/branch", {
        method: "post",
        body: JSON.stringify(this.playtosavebranch),
        headers: { "content-type": "application/json" }
      })
      .then(res => {
        this.successAddBranch = true;
        console.log("Branch Added");
      })
      .catch(err => console.log(err));
    },

    newStabs() {
      this.readOnly = false;
      this.selectDisabled = false;
      this.playtosavestabs.branchAllocation = "";
      this.playtosavestabs.serialNumber = "";
      this.playtosavestabs.quantity = "";
      this.playtosavestabs.dateAdded = moment(new Date).format('YYYY-MM-DD');
      this.playtosavestabs.dateTimeAdded = moment(new Date).format('YYYY-MM-DD hh:mm:ss');
    },

    cancel() {
      this.readOnly = true;
      this.selectDisabled = true;
      this.playtosavestabs.branchAllocation = "";
      this.playtosavestabs.serialNumber = "";
      this.playtosavestabs.quantity = "";
      this.playtosavestabs.dateAdded = "";
    }
  }
}
</script>

<style>
.playtosave {
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
}
</style>