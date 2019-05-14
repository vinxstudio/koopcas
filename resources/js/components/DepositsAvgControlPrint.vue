<template>
  <div class="avg-control-print">
    <h1>ALERT</h1>
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
      </ul>
    </nav>

    <div class="row justify-content-center">
      <div class="col-md-5">
        <fieldset class="border p-4 bg-light">
          <div class="form-row justify-content-center">
            <label>DO YOU WANT TO GENERATE CONTROL LIST FOR PRINTING?</label>
          </div>
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <button class="btn btn-sm justify-content-center btn-outline-primary mr-1">
                <i class="fa fa-key mr-1" @click="clickPrint"></i>
                <span>
                  <u>O</u>k
                </span>
              </button>
              <router-link
                to="/deposits/deposits"
                class="btn btn-sm justify-content-center btn-outline-primary mr-1"
              >
                <i class="fa fa-times-circle mr-1"></i>
                <span>
                  <u>C</u>ancel
                </span>
              </router-link>
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

  methods: {},

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

  clickPrint() {
    var doc = new jsPDF();
    let pdfname = "Avg Share Capital and Interest Paid";

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
        "Client ID: " + JSON.stringify(this.$data.clientdetails.ClientId),
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
  }
};
</script>
<style >
.general-journal-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>