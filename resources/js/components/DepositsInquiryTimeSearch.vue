<template>
  <div class="inquiry-time-search">
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
        <tr v-for="td in tds" v-bind:key="td.id">
          <td>{{ td.tdBrCode }}</td>
          <td>{{ td.tdSlcCode }}</td>
          <td>{{ td.tdSltCode }}</td>
          <td>{{ td.tdRefNo }}</td>
          <td>{{ td.tdTrDate }}</td>
          <!-- <td>{{ loan.sdPamt }}</td> -->
          <td>
            <router-link
              v-bind:to="'/deposits/inquiry-time/'+td.tdBrCode+'/'+td.tdSlcCode+'/'+td.tdSltCode+'/'+td.tdRefNo+'/'+td.clientIdTd"
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
        <tr v-for="clientTd in clientTds" v-bind:key="clientTd.id">
          <td>{{ clientTd.brCode }}</td>
          <td>{{ clientTd.clientId }}</td>
          <td>{{ clientTd.chkDgt }}</td>
          <td>{{ clientTd.lastName }}, {{ clientTd.firstName }}</td>
          <td>{{ clientTd.middleName }}</td>
          <td>{{ clientTd.clientTypeName }}</td>
          <td>{{ clientTd.accountStatusName }}</td>
          <td>{{ clientTd.alertLevel }}</td>
          <td>{{ clientTd.referenceId }}</td>
          <!-- <td></td>
                    <td>{{ sd.oldClientId }}</td>
                    <td>{{ sd.slTypeMDesc }}</td>
                    <td>{{ sd.loanRefNo }}</td>
                    <td>{{ sd.loanTrDate }}</td>
                    <td>{{ sd.loanPamt }}</td>
          <td></td>-->
          <td>
            <router-link v-bind:to="'/deposits/inquiry-time/'+clientTd.clientId">View Deposits</router-link>
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
      clientTds: [],
      tds: [],
      search: ""
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClientTds(this.paramId);
    }
  },

  created() {},

  methods: {
    fetchDeposits() {
      let search = this.search;
      fetch(`/api/tdsearch/${search}`)
        .then(res => res.json())
        .then(res => {
          this.clientTds = res.data;
          console.log(this.clientTds);
        })
        .catch(err => console.log(err));
    },

    fetchClientTds(id) {
      fetch(`/api/tdsearch/${id}/inquiry-time-search`)
        .then(res => res.json())
        .then(res => {
          this.tds = res.data;
          console.log(this.tds);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
.inquiry-time-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
