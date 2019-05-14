<template>
  <div class="other-mod-inquiry-sl-search">
    <h1>Subsidiary Ledger List</h1>

    <form @submit.prevent="fetchSubsidiaryLedger">
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
            @keyup.enter="fetchSubsidiaryLedger()"
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
            @click="fetchSubsidiaryLedger()"
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
        <tr v-for="osl in osls" v-bind:key="osl.id">
          <td>{{ osl.oslBrCode }}</td>
          <td>{{ osl.oslSlcCode }}</td>
          <td>{{ osl.oslSltCode }}</td>
          <td>{{ osl.oslRefNo }}</td>
          <td>{{ osl.oslTrDate }}</td>
          <!-- <td>{{ osl.slPamt }}</td> -->
          <td>
            <router-link
              v-bind:to="'/other-mod/inquiry-subsidiary-ledger/'+osl.oslBrCode+'/'+osl.oslSlcCode+'/'+osl.oslSltCode+'/'+osl.oslRefNo+'/'+osl.clientIdOsl"
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
        <tr v-for="clientosl in clientosls" v-bind:key="clientosl.id">
          <td>{{ clientosl.brCode }}</td>
          <td>{{ clientosl.clientId }}</td>
          <td>{{ clientosl.chkDgt }}</td>
          <td>{{ clientosl.lastName }}, {{ clientosl.firstName }}</td>
          <td>{{ clientosl.middleName }}</td>
          <td>{{ clientosl.clientTypeName }}</td>
          <td>{{ clientosl.accountStatusName }}</td>
          <td>{{ clientosl.alertLevel }}</td>
          <td>{{ clientosl.referenceId }}</td>
          <!-- <td></td>
                    <td>{{ osl.oldClientId }}</td>
                    <td>{{ osl.slTypeMDesc }}</td>
                    <td>{{ osl.loanRefNo }}</td>
                    <td>{{ osl.loanTrDate }}</td>
                    <td>{{ osl.loanPamt }}</td>
          <td></td>-->
          <td>
            <router-link
              v-bind:to="'/other-mod/inquiry-subsidiary-ledger/'+clientosl.clientId"
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
      clientosls: [],
      osls: [],
      search: "",
      paramId: ""
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClientOsls(this.paramId);
    }
  },

  created() {},

  methods: {
    fetchSubsidiaryLedger() {
      let search = this.search;
      fetch(`/api/oslsearch/${search}`)
        .then(res => res.json())
        .then(res => {
          this.clientosls = res.data;
          console.log(this.clientosls);
        })
        .catch(err => console.log(err));
    },

    fetchClientOsls(id) {
      fetch(`/api/oslsearch/${id}/inquiry-sl-search`)
        .then(res => res.json())
        .then(res => {
          this.osls = res.data;
          console.log(this.osls);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
.other-mod-inquiry-sl-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
