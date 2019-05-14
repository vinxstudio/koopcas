<template>
  <div class="journalize">
    <div class="form-row justify-content-center pt-2">
      <div class="col-sm-6">
        <div class="form-row">
          <label class="col-sm-4 text-sm-right text-truncate col-form-label col-form-label-sm mt-1">
            <h4 class="m-0">
              <strong>Transaction Type:</strong>
            </h4>
          </label>
          <div class="col my-1">
            <select
              class="custom-select custom-select-sm"
              name="transType"
              v-model="journalize.transType"
              id
            >
              <option
                v-for="transType in transTypes"
                :value="transType.transTypeId"
              >{{transType.transTypeDesc}};</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <label
            class="col-sm-4 text-sm-right text-truncate col-form-label col-form-label mt-1"
          >Transaction Date for Generated Transactions</label>
          <div class="col my-1">
            <input class="form-control form-control" type="date" name>
          </div>
        </div>
        <hr>
        <h4>G/L and S/L for Dividend on Share Capital</h4>
        <hr>
        <div class="form-row">
          <label
            class="col-sm-4 col-form-label col-form-label-sm mt-1 text-right text-truncate"
          >Debit (Dividend Fund GL Account)</label>
          <div class="col my-1">
            <div class="form-row">
              <div class="col-sm-3">
                <input class="form-control form-control" type="text" name>
              </div>
              <div class="col">
                <input class="form-control form-control bg-light-yellow border-0" type="text" name>
              </div>
            </div>
          </div>
        </div>
        <h4>G/L and S/L for Patronage Refund on Interest Paid</h4>
        <hr>
        <div class="form-row">
          <label
            class="col-sm-4 col-form-label col-form-label-sm text-sm-right text-truncate"
          >Debit (Patronage Refund Fund GL Account)</label>
          <div class="col my-1">
            <div class="form-row">
              <div class="col-sm-3">
                <input class="form-control form-control" type="text" name>
              </div>
              <div class="col">
                <input class="form-control form-control bg-light-yellow border-0" type="text" name>
              </div>
            </div>
          </div>
        </div>
        <hr>
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
  </div>
</template>
<script>
export default {
  data() {
    return {
      journalize: {
        transtype: ""
      },

      transTypes: []
    };
  },

  created() {
    this.fetchTransTypes();
  },

  methods: {
    fetchTransTypes() {
      fetch("/api/transTypes")
        .then(res => res.json())
        .then(res => {
          this.transTypes = res.data;
          console.log(this.transTypes);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>
<style>
.bg-light-yellow {
  background-color: #fff9c4;
}
</style>