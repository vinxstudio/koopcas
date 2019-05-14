<template>
  <div class="activitylogs">
    <h1>Activity Logs</h1>

    <form @submit.prevent="fetchActivityLogs">
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
            @keyup.enter="fetchActivityLogs()"
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
            @click="fetchActivityLogs()"
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
          <td scope="col">Date and Time</td>
          <td scope="col">Description</td>
          <td scope="col">User Name</td>
          <td scope="col">Ovrd By</td>
          <td scope="col">ClientID</td>
          <td scope="col">Client Name</td>
          <td scope="col">Field</td>
          <td scope="col">Info</td>
          <td scope="col">From Data</td>
          <td scope="col">To Data</td>
          <td scope="col">SL Type</td>
          <td scope="col">Ref No.</td>
          <td scope="col">TR</td>
          <td scope="col">Control #</td>
          <td scope="col">Tr Date</td>
          <td scope="col">Tr Time</td>
          <td scope="col">Amount</td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="actvtlog in actvtlogs" v-bind:key="actvtlog.id">
          <td>{{ actvtlog.dateTimeAdded }}</td>
          <td></td>
          <td></td>
          <td>{{ actvtlog.ovrdId }}</td>
          <td>{{ actvtlog.clientId }}</td>
          <td></td>
          <td>{{ actvtlog.actvtFieldId }}</td>
          <td>{{ actvtlog.actvtInfo }}</td>
          <td>{{ actvtlog.fromData }}</td>
          <td>{{ actvtlog.toData }}</td>
          <td>{{ actvtlog.sltCode }}</td>
          <td>{{ actvtlog.refNo }}</td>
          <td>{{ actvtlog.trCode }}</td>
          <td>{{ actvtlog.trCtlNo }}</td>
          <td>{{ actvtlog.trDate }}</td>
          <td>{{ actvtlog.trTime }}</td>
          <td>{{ actvtlog.trAmt }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      actvtlogs: [],
      paramId: ""
    };
  },

  mounted() {
    this.paramId = this.$route.params.id;
    if (this.paramId > 0) {
      this.fetchClientActvtLog(this.paramId);
    }
  },

  methods: {
    fetchClientActvtLog(id) {
      fetch(`/api/actvtlogs/clientId=${id}`)
        .then(res => res.json())
        .then(res => {
          this.actvtlogs = res.data;
          console.log(this.actvtlogs);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
.activitylogs {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>