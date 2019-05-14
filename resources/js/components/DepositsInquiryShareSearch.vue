<template>
  <div class="deposits-inquiry-share-search">
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
          <router-link to="/deposits/share-capital" class="btn btn-sm btn-outline-primary">
            <i class="fa fa-times-circle mr-1"></i>Cancel
          </router-link>
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
          <th scope="col">SLT COODE</th>
          <th scope="col">REF NO</th>
          <th scope="col">DATE</th>
          <th scope="col">Balance</th>
          <th scope="col">View Share</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="sc in scs" v-bind:key="sc.id">
          <td>{{ sc.scBrCode }}</td>
          <td>{{ sc.scSlcCode }}</td>
          <td>{{ sc.scSltCode }}</td>
          <td>{{ sc.scRefNo }}</td>
          <td>{{ sc.scTrDate }}</td>
          <td>{{ sc.scMinBal }}</td>
          <td>
            <router-link
              v-bind:to="'/deposits/inquiry-share/'+sc.scBrCode+'/'+sc.scSlcCode+'/'+sc.scSltCode+'/'+sc.scRefNo+'/'+sc.clientIdSc"
            >View Share</router-link>
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
          <th scope="col">View Client</th>
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
          <td>
            <router-link v-bind:to="'/deposits/inquiry-share/'+clientsd.clientId">View Client</router-link>
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
      scs: [],
      search: "",
      paramId: ""
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchShareCapital(this.paramId);
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

    fetchShareCapital(id) {
      fetch(`/api/scs/${id}`)
        .then(res => res.json())
        .then(res => {
          this.scs = res.data;
          console.log(this.scs);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
.deposits-inquiry-share-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
