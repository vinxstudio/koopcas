<template>
  <div class="compounding-interest">
    <div class="form-row justify-content-center pt-3">
      <div class="col-sm-5">
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Setup Date:</label>
          <div class="col my-1">
            <input class="form-control form-control-sm bg-light-yellow border-0" name type="date">
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Initial Deposit:</label>
          <div class="col my-1">
            <input class="form-control form-control-sm" name type="text">
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Maturity:</label>
          <div class="col my-1">
            <input class="form-control form-control-sm bg-light-green border-0" name type="date">
          </div>
        </div>
      </div>
    </div>

    <div class="form-row justify-content-center">
      <div class="col-sm-5">
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Interest Rate:</label>
          <div class="col my-1">
            <input class="form-control form-control-sm" name type="number">
          </div>
          <span class="col-auto col-form-label col-form-label-sm mt-1">% p.a.</span>
        </div>
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Term:</label>
          <div class="col my-1">
            <div class="form-row">
              <div class="col-sm-2">
                <input
                  class="form-control form-control-sm"
                  name="term"
                  v-model="compoundinginterest.terms"
                  type="text"
                >
              </div>
              <div class="col">
                <select
                  class="custom-select custom-select-sm"
                  id
                  name="termPerd"
                  v-model="compoundinginterest.ciTermPerd"
                >
                  <option
                    v-for="depositTermPerd in depositTermPerds"
                    v-bind:value="depositTermPerd.termId"
                  >{{ depositTermPerd.termDesc }}</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Compounding Option:</label>
          <div class="col my-1">
            <select
              class="custom-select custom-select-sm"
              id
              name="dueDateTypes"
              v-model="compoundinginterest.dueDateType"
            >
              <option
                v-for="dueDateType in dueDateTypes"
                v-bind:value="dueDateType.dueDateTypeId"
              >{{dueDateType.dueDateTypeDesc}}</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
          >Mode of Compounding:</label>
          <div class="col my-1">
            <select
              class="custom-select custom-select-sm"
              id
              name="paymentMode"
              v-model="compoundinginterest.paymentMode"
            >
              <option
                v-for="paymentMode in paymentModes"
                v-bind:value="paymentMode.paymentModeId"
              >{{paymentMode.paymentModeDesc}}</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="form-row justify-content-center">
      <fieldset class="col-sm-6 my-1 border pb-3 px-3 mx-1">
        <legend
          class="col-form-label col-form-label-sm w-auto px-1"
          for="dateOpened"
        >Recurring Deposits</legend>
        <div class="form-row">
          <div class="col">
            <div class="form-row">
              <label
                class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
              >Amount:</label>
              <div class="col my-1">
                <input class="form-control form-control-sm" name type="text">
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-row">
              <label
                class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
              >No. of Periods:</label>
              <div class="col my-1">
                <input class="form-control form-control-sm" name type="text">
              </div>
            </div>
          </div>
        </div>
      </fieldset>
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
  </div>
</template>
<script>
export default {
  data() {
    return {
      compoundinginterest: {
        depositTermPerd: "",
        term: "",
        dueDateType: "",
        paymentMode: ""
      },
      depositTermPerds: [],
      terms: [],
      dueDateTypes: [],
      paymentModes: []
    };
  },
  created() {
    this.fetchDepositTermPerds();
    this.fetchDueDateTypes();
    this.fetchPaymentModes();
  },
  methods: {
    fetchDepositTermPerds() {
      fetch("/api/terms")
        .then(res => res.json())
        .then(res => {
          this.depositTermPerds = res.data;
          console.log(this.depositTermPerds);
        })
        .catch(err => console.log(err));
    },
    fetchDueDateTypes() {
      fetch("/api/dueDateTypes")
        .then(res => res.json())
        .then(res => {
          this.dueDateTypes = res.data;
          console.log(this.dueDateTypes);
        })
        .catch(err => console.log(err));
    },
    fetchPaymentModes() {
      fetch("/api/paymentModes")
        .then(res => res.json())
        .then(res => {
          this.paymentModes = res.data;
          console.log(this.paymentModes);
        })
        .catch(err => console.log(err));
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