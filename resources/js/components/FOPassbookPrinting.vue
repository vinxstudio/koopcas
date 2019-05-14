<template>
  <div class="passbook">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-1">Others</a>
        </li>
      </ul>
    </nav>

    <div class="row justify-content-center mb-2">
      <div class="col-md-5">
        <div
          class="alert alert-success my-1"
          v-if="successPrintName"
        >Client Name Has Been Successfully Printed.</div>

        <div
          class="alert alert-success my-1"
          v-if="successPrintDetails"
        >Passbook Has Been Successfully Printed.</div>

        <fieldset class="border p-4 bg-light">
          <h3 class="mt-0 mb-4">Passbook Printing</h3>
          <div class="form-row">
            <div class="col">
              <div class="form-row">
                <label
                  for="clientId"
                  class="col-md-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Client ID:</label>
                <div class="col-sm-4 my-1">
                  <input
                    type="text"
                    class="form-control form-control-sm bg-client-id"
                    name="clientId"
                    v-model="client.clientId"
                    v-if="this.$route.params.id"
                  >
                  <input
                    type="text"
                    class="form-control form-control-sm bg-client-id"
                    name="clientId"
                    v-model="clientdetails.passBkClientId"
                    v-else-if="this.$route.params.brCode && this.$route.params.clientId && this.$route.params.slcCode && this.$route.params.sltCode && this.$route.params.refNo"
                  >
                  <input
                    type="text"
                    class="form-control form-control-sm bg-client-id"
                    name="clientId"
                    v-else
                  >
                </div>

                <div class="col-sm-2 my-1">
                  <router-link
                    to="/front-office/passbook-printing-search"
                    class="btn btn-sm btn-outline-primary mr-4"
                  >
                    <i class="fa fa-search mr-1"></i>
                    <span>Find</span>
                  </router-link>
                </div>

                <div class="col-sm-4">
                  <button
                    class="btn btn-outline-primary float-right bg-white"
                    @click="clickPrintName"
                  >
                    <i class="fa fa-print mr-1"></i>
                    <span>Print Name</span>
                  </button>
                </div>
              </div>
              <div class="form-row">
                <label
                  for="name"
                  class="col-md-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Name:</label>
                <div class="col my-1">
                  <input
                    type="text"
                    class="form-control form-control-sm"
                    name="name"
                    :value="client.lastName+', '+client.firstName+' '+client.suffix+' '+client.middleName"
                    v-if="this.$route.params.id"
                  >
                  <input
                    type="text"
                    class="form-control form-control-sm"
                    name="name"
                    :value="clientdetails.lastName+', '+clientdetails.firstName+' '+clientdetails.suffix+' '+clientdetails.middleName"
                    v-else-if="this.$route.params.brCode && this.$route.params.clientId && this.$route.params.slcCode && this.$route.params.sltCode && this.$route.params.refNo"
                  >
                  <input type="text" class="form-control form-control-sm" name="name" v-else>
                </div>
              </div>
            </div>
          </div>

          <div class="form-row mt-4">
            <div class="col">
              <div>
                <fieldset class="border p-2 bg-white">
                  <div class="form-row">
                    <label
                      for="slAcctType"
                      class="col-md-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >S/L Account Type:</label>
                    <div class="col-sm-6 my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="slAcctType"
                        v-model="clientdetails.slTypeMDesc"
                      >
                    </div>

                    <div class="col-sm-2 my-1" v-if="this.$route.params.id">
                      <router-link
                        v-bind:to="'/front-office/passbook-printing-search/'+client.clientId+'/passbook-printing-search-passbook'"
                        class="btn btn-sm btn-outline-primary mr-4"
                      >
                        <i class="fa fa-search mr-1"></i>
                        <span>Find</span>
                      </router-link>
                    </div>

                    <div
                      class="col-sm-2 my-1"
                      v-else-if="this.$route.params.brCode && this.$route.params.clientId && this.$route.params.slcCode && this.$route.params.sltCode && this.$route.params.refNo"
                    >
                      <router-link
                        v-bind:to="'/front-office/passbook-printing-search/'+client.clientId+'/passbook-printing-search-passbook'"
                        class="btn btn-sm btn-outline-primary mr-4"
                      >
                        <i class="fa fa-search mr-1"></i>
                        <span>Find</span>
                      </router-link>
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      for="slAcctNo"
                      class="col-md-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >S/L Account No.:</label>
                    <div class="col my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="slAcctNo"
                        v-model="clientdetails.passBkRefNo"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      for="passbookSerialNo"
                      class="col-md-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Passbook Serial No.:</label>
                    <div class="col my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="passbookSerialNo"
                        v-model="clientdetails.passBkSerNum"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      for="lastLineUsed"
                      class="col-md-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Last Line Used:</label>
                    <div class="col my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="lastLineUsed"
                        v-model="clientdetails.passBkLineNum"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      for="topMargin"
                      class="col-md-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Top Margin:</label>
                    <div class="col my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="topMargin"
                        v-model="clientdetails.passBkPbType"
                      >
                    </div>
                  </div>

                  <div class="form-row">
                    <label
                      for="leftMargin"
                      class="col-md-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                    >Left Margin:</label>
                    <div class="col my-1">
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        name="leftMargin"
                        v-model="clientdetails.passBkSeqNo"
                      >
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>

          <div class="form-row mt-4 justify-content-center">
            <div class="col-auto">
              <button class="btn btn-outline-primary bg-white mr-1" @click="clickPrintDetails">
                <i class="fa fa-print mr-1"></i>
                <span>
                  <u>P</u>rint Details
                </span>
              </button>
              
              <button class="btn btn-outline-primary bg-white" @click="clickCancel">
                <router-link to="/front-office/passbook-printing">
                  <i class="fa fa-times-circle mr-1"></i>
                  <span>
                    <u>C</u>ancel
                  </span>
                </router-link>
              </button>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</template>

<script>
import jsPDF from "jspdf";

export default {
  data() {
    return {
      client: {
        clientId: "",
        lastName: "",
        firstName: "",
        middleName: "",
        suffix: ""
      },

      clientdetails: {
        passBkBrCode: "",
        passBkClientId: "",
        passBkSlcCode: "",
        passBkSltCode: "",
        passBkRefNo: "",
        lastName: "",
        firstName: "",
        middleName: "",
        suffix: "",
        slTypeMDesc: "",
        passBkTypeDesc: "",
        passBkPbType: "",
        passBkSerNum: "",
        passBkLineNum: "",
        passBkLtrDate: "",
        passBkBal: "",
        passBkSeqNo: ""
      },

      successPrintDetails: "",
      successPrintName: ""
    };
  },

  mounted() {
    this.brCode = this.$route.params.brCode;
    this.clientId = this.$route.params.clientId;
    this.slcCode = this.$route.params.slcCode;
    this.sltCode = this.$route.params.sltCode;
    this.refNo = this.$route.params.refNo;
    if (
      this.brCode > 0 &&
      this.clientId > 0 &&
      this.slcCode > 0 &&
      this.sltCode > 0 &&
      this.refNo > 0
    ) {
      this.fetchPassbookById(
        this.brCode,
        this.clientId,
        this.slcCode,
        this.sltCode,
        this.refNo
      );
    }

    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClient(this.paramId);
    }
  },

  methods: {
    fetchPassbookById(brCode, clientId, slcCode, sltCode, refNo) {
      fetch(`/api/passBk/${brCode}/${clientId}/${slcCode}/${sltCode}/${refNo}`)
        .then(res => res.json())
        .then(res => {
          this.clientdetails = res.data[0];
          if (this.clientdetails.suffix === null) {
            this.clientdetails.suffix = "";
          }
          console.log(this.clientdetails);
        })
        .catch(err => console.log(err));
    },

    fetchClient(id) {
      fetch(`/api/client/${id}`)
        .then(res => res.json())
        .then(res => {
          console.log(res.data);
          this.client = res.data[0];
          if (this.client.suffix === null) {
            this.client.suffix = "";
          }
        })
        .catch(err => console.log(err));
    },

    clickPrintName() {
      var doc = new jsPDF();
      let pdfname = "ClientName";

      if (this.$route.params.id) {
        doc.text(
          "Client ID: " + JSON.stringify(this.$data.client.clientId),
          20,
          20
        );
        doc.text(this.$data.client.lastName, 20, 30);
        doc.text(", ", 37, 30);
        doc.text(this.$data.client.firstName, 40, 30);
        doc.text(this.$data.client.middleName, 55, 30);
        doc.text(this.$data.client.suffix, 60, 30);
        doc.save(pdfname + ".pdf");
        this.successPrintName = true;
        setTimeout(() => {
          this.successPrintName = false;
        }, 3000);
      } else if (
        this.$route.params.brCode &&
        this.$route.params.clientId &&
        this.$route.params.slcCode &&
        this.$route.params.sltCode &&
        this.$route.params.refNo
      ) {
        doc.text(
          "Client ID: " +
            JSON.stringify(this.$data.clientdetails.passBkClientId),
          20,
          20
        );
        doc.text(this.$data.clientdetails.lastName, 20, 30);
        doc.text(", ", 37, 30);
        doc.text(this.$data.clientdetails.firstName, 40, 30);
        doc.text(this.$data.clientdetails.middleName, 55, 30);
        doc.text(this.$data.clientdetails.suffix, 60, 30);
        doc.save(pdfname + ".pdf");
        this.successPrintName = true;
        setTimeout(() => {
          this.successPrintName = false;
        }, 3000);
      }
    },

    clickPrintDetails() {
      var doc = new jsPDF();
      let pdfname = "Passbook";

      doc.text(
        "Client ID: " + JSON.stringify(this.$data.clientdetails.passBkClientId),
        20,
        20
      );
      doc.text(this.$data.clientdetails.lastName, 20, 30);
      doc.text(", ", 37, 30);
      doc.text(this.$data.clientdetails.firstName, 40, 30);
      doc.text(this.$data.clientdetails.middleName, 55, 30);
      doc.text(this.$data.clientdetails.suffix, 60, 30);
      doc.text(
        "S/L Account Type: " + this.$data.clientdetails.slTypeMDesc,
        20,
        40
      );
      doc.text(
        "S/L Account No.: " + this.$data.clientdetails.passBkRefNo,
        20,
        50
      );
      doc.text(
        "Passbook Serial No.: " + this.$data.clientdetails.passBkSerNum,
        20,
        60
      );
      doc.text(
        "Last Line Used: " + this.$data.clientdetails.passBkLineNum,
        20,
        70
      );
      doc.text("Top Margin: " + this.$data.clientdetails.passBkPbType, 20, 80);
      doc.text("Left Margin: " + this.$data.clientdetails.passBkSeqNo, 20, 90);
      doc.save(pdfname + ".pdf");
      this.successPrintDetails = true;
      setTimeout(() => {
        this.successPrintDetails = false;
      }, 3000);
    },

    clickCancel() {
      this.client.clientId = "";
      this.client.lastName = "";
      this.client.firstName = "";
      this.client.middleName = "";
      this.client.suffix = "";
      this.clientdetails.passBkBrCode = "";
      this.clientdetails.passBkClientId = "";
      this.clientdetails.passBkSlcCode = "";
      this.clientdetails.passBkSltCode = "";
      this.clientdetails.passBkRefNo = "";
      this.clientdetails.lastName = "";
      this.clientdetails.firstName = "";
      this.clientdetails.middleName = "";
      this.clientdetails.suffix = "";
      this.clientdetails.slTypeMDesc = "";
      this.clientdetails.passBkTypeDesc = "";
      this.clientdetails.passBkPbType = "";
      this.clientdetails.passBkSerNum = "";
      this.clientdetails.passBkLineNum = "";
      this.clientdetails.passBkLtrDate = "";
      this.clientdetails.passBkBal = "";
      this.clientdetails.passBkSeqNo = "";
    }
  }
};
</script>
<style>
.bg-client-id {
  background-color: #fff9c4;
}
</style>