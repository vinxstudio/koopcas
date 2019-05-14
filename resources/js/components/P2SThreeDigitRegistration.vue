<template>
  <div class="playtosave">
    <nav class="navbar navbar-expand-lg p-0 mt-2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <button class="btn btn-sm btn-outline-primary mr-1" type="button">
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" disabled>
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>C</u>ancel
            </span>
          </button>
        </li>
      </ul>
    </nav>
    <div class="col-md-16">
      <center>
        <b>Three Digit Entry</b>
        <h1>
          <b>Welcome to PIC 3 Play to Save</b>
        </h1>

        <h3 style="margin-top:5px">Teller: {{ username }}</h3>
        <button class="btn btn-btn btn-primary">Transaction Date</button>
        <button class="btn btn-btn btn-primary">Reprint</button>
        <button class="btn btn-btn btn-primary">Transaction</button>
        <button class="btn btn-btn btn-primary">Print</button>
        <button class="btn btn-btn btn-danger">Clear</button>
      </center>
    </div>
    <h5 class="mt-4 font-weight-bold">Client List:</h5>
    <div style="min-height: 250px;">
      <table class="table table-sm table-bordered custom-table">
        <thead>
          <tr>
            <th scope="col">Client ID</th>
            <th scope="col">Client Name</th>
            <th scope="col">Branch</th>
            <th scope="col">TR Docno</th>
            <th scope="col">Entry</th>
            <th scope="col">Transaction Date</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
         <tr v-for="p2sEntry in p2sEntries" v-bind:key="p2sEntry.id">
            <td>{{ p2sEntry.scBrCode }}-{{ ("00000000"+p2sEntry.clientIdSc).slice(-8) }}-{{ p2sEntry.chkDgt }}</td>
            <td>{{ p2sEntry.firstName }} {{ p2sEntry.lastName }}</td>
            <td>{{ p2sEntry.scBrCode }}</td>
            <td>{{ p2sEntry.trdocNo }}</td>
            <td>1</td>
            <td>{{ p2sEntry.trdate }}</td>
            <td>
              <router-link v-bind:to="'/play-to-save/p2s-stabs-list/'+p2sEntry.trId+'/'+p2sEntry.clientIdSc">Choose Number</router-link>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      document: moment(new Date).format('YYYYMMDD'),
      date: moment(new Date).format('YYYY-MM-DD'),
      username : localStorage.getItem("username"),

      clientLists: [],
      p2sEntries:[],
    }
  },

  created() {
    this.fetchEntries();
  },

  methods: {
    fetchEntries(){
      fetch('/api/playtosaveregisterthree')
      .then(res => res.json())
      .then(res => {
        this.p2sEntries = res.data;
        console.log(this.p2sEntries);
      })
    .catch(err => console.log(err));
    },

    
  }
}
</script>

<style>
.playtosave {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
