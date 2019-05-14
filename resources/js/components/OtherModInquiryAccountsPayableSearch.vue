<template>
  <div class="other-mod-inquiry-ap-search">
    <h1>Accounts Payable List</h1>

    <form @submit.prevent="fetchAccountsPayable">
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
            @keyup.enter="fetchAccountsPayable()"
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
            @click="fetchAccountsPayable()"
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
          <th scope="col">View Account</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="ap in aps" v-bind:key="ap.id">
          <td>{{ ap.apBrCode }}</td>
          <td>{{ ap.apSlcCode }}</td>
          <td>{{ ap.apSltCode }}</td>
          <td>{{ ap.apRefNo }}</td>
          <td>{{ ap.apTrDate }}</td>
          <!-- <td>{{ ap.apPamt }}</td> -->
          <td>
            <router-link
              v-bind:to="'/other-mod/inquiry-accounts-payable/'+ap.apBrCode+'/'+ap.apSlcCode+'/'+ap.apSltCode+'/'+ap.apRefNo+'/'+ap.clientIdAp"
            >View Account</router-link>
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
          <th scope="col">View Account</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="clientap in clientaps" v-bind:key="clientap.id">
          <td>{{ clientap.brCode }}</td>
          <td>{{ clientap.clientId }}</td>
          <td>{{ clientap.chkDgt }}</td>
          <td>{{ clientap.lastName }}, {{ clientap.firstName }}</td>
          <td>{{ clientap.middleName }}</td>
          <td>{{ clientap.clientTypeName }}</td>
          <td>{{ clientap.accountStatusName }}</td>
          <td>{{ clientap.alertLevel }}</td>
          <td>{{ clientap.referenceId }}</td>
          <!-- <td></td>
                    <td>{{ ap.oldClientId }}</td>
                    <td>{{ ap.slTypeMDesc }}</td>
                    <td>{{ ap.loanRefNo }}</td>
                    <td>{{ ap.loanTrDate }}</td>
                    <td>{{ ap.loanPamt }}</td>
          <td></td>-->
          <td>
            <router-link
              v-bind:to="'/other-mod/inquiry-accounts-payable/'+clientap.clientId"
            >View Account</router-link>
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
      clientaps: [],
      aps: [],
      search: "",
      paramId: ""
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClientAps(this.paramId);
    }
  },

  created() {},

  methods: {
    fetchAccountsPayable() {
      let search = this.search;
      fetch(`/api/apsearch/${search}`)
        .then(res => res.json())
        .then(res => {
          this.clientaps = res.data;
          console.log(this.clientaps);
        })
        .catch(err => console.log(err));
    },

    fetchClientAps(id) {
      fetch(`/api/apsearch/${id}/inquiry-ap-search`)
        .then(res => res.json())
        .then(res => {
          this.aps = res.data;
          console.log(this.aps);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
.other-mod-inquiry-ap-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
