<template>
  <div class="general-journal-search">
    <h1>Transaction Filter</h1>
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
      </ul>
    </nav>

    <div class="row justify-content-center">
      <div class="col-md-5">
        <fieldset class="border p-4 bg-light">
          <div class="form-row justify-content-center">
            <label
              for="transType"
              class="col-md-5 col-form-label col-form-label-md mt-1 text-sm-right text-truncate"
            >Trans. Type:</label>
            <div class="col my-1">
              <select class="custom-select custom-select-sm" name="trCode" v-model="trCode">
                <option
                  v-for="transType in transTypes"
                  v-bind:value="transType.transTypeId"
                >{{ transType.transTypeDesc }}</option>
              </select>
            </div>
          </div>
          <br>
          <div class="form-row">
            <label
              class="col-md-5 col-form-label col-form-label-sm mt-1 mb-2 text-sm-right text-truncate"
            >Trans. Year:</label>
            <input
              type="text"
              class="col-md-4 form-control form-control-sm"
              name="trYear"
              v-model="trYear"
            >
          </div>
          <div class="form-row">
            <label
              class="col-md-5 col-form-label col-form-label-sm mt-1 mb-2 text-sm-right text-truncate"
            >Control Number:</label>
            <input
              type="text"
              class="col-md-4 form-control form-control-sm"
              name="trCtlNo"
              v-model="trCtlNo"
            >
          </div>
          <div class="form-row">
            <label
              class="col-md-5 col-form-label col-form-label-sm mt-1 mb-2 text-sm-right text-truncate"
            >Document Number:</label>
            <input
              type="text"
              class="col-md-4 form-control form-control-sm"
              name="trDocNo"
              v-model="trDocNo"
            >
          </div>
          <div class="row justify-content-center">
            <div class="col my-1 align-items-end justify-content-end">
              <fieldset class="my-1 border pb-3 px-3 mx-1">
                <legend
                  class="col-form-label col-form-label-sm w-auto px-1"
                  for="dateOpened"
                >Date Filter</legend>
                <div class="form-row text-center">
                  <label class="col-md-6 text-center">FROM</label>
                  <label class="col-md-6 text-center">TO</label>
                </div>
                <div class="form-row">
                  <div class="col">
                    <input type="date" class="col-md-12 form-control form-control-sm" name>
                  </div>
                  <div class="col">
                    <input type="date" class="col-md-12 form-control form-control-sm" name>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
          <label class="text-sm-right text-truncate">Explanation</label>
          <div class="col">
            <input type="text" class="form-control form-control-sm mb-2" name>
          </div>
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <button
                class="btn btn-sm btn-outline-primary mr-1"
                type="button"
                @click="fetchTrans()"
              >
                <i class="fa fa-search mr-1"></i>
                <u>G</u>o
              </button>
              <router-link
                to="/back-office/general-journal"
                class="btn btn-sm justify-content-center btn-outline-primary mr-1"
              >
                <i class="fa fa-times-circle mr-1"></i>
                <span>
                  <u>C</u>ancel
                </span>
              </router-link>
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <hr>
    <table class="table table-sm table-bordered table-hover custom-table">
      <thead>
        <tr>
          <td scope="col">Trans Type</td>
          <td scope="col">Year</td>
          <td scope="col">Control Number</td>
          <td scope="col">Document Number</td>
          <td scope="col">Explanation</td>
          <td scope="col">View Transaction</td>
        </tr>
      </thead>

      <tbody>
        <tr v-for="transsum in transsums" v-bind:key="transsum.id">
          <td>{{ transsum.transTypeDesc }}</td>
          <td>{{ transsum.trYear }}</td>
          <td>{{ transsum.trCtlNo }}</td>
          <td>{{ transsum.trDocNo }}</td>
          <td>{{ transsum.explanation }}</td>
          <td>
            <router-link
              v-bind:to="'/back-office/general-journal/'+transsum.trCode+'/'+transsum.trYear+'/'+transsum.trCtlNo+'/'+transsum.trDocNo"
            >View Transaction</router-link>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      transTypes: [],
      transsums: [],
      trCode: "",
      trYear: moment(new Date()).format("YYYY"),
      trCtlNo: "",
      trDocNo: ""
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
    },

    fetchTrans() {
      let trCode = this.trCode;
      let trYear = this.trYear;
      let trCtlNo = this.trCtlNo;
      let trDocNo = this.trDocNo;
      fetch(`/api/transSum/${trCode}/${trYear}/${trCtlNo}/${trDocNo}`)
        .then(res => res.json())
        .then(res => {
          this.transsums = res.data;
          console.log(this.transsums);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>
<style>
.general-journal-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>