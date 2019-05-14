<template>
  <div class="comakertoinquiry">
    <h1>Loan Accounts</h1>

    <form @submit.prevent="fetchClientCoMakers">
      <div class="form-row mb-4 mt-2 align-items-center">
        <label
          class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold"
          for="search"
        >
          <u>S</u>earch
        </label>
        <div class="col-sm-3 mr-3">
          <input
            class="form-control form-control-sm"
            v-model="search"
            name="search"
            type="text"
            ng-reflect-name="clientId"
            @keyup.enter="fetchClientCoMakers()"
          >
        </div>
        <div class="col-auto">
          <button
            class="btn btn-sm btn-outline-primary mr-1"
            type="button"
            @click="fetchClientCoMakers()"
          >
            <i class="fa fa-search mr-1"></i>
            <u>G</u>o
          </button>
          <button class="btn btn-sm btn-outline-primary" type="button">
            <i class="fa fa-times-circle mr-1"></i>Cancel
          </button>
        </div>
      </div>
    </form>

    <table class="table table-sm table-bordered table-hover custom-table">
      <thead>
        <tr>
          <td scope="col">Client ID</td>
          <td scope="col">Name of Client</td>
          <td scope="col">Loan Type</td>
          <td scope="col">AcctNo</td>
          <td scope="col">Balance</td>
          <td scope="col">Status</td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="comaker in comakers" v-bind:key="comaker.id">
          <td>{{ comaker.coMakerClientId }}</td>
          <td>{{ comaker.coMakerClientName }}</td>
          <td>{{ comaker.loanType }}</td>
          <td>{{ comaker.clientIdCoMaker }}</td>
          <td>{{ comaker.accountBalanceName }}</td>
          <td>{{ comaker.accountStatusName }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      comakers: [],
      paramId: ""
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClientCoMakers(this.paramId);
    }
  },

  methods: {
    fetchClientCoMakers(id) {
      fetch(`/api/comakers/clientId=${id}`)
        .then(res => res.json())
        .then(res => {
          this.comakers = res.data;
          console.log(this.comakers);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
.comakertoinquiry {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>