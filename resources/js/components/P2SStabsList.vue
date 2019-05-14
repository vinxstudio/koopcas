<template>
  <div class="playtosave">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-0">File</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-1">Tools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-2">Search</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" tabindex="0" id="menuDropdown-3">Sorting (F3)</a>
        </li>
      </ul>
    </nav>

    <h2 class="mt-2 mb-4">Stabs List</h2>
    <!-- <form @submit.prevent>
      <div class="form-row mb-4 mt-2 align-items-center">
        <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search">
          <u>S</u>earch
        </label>
        <div class="col-sm-3 mr-3">
          <select name="search" v-model="search" class="form-control" @click="fetchStabs()">
            <option v-for="branch in branches" v-bind:value="branch.branchesId" :key="branch.id">{{ branch.branchesDesc }}</option>
          </select>
        </div>
        <div class="col-auto">
          <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchStabs()">
            <i class="fa fa-search mr-1"></i><u>G</u>o
          </button>
          <router-link to="/play-to-save/p2s-stabs" class="btn btn-sm btn-outline-primary">
            <i class="fa fa-times-circle mr-1"></i>Cancel
          </router-link>
        </div>
      </div>
    </form> -->

    <form @submit.prevent="fetchTickets">
      <div class="form-row mb-4 mt-2 align-items-center">
        <label class="col-form-label col-form-label-sm text-sm-right text-truncate font-weight-bold" for="search">
          <u>S</u>earch
        </label>
        <div class="col-sm-3 mr-3">
          <input type="text" name="search" v-model="search" class="form-control" @keyup="fetchTickets()">
        </div>
        <div class="col-auto">
          <button class="btn btn-sm btn-outline-primary mr-1" type="button" @click="fetchTickets()">
            <i class="fa fa-search mr-1"></i><u>G</u>o
          </button>
          <router-link to="/play-to-save/p2s-stabs" class="btn btn-sm btn-outline-primary">
            <i class="fa fa-times-circle mr-1"></i>Cancel
          </router-link>
        </div>
      </div>
    </form>

    <table class="table table-sm table-bordered table-hover custom-table">
      <thead>
        <tr>
          <th scope="col">Branch</th>
          <th scope="col">Serial Number</th>
          <th scope="col">Solicitor</th>
          <th scope="col">Date Added</th>
          <th scope="col">Pick Ticket</th>
        </tr>
      </thead>

      <tbody>
        <tr v-for="serialnumber in serialnumbers" v-bind:key="serialnumber.id">
          <td>{{serialnumber.branchesDesc }}</td>
          <td>{{serialnumber.serialNumber }}</td>
          <td>{{serialnumber.ticketSolicitor }}</td>
          <td>{{serialnumber.dateAdded }}</td>
          <td v-if="serialnumber.status === 'not sold'"><router-link v-bind:to="'/play-to-save/p2s-three-digit-number-selection/'+serialnumber.ptsSsId+'/'+serialnumber.branchAllocation+'/'+serialnumber.serialNumber+'/'+trId+'/'+clientIdSc">Pick Ticket</router-link></td>
          <td v-else-if="serialnumber.status === 'sold'">sold</td>
        </tr>
      </tbody>
    </table>

    <!-- <nav>
      <ul class="pagination">
        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
          <a class="page-link" href="#" @click="fetchStabs(pagination.prev_page_url)">Previous</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link text-dark" href="#">Page {{ pagination.current_page }} of {{ pagination.last_page }}</a>
        </li>
        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
          <a class="page-link" href="#" @click="fetchStabs(pagination.next_page_url)">Next</a>
        </li>
      </ul>
    </nav> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      serialnumbers: [],
      search: "",
      // pagination: {},

      // branches: [],

      trId:"",
      clientIdSc: "",
    };
  },

  mounted(){
    this.trId = this.$route.params.id;
    this.clientIdSc = this.$route.params.clientid;
  },

  created() {
    // this.fetchAllBranches();
  },

  methods: {
    // fetchStabs(page_url) {
    //   const search = this.search;
    //   page_url = page_url || `/api/playtosaveserialnumbers/${search}`;
    //   fetch(page_url)
    //     .then(res => res.json())
    //     .then(res => {
    //       this.serialnumbers = res.data;
    //       this.makePagination(res.meta, res.links);
    //       console.log(this.serialnumbers);
    //     })
    //     .catch(err => console.log(err));
        
    // },
    // makePagination(meta, links) {
    //   let pagination = {
    //     current_page: meta.current_page,
    //     last_page: meta.last_page,
    //     next_page_url: links.next,
    //     prev_page_url: links.prev
    //   };

    //   this.pagination = pagination;
    // },

    // fetchAllBranches() {
    //   fetch("/api/branches")
    //     .then(res => res.json())
    //     .then(res => {
    //       this.branches = res.data;
    //       console.log(this.branches);
    //     })
    //     .catch(err => console.log(err));
    // },

    fetchTickets() {
      let search = this.search;
      fetch(`/api/playtosaveserialstabsinfo/${search}`)
        .then(res => res.json())
        .then(res => {
          this.serialnumbers = res.data;
          console.log(this.serialnumbers);
        })
    }
  }
};
</script>

<style>
.playtosave {
  width: 100%;
  padding-left: 25px;
  padding-right: 25px;
}
</style>
