<template>
  <div class="statement-of-account">
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
          <h3 class="mt-0 mb-4" style="text-align: left;">Statement of Accounts Filter</h3>
          <div class="form-row justify-content-center">
            <div class="form-row">
              <div class="col">
                <label class="col">Cut-Off Date:</label>
                <input
                  class="col-md-12 form-control form-control-sm"
                  type="date"
                  name="tdTrDate"
                  v-model="statementofaccount.tdTrDate"
                  readonly
                >
              </div>
              <div class="col">
                <label class="col">Statement Date:</label>
                <input
                  class="col-md-12 form-control form-control-sm"
                  type="date"
                  name="tdTrDate"
                  v-model="statementofaccount.tdTrDate"
                  readonly
                >
              </div>
            </div>
          </div>

          <br>
          <div class="row justify-content-center">
            <div class="col my-1 align-items-end justify-content-end">
              <fieldset class="my-1 border pb-3 px-3 mx-1">
                <legend class="col-form-label col-form-label-sm w-auto px-1" for="dateOpened"></legend>
                <label class="text-sm-right text-truncate">Letter Option:</label>
                <div class="col">
                  <select
                    class="form-control form-control-sm"
                    id
                    v-model="statementofaccount.SlTypeSlgCode"
                    name="SlTypeSlgCode"
                  >
                    <option disabled>(select one)</option>
                    <option
                      v-for="statementofaccountSlgClasses in statementofaccountSlgClasses"
                      v-bind:value="statementofaccountSlgClasses.slgClassId"
                    >{{ statementofaccountSlgClasses.slgClassDesc }}</option>
                  </select>
                </div>
                <br>
                <div class="form-check form-check-sm">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">Include Deposits</label>
                </div>
              </fieldset>
            </div>
          </div>
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <button class="btn btn-sm justify-content-center btn-outline-primary mr-1">
                <i class="fa fa-key mr-1"></i>
                <span>
                  <u>O</u>k
                </span>
              </button>
              <button class="btn btn-sm justify-content-center btn-outline-primary mr-1">
                <i class="fa fa-times-circle mr-1"></i>
                <span>
                  <u>C</u>ancel
                </span>
              </button>
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
      statementofaccount: {
        SlTypeSlgCode: "",
        tdTrDate: ""
      },

      selectDisabled: true,

      readOnly: true,

      // others computation only plural
      statementofaccountSlgClasses:[],
       
      letterOption:[
        {coopPHCCITac:
          [
            {desc:"First Notice",code:4},
            {desc:"Last Notice",code:5},
            {desc:"Pre-Offset Notice", code:6},
            {desc:"First Demand", code:7},
            {desc:"Last Demand",code:8},
            {desc:"Comaker Demand Letter",code:15},
            {desc:"Withdrawal from Membership",code:16}
          ]
        },
        {coopPHCCIDum:
          [
            {desc:"First Notice",code:4},
            {desc:"Last Notice",code:5},
            {desc:"Pre-Offset Notice",code:18},
            {desc:"First Demand Letter",code:12},
            {desc:"Last Demand Letter",code:13},
            {desc:"Final Demand Letter",code:14},
            {desc:"Comaker Demand Letter",code:15},
            {desc:"Withdrawal from Membership",code:16}
          ]
        },
        {coopADTEMPCO:
          [
            {desc:"First Notice",code:4},
            {desc:"Last Notice",code:5},
            {desc:"Pre-Offset Notice",code:6},
            {desc:"First Demand Letter",code:12},
            {desc:"Final Demand Letter",code:13},
            {desc:"Comaker Demand Letter",code:15},
            {desc:"Withdrawal from Membership",code:16},
            {desc:"Deposits Below Minimum Notice",code:9}
          ]
        },
        {coopGubatStAnthonyCoop:
          [
            {desc:"First Notice",code:4},
            {desc:"Last Notice",code:5},
            {desc:"Pre-Offset Notice",code:6},
            {desc:"First Demand Letter",code:12},
            {desc:"Final Demand Letter",code:13},
            {desc:"Comaker Demand Letter",code:15},
            {desc:"Withdrawal from Membership",code:16},
            {desc:"Audit Verification",code:11}
          ]
        },
        {coopSOEMCO:
          [
            {desc:"First Notice",code:4},
            {desc:"Last Notice",code:5},
            {desc:"Pre-Offset Notice",code:6},
            {desc:"First Demand Letter",code:12},
            {desc:"Final Demand Letter",code:19},
            {desc:"Comaker Demand Letter",code:15},
            {desc:"Withdrawal from Membership",code:16},
            {desc:"Notice for Mediation",code:17},
            {desc:"Attornys's Notice",code:20},
          ]
        },
        {none:
          [
            {desc:"First Notice",code:4},
            {desc:"Last Notice",code:5},
            {desc:"Pre-Offset Notice",code:6},
            {desc:"First Demand Letter",code:12},
            {desc:"Final Demand Letter",code:19},
            {desc:"Comaker Demand Letter",code:15},
            {desc:"Withdrawal from Membership",code:16},
            {desc:"Notice for Mediation",code:17}
          ]
        }
      ]
    };
  },

  created() {
    this.fetchSlgClasses();
  },

  methods: {
    fetchSlgClasses() {
      fetch("/api/slgClasses")
        .then(res => res.json())
        .then(res => {
          this.statementofaccountSlgClasses = res.data;
          console.log(this.statementofaccountSlgClasses);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>
<style>
.statement-of-account {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>