<template>
  <div class="deposits-savings-deposit-search">
    <h1>Deposits List</h1>

    <form>
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
            placeholder="Enter Client's ID"
            type="text"
            ng-reflect-name="clientId"
          >
        </div>
        <label
          class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold"
          for="status"
        >Status</label>
        <div class="col-auto">
          <button
            class="btn btn-sm btn-outline-primary mr-1"
            type="button"
            @click="fetchDeposits()"
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

    <table
      class="table table-sm table-bordered table-hover custom-table"
      v-if="this.$route.params.id"
    >
      <thead>
        <tr>
          <th scope="col">BR</th>
          <th scope="col">SLC CODE</th>
          <th scope="col">SLT CODE</th>
          <th scope="col">REF NO</th>
          <th scope="col">TR DATE</th>
          <!-- <th scope="col">Amount</th> -->
          <th scope="col">View Deposits</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="sd in sds" v-bind:key="sd.id">
          <td>{{ sd.sdBrCode }}</td>
          <td>{{ sd.sdSlcCode }}</td>
          <td>{{ sd.sdSltCode }}</td>
          <td>{{ sd.sdRefNo }}</td>
          <td>{{ sd.sdTrDate }}</td>
          <!-- <td>{{ loan.sdPamt }}</td> -->
          <td>
            <router-link
              v-bind:to="'/deposits/savings-deposit/'+sd.sdBrCode+'/'+sd.sdSlcCode+'/'+sd.sdSltCode+'/'+sd.sdRefNo+'/'+sd.clientIdSd"
            >View Deposits</router-link>
          </td>
        </tr>
      </tbody>
    </table>

    <table class="table table-sm table-bordered table-hover custom-table" v-else>
      <thead>
        <tr>
          <th scope="col">B</th>
          <th scope="col">Client ID</th>
          <th scope="col">K</th>
          <th scope="col">Client Name</th>
          <th scope="col">Middle Name</th>
          <th scope="col">Client Type</th>
          <th scope="col">Status</th>
          <th scope="col">Organization Name</th>
          <th scope="col">Old ClientID</th>
          <th scope="col">View Deposits</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="clientsd in clientsds" v-bind:key="clientsd.id">
          <td>{{ clientsd.brCode }}</td>
          <td>{{ clientsd.clientId }}</td>
          <td>{{ clientsd.chkDgt }}</td>
          <td>{{ clientsd.lastName }}, {{ clientsd.firstName }}</td>
          <td>{{ clientsd.middleName }}</td>
          <td>{{ clientsd.clientTypeName }}</td>
          <td>{{ clientsd.accountStatusName }}</td>
          <td>{{ clientsd.alertLevel }}</td>
          <td>{{ clientsd.referenceId }}</td>
          <!-- <td></td>
                    <td>{{ sd.oldClientId }}</td>
                    <td>{{ sd.slTypeMDesc }}</td>
                    <td>{{ sd.loanRefNo }}</td>
                    <td>{{ sd.loanTrDate }}</td>
                    <td>{{ sd.loanPamt }}</td>
          <td></td>-->
          <td>
            <router-link v-bind:to="'/deposits/savings-deposit/'+clientsd.clientId">View Deposits</router-link>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      clientsds: [],
      sds: [],
      search: "",
      paramId: ""
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClientSds(this.paramId);
    }
  },

  created() {},

  methods: {
    fetchDeposits() {
      let search = this.search;
      fetch(`/api/sdsearch/${search}`)
        .then(res => res.json())
        .then(res => {
          this.clientsds = res.data;
          console.log(this.clientsds);
        })
        .catch(err => console.log(err));
    },

    fetchClientSds(id) {
      fetch(`/api/sdsearch/${id}/savings-deposit-search`)
        .then(res => res.json())
        .then(res => {
          this.sds = res.data;
          console.log(this.sds);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
.deposits-savings-deposit-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
