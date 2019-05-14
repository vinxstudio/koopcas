<template>
  <div class="sl-account-summary">
    <table class="table table-sm table-bordered table-hover custom-table">
      <thead>
        <tr>
          <td scope="col">SLC</td>
          <td scope="col">SLT</td>
          <td scope="col">Description</td>
          <td scope="col">AcctNo</td>
          <td scope="col">Setup Date</td>
          <td scope="col">Setup Amount</td>
          <td scope="col">Balance</td>
          <td scope="col">Cleared Balance</td>
          <td scope="col">Hold-Amt</td>
          <td scope="col">Uncleared-Amt</td>
        </tr>
      </thead>
      <tbody>
        <tr v-for="slsum in slsums" v-bind:key="slsum.id">
          <td>{{ slsum.slcCode }}</td>
          <td>{{ slsum.sltCode }}</td>
          <td></td>
          <td></td>
          <td>{{ slsum.trDate }}</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      slsums: [],
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
      fetch(`/api/slSums/clientId=${id}`)
        .then(res => res.json())
        .then(res => {
          this.slsums = res.data;
          console.log(this.slsums);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>

<style>
.sl-account-summary {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>