<template>
<div class="amortization-sched-cal">

  <nav class="navbar navbar-expand-lg p-0" id="toolbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" id="menuDropdown-0" tabindex="0">File</a>
      </li>
    </ul>
  </nav>

  <div class="form-row align-items-stretch">
    <div class="col-sm-8 py-3">
      <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
        <ul role="tablist" class="nav nav-tabs nav-fill">
          <!--bindings={"ng-reflect-ng-for-of": "[object Object]"}-->      
          <li class="nav-item">
            <a class="nav-link active" href="" role="tab" id="ngb-tab-15" aria-controls="ngb-tab-15-panel" aria-expanded="true" aria-disabled="false"> Setup<!--bindings={"ng-reflect-ng-template-outlet": null}--></a>
          </li>
        </ul>
        
        <div class="tab-content">
          <!--bindings={"ng-reflect-ng-for-of": "[object Object]"}--><!--bindings={"ng-reflect-ng-if": "true"}-->
          <div role="tabpanel" class="tab-pane active" aria-labelledby="ngb-tab-15" id="ngb-tab-15-panel" aria-expanded="true">
            <!--bindings={"ng-reflect-ng-template-outlet": "[object Object]"}-->
            <div class="form-row justify-content-between">
              <div class="col">
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Loan Type:</label>
                  <div class="col my-1">
                    <select	class="custom-select custom-select-sm" v-model="loanamort.loantype" id name="loanType">
                      <option disabled>(select one)</option>
                      <option v-for="loanLoanType in loanLoanTypes" v-bind:key="loanLoanType.id" :value="loanLoanType.slTypeSltCode">
                        {{ loanLoanType.slTypeMDesc2 }}
                      </option>
                    </select>
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate" for="loanclass">Loan Class:</label>
                  <div class="col my-1">
                    <select	class="custom-select custom-select-sm" v-model="loanamort.loanclass" id name="loanClass">
                      <option disabled>(select one)</option>
                      <option v-for="loanLoanClass in loanLoanClasses" v-bind:key="loanLoanClass.id" :value="loanLoanClass.loanClassId">
                        {{ loanLoanClass.loanClassDesc }}
                      </option>
                    </select>
                  </div>
                </div>
                
                <div class="form-row">
                  <label for="loanPurpose" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Purpose:</label>
                  <div class="col my-1">
                    <select	class="custom-select custom-select-sm" v-model="loanamort.loanpurpose" id name="loanPurpose">
                      <option disabled>(select one)</option>
                      <option v-for="loanLoanPurpose in loanLoanPurposes" v-bind:key="loanLoanPurpose.id" :value="loanLoanPurpose.loanPurposeId">
                        {{ loanLoanPurpose.loanPurposeDesc }}
                      </option>
                    </select>
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                    <strong>Principal:</strong>
                  </label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name="" type="number">
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Balance:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm bg-light-pink border-0" name="" type="text">
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Loan Date:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name="" type="date">
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Maturity:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm bg-light-green border-0" name="" type="text">
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Term</label>
                  <div class="col my-1">
                    <div class="form-row">
                      <div class="col-sm-3 my-1">
                        <input class="form-control form-control-sm" name="" type="number">
                      </div>
                      <div class="col  my-1">
                        <select class="custom-select custom-select-sm" id="" name="" v-model="loanamort.loanterms">
                          <option v-for="loanTerm in loanTerms" v-bind:key="loanTerm.id" :value="loanTerm.termId">{{loanTerm.termDesc}}</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Payment Mode:</label>
                  <div class="col my-1">
                    <select class="custom-select custom-select-sm" id="paymentMode" name="paymentMode" v-model="loanamort.pymtMode">
                      <option v-for="loanPymtMode in loanPymtModes" v-bind:key="loanPymtMode.id" :value="loanPymtMode.paymentModeId">{{loanPymtMode.paymentModeDesc}}</option>
                    </select>
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Status:</label>
                  <div class="col my-1">
                    <select class="custom-select custom-select-sm" id="status" name="status" v-model="loanamort.loanstatus">
                      <option v-for="loanCTSType in loanCTSTypes" v-bind:key="loanCTSType.id" :value="loanCTSType.ctsTypeCode">{{loanCTSType.ctsTypeDesc}}</option>
                    </select>
                  </div>
                </div>
              </div>
              
              <div class="col">
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                    <strong>Account Number:</strong>
                  </label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm bg-light-green border-0" name="" type="text">
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                    <strong>Interest:</strong>
                  </label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name="" type="number">
                  </div>
                  <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                </div>
                
                <div class="form-row">
                  <label for="amorType" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Based On:</label>
                  <div class="col my-1">
                    <select	class="custom-select custom-select-sm" v-model="loanamort.amorTypes" id name="amorTypes">
                      <option disabled>(select one)</option>
                      <option v-for="loanAmorType in loanAmorTypes" v-bind:key="loanAmorType.id" :value="loanAmorType.amorTypeId">
                        {{ loanAmorType.amorTypeDesc }}
                      </option>
                    </select>
                  </div>
                </div>
                
                <div class="form-row">
                  <label for="dimFreq" class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Diminish:</label>
                  <div class="col my-1">
                   <select	class="custom-select custom-select-sm" v-model="loanamort.dimFreq" id name="amorTypes">
                      <option disabled>(select one)</option>
                      <option v-for="loanDimFreq in loanDimFreqs" v-bind:key="loanDimFreq.id" :value="loanDimFreq.dimFreqId">
                        {{ loanDimFreq.dimFreqDesc }}
                      </option>
                    </select>
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Payment Mode:</label>
                  <div class="col my-1">
                    <select	class="custom-select custom-select-sm" v-model="loanamort.pymtMode" id name="paymentMode">
                      <option disabled>(select one)</option>
                      <option v-for="loanPymtMode in loanPymtModes" v-bind:key="loanPymtMode.id" :value="loanPymtMode.paymentModeId">
                        {{ loanPymtMode.paymentModeDesc }}
                      </option>
                    </select>
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Prepaid:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name="" type="number">
                  </div>
                  <span class="col-auto col-form-label col-form-label-sm mt-1">Payments</span>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate invisible">hidden</label>
                  <div class="col my-1">
                    <input class="form-check-input" id="defaultCheck1" type="checkbox" value="">
                    <label class="form-check-label" for="defaultCheck1"> Distribute Unpaid Interest </label>
                  </div>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
                    <strong>Penalty:</strong>
                  </label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name="" type="number">
                  </div>
                  <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
                </div>
                
                <div class="form-row">
                  <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">Computed:</label>
                  <div class="col my-1">
                    <select class="custom-select custom-select-sm" id="paymentMode" name="paymentMode" v-model="loanamort.pymtMode">
                      <option v-for="loanPymtMode in loanPymtModes" v-bind:key="loanPymtMode.id" :value="loanPymtMode.paymentModeId">{{loanPymtMode.paymentModeDesc}}</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div><!---->
        </div> 
        <center class="mt-3">
          <button class="btn btn-primary col-sm-3"><span class="fa fa-calculator mr-2"></span>Generate</button>
          <button class="btn btn-primary col-sm-3"><span class="fa fa-times mr-2"></span>Cancel</button>
        </center>
      </ngb-tabset>    
    </div>
    
    <div class="col py-3">
    <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
      <ul role="tablist" class="nav nav-tabs nav-fill">
        <li class="nav-item">
          <a class="nav-link active" href="" role="tab" id="ngb-tab-16" aria-controls="ngb-tab-16-panel" aria-expanded="true" aria-disabled="false"> 
            Due Dates
          </a>
        </li>
      </ul>

      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" aria-labelledby="ngb-tab-16" id="ngb-tab-16-panel" aria-expanded="true">
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
              Due Date Option:
            </label>
            <div class="col my-1">
              <select class="custom-select custom-select-sm" id="duedate" name="duedate" v-model="loanamort.loanduedate">
                <option v-for="loanDueDateType in loanDueDateTypes" v-bind:key="loanDueDateType.id" :value="loanDueDateType.dueDateTypeID">{{loanDueDateType.dueDateTypeDesc}}</option>
              </select>
            </div>
          </div>
          
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
              1st Interest Due Date: 
            </label>
            
            <div class="col my-1">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox">
                  </div>
                </div>
                <input class="form-control form-control-sm" type="date">
              </div>
            </div>
          </div>
          
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
              1st Principal Due Date: 
            </label>
            
            <div class="col my-1">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox">
                  </div>
                </div>
                <input class="form-control form-control-sm" type="date">
              </div>
            </div>
          </div>
          
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
              Maturity Date: 
            </label>
            <div class="col my-1">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <input type="checkbox">
                  </div>
                </div>
                <input class="form-control form-control-sm" type="date">
              </div>
            </div>
          </div>
          
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
              Use Actual No. of Days:
            </label>
            <div class="col my-1">
              <select class="custom-select custom-select-sm" id="numDays" name="numDays" v-model="loanamort.numDays">
                <option v-for="loanNumDay in loanNumDays" v-bind:key="loanNumDay.id" :value="loanNumDay.numDaysId">{{loanNumDay.numDaysDesc}}</option>
              </select>
            </div>
          </div>
          
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
              <strong>Savings:</strong>
            </label>
            <div class="col my-1">
              <input class="form-control form-control-sm" name="" type="text">
            </div>
          </div>
          
          <div class="form-row">
            <label class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate">
              <strong>Share Capital:</strong>
            </label>
            <div class="col my-1">
              <input class="form-control form-control-sm" name="" type="text">
            </div>
          </div>
        </div>
      </div>
      <center class="mt-2">
        <label class="form-control-label">Principal Amount:</label>
        <label class="form-control-label">Interest Amount:</label>
      </center>
    </ngb-tabset>
    </div>
  </div>   
</div>
</template>

<script>
export default {
  data() {
    return {
      loanamort: {
        loantype:"",
        loanclass: "",
        loanpurpose: "",
        loanterm:"",
        amorTypes:"",
        dimFreq:"",
        pymtMode:"",
        loanstatus:"",
        loanduedate:"",
        numDays:""
      },

       loanLoanTypes:[],
       loanLoanClasses: [],
       loanLoanPurposes: [],
       loanAmorTypes: [],
       loanDimFreqs: [],
       loanPymtModes: [],
       loanTerms:[],
       loanCTSTypes:[],
       loanDueDateTypes:[],
       loanNumDays:[]
    }
  },

  created() {
    this.fetchLoanClass();
    this.fetchLoanPurpose();
    this.fetchAmorType();
    this.fetchDimFreq();
    this.fetchPymtMode();
    this.fetchSLType(18);
    this.fetchTerms();
    this.fetchCTSType();
    this.fetchDueDateTypes();
    this.fetchNumDays();
  },

  methods: {
    fetchLoanClass() {
      fetch("/api/loanClasses")
        .then(res => res.json())
        .then(res => {         
          this.loanLoanClasses = res.data;
          console.log(this.loanLoanClasses);
        })
      .catch(err => console.log(err));
    },

    fetchLoanPurpose() {
      fetch("/api/loanPurposes")
        .then(res => res.json())
        .then(res => {         
          this.loanLoanPurposes = res.data;
          console.log(this.loanLoanPurposes);
        })
      .catch(err => console.log(err));
    },

    fetchAmorType() {
      fetch("/api/amorTypes")
        .then(res => res.json())
        .then(res => {         
          this.loanAmorTypes = res.data;
          console.log(this.loanAmorTypes);
        })
      .catch(err => console.log(err));
    },

    fetchDimFreq() {
      fetch("/api/dimFreqs")
        .then(res => res.json())
        .then(res => {         
          this.loanDimFreqs = res.data;
          console.log(this.loanDimFreqs);
        })
      .catch(err => console.log(err));
    },

    fetchPymtMode() {
      fetch("/api/paymentModes")
        .then(res => res.json())
        .then(res => {         
          this.loanPymtModes = res.data;
          console.log(this.loanPymtModes);
        })
      .catch(err => console.log(err));
    },

    fetchTerms() {
      fetch("/api/terms")
        .then(res => res.json())
        .then(res => {         
          this.loanTerms = res.data;
          console.log(this.loanPymtModes);
        })
      .catch(err => console.log(err));
    },

    fetchSLType(branchCode){
      fetch(`/api/sltBranch/${branchCode}`)
        .then(res => res.json())
        .then(res => {
          this.loanLoanTypes = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchCTSType(){
      fetch(`/api/spefCtsTypes`)
        .then(res => res.json())
        .then(res => {
          this.loanCTSTypes = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchDueDateTypes(){
      fetch(`/api/dueDateTypes`)
        .then(res => res.json())
        .then(res => {
          this.loanDueDateTypes = res.data;
        })
        .catch(err => console.log(err));
    },

    fetchNumDays(){
      fetch(`/api/numDays`)
        .then(res => res.json())
        .then(res => {
          this.loanNumDays = res.data;
        })
        .catch(err => console.log(err));
    },

    matDate(){

    }
  }
}
</script>
