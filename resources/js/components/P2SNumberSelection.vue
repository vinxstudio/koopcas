<template>
  <div class="play-to-save-number-selection">
    <nav class="navbar navbar-expand-lg p-0 mt-2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-file mr-1"></i><span>Ne<u>w</u></span>
          </button>
          
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
            <i class="fa fa-pencil-alt mr-1"></i><span><u>E</u>dit</span>
          </button>
          <router-link to="/play-to-save/p2s-six-digit-registration" class="btn btn-sm btn-outline-primary mr-4">
            <i class="fa fa-search mr-1"></i><span>Cancel</span>
          </router-link>
        </li>
      </ul>
    </nav>
    <div class="col-md-16">
      <center><b>Six Digit Entry</b><h1><b>Welcome to 6/46 Play to Save</b></h1></center>
    </div>
    <div class="container">
      <div class="alert alert-success mt-2" v-if="successAdd" transition="expand">6/46 Play to Save Added Successfully.</div>
      <div class="row">
        <div class="col">
          <div class="form-group" ref="serialNum">
            <h4>Ticket Number: <b>{{ this.$route.params.serial }}</b></h4>
          </div>
          <fieldset class="border p-2">
            <h1>Choose a number:</h1>
            <button @click="numSelect(n), updateStabs(serialstabs)" v-for="n in 46" v-bind:key="n.id" class="btn btn-circle btn-primary">{{n}}</button>
          </fieldset> 
        </div>
        <form @submit="insertSixDigitEntry">
          <div class="col">
            <label>
              <h4 ref="customerId">Client ID: <b>{{ client.brCode }}-{{ ("00000000"+client.clientId).slice(-8) }}-{{ client.chkDgt }}</b></h4>
              <h4 ref="customerName">Client Name: <b>{{ client.firstName }} {{ client.lastName }}</b></h4>
              <b>Client Number:</b>
              <div class="form-group">
                  <button type="button" @click="generateRandomNumber(), updateStabs(serialstabs)" class="btn btn-primary btn-lg btn-block">Generate Random 6/46</button>
              </div>
              <fieldset class="border p-4 bg-light">
                <div style="margin-right:2px">
                  <button v-for="n in customNum" v-bind:key="n.id" class="btn btn-circle btn-primary" name="num">{{n}}</button>
                </div>
              </fieldset>
              <br>
            </label>
            <input type="hidden" name="ptsSsId" v-model="serialstabs.ptsSsId">
            <input type="hidden" name="branchAllocation" v-model="serialstabs.branchAllocation">
            <input type="hidden" name="serialNumber" v-model="serialstabs.serialNumber">
            <input type="hidden" name="status" :value="serialstabs.status = 'sold'">
            <br>
            <button class="btn btn-btn btn-success">AG</button>
            <button class="btn btn-btn btn-success">Advised</button>
            <button class="btn btn-btn btn-primary" type="button" @click="printNumber()">Print</button>
            <a href="/play-to-save/combo6" class="btn btn-btn btn-primary">Export</a>
            <button class="btn btn-btn btn-danger">Dismiss All</button>
            <div style="min-height: 250px;">
              <table class="table table-sm table-bordered custom-table" ref="numtoprint">
                <thead>
                  <tr>
                    <th scope="col" style="text-align: center;">6 / 46 NUMBER</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="serialNumberInput in serialNumberInputs" v-bind:key="serialNumberInput.id">
                    <td style="text-align: center;"><button type="button" v-for="n in JSON.parse('['+serialNumberInput.ptsSixDigitNum+']')" v-bind:key="n.id" class="btn btn-circle btn-primary">{{ n }}</button></td>
                  </tr>
                </tbody>
              </table>

              <center>
                <h1>You Only Have 1 Ticket</h1>
                <button class="btn btn-btn btn-primary" type="submit">Save</button>
                <button class="btn btn-btn btn-danger" type="button" @click="clear">Clear</button>
              </center>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      sixdigitentry: {
        ptsSdeId: "",
        ptsTrId: this.$route.params.trId,
        ptsSdeBrCode: this.$route.params.branch,
        ptsSdClientId: this.$route.params.clientid,
        ptsSerialId: this.$route.params.id,
        ptsStabsNumber: this.$route.params.serial,
        ptsSdTrDocNo: moment(new Date).format('YYYYMMDD'),
        ptsSdNumOfEntries: 1,
        ptsSsdDateOfTrans: moment(new Date).format('YYYY-MM-DD'),
        ptsSixDigitNum: "",
        ptsSixDigitNum2: "",
        ptsSdDateTrans: moment(new Date).format('YYYY-MM-DD'),
        ptsSdAdvance: "",
        ptsSdDateTime: moment(new Date).format('YYYY-MM-DD hh:mm:ss'),
      },

      serialstabs: {
        ptsSsId: "",
        branchAllocation: "",
        serialNumber: "",
        status: "",
      },

      client: {
        brCode: "",
        clientId: "",
        chkDgt: "",
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

      edit: false,

      customNum:[],
      serialNumberInputs: [],
      successAdd: "",
    }
  },

  mounted() {
    this.id = this.$route.params.id;
    this.branch = this.$route.params.branch;
    this.serial = this.$route.params.serial;
    if (this.id > 0 && this.branch > 0 && this.serial) {
      this.fetchSerialNumber(this.id, this.branch, this.serial);
    }

    this.id = this.$route.params.id;
    this.branch = this.$route.params.branch;
    this.serial = this.$route.params.serial;
    if (this.id > 0 && this.branch > 0 && this.serial) {
      this.fetchSerialNumberById(this.id, this.branch, this.serial);
    }

    this.clientid = this.$route.params.clientid;
    if (this.clientid > 0) {
      this.fetchClient(this.clientid);
    }
  },

  methods: {
    fetchSerialNumber(id, branch, serial) {
      fetch(`/api/playtosaveserialnumbers/${id}/${branch}/${serial}`)
        .then(res => res.json())
        .then(res => {
          this.serialstabs = res.data[0];
          console.log(this.serialstabs);
        })
        .catch(err => console.log(err));
    },

    fetchSerialNumberById(id, branch, serial) {
      fetch(`/api/playtosavesixdigitnum/${id}/${branch}/${serial}`)
        .then(res => res.json())
        .then(res => {
          this.serialNumberInputs = res.data;
          console.log("Six Digit: "+JSON.parse("["+this.serialNumberInputs[0].ptsSixDigitNum+"]"));
          console.log(this.serialNumberInputs);
        })
        .catch(err => console.log(err));
    },

    fetchClient(id) {
      fetch(`/api/client/${id}`)
          .then(res => res.json())
          .then(res => {
              this.client = res.data[0];
              console.log(this.client);
          })
          .catch(err => console.log(err));
    },

    insertSixDigitEntry() {
      this.sixdigitentry.ptsSixDigitNum = this.customNum.toString();
      this.sixdigitentry.ptsSixDigitNum2 = this.customNum.join("").toString();
      fetch('/api/playtosavesixdigitentry', {
        method: "post",
        body: JSON.stringify(this.sixdigitentry),
        headers: { "content-type": "application/json" }
      })
      .then(res => {
        this.successAdd = true;
        this.customNum = [];
        setTimeout(() => {
          this.successAdd = false;
        }, 2000),
        console.log("Six Digit Entry Added");
      })
      .catch(err => console.log(err));

      fetch("/api/playtosaveserialnumber", {
        method: "put",
        body: JSON.stringify(this.serialstabs),
        headers: { "content-type": "application/json" }
      })
      .then(res => {
        console.log("Stabs/Ticket Update");
      })
      .catch(err => console.log(err));
    },

    updateStabs(serialstabs) {
      this.edit = true;
      this.serialstabs.ptsSsId = serialstabs.ptsSsId;
      this.serialstabs.branchAllocation = serialstabs.branchAllocation;
      this.serialstabs.serialNumber = serialstabs.serialNumber;
      this.serialstabs.status = serialstabs.status;
    },

    numSelect(number){
      if(this.customNum.length < 6){
        this.customNum.push(number);
        console.log(this.customNum);
      }
    },

    generateRandomNumber() {
        for(var i = 0; i < 6; i++){
            if(this.customNum.length < 6){
                this.customNum.push(1 + Math.floor(Math.random() * 47));
                console.log(this.customNum);
            }
        }
    },

    clear() {
      this.customNum = [];
    },

    printNumber() {
      let numPrint = this.$refs.numtoprint;
      let ticketNum = this.$refs.serialNum;
      let customerName = this.$refs.customerName;
      let customerId = this.$refs.customerId;
      let newWin = window.open("");

      newWin.document.write("****************************");
      newWin.document.write(customerId.outerHTML);
      newWin.document.write(customerName.outerHTML);
      newWin.document.write("****************************");
      newWin.document.write(numPrint.outerHTML);
      newWin.document.write(ticketNum.outerHTML);
      newWin.document.write("****************************");
      newWin.print();
      newWin.close();
    }

  }
}
</script>

<style scoped>
.btn-circle {
  border-radius: 50px;
  height: 50px;
  width: 50px;
}
</style>