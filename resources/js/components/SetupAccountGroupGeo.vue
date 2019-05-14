<template>
  <div class="account-group-geo">
    <nav class="navbar navbar-expand-lg p-0" id="toolbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">File</a>
          <div class="dropdown-menu" style="left: 5px; min-width: 200px; font-size: 13px;">
            <a href="#" class="dropdown-item">
              Find
              <span class="float-right">Ctrl+F</span>
            </a>
            <a href="#" class="dropdown-item">
              New
              <span class="float-right">Ctrl+N</span>
            </a>
            <a href="#" class="dropdown-item">
              Edit
              <span class="float-right">Ctrl+F2</span>
            </a>
            <a href="#" class="dropdown-item">
              Delete
              <span class="float-right">F4</span>
            </a>
            <a href="#" class="dropdown-item">
              Save
              <span class="float-right">F11</span>
            </a>
            <a href="#" class="dropdown-item">
              Exit
              <span class="float-right">Ctrl+X</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tools</a>
          <div class="dropdown-menu" style="left: 5px; min-width: 200px; font-size: 13px;">
            <a href="#" class="dropdown-item">Activity Logs</a>
            <a href="#" class="dropdown-item">
              Load Tree View
              <span class="float-right">F5</span>
            </a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <router-link
            to="/setup/account-group-geo-search"
            class="btn btn-sm btn-outline-primary mr-4"
          >
            <i class="fa fa-search mr-1"></i>
            <span>Find</span>
          </router-link>

          <button
            class="btn btn-sm btn-outline-primary mr-1"
            type="button"
            @click="insertGeographical"
          >
            <i class="fa fa-file mr-1"></i>
            <span>
              Ne
              <u>w</u>
            </span>
          </button>
          
          <button
            class="btn btn-sm btn-outline-primary mr-1"
            type="button"
            @click="editGeo(geographical)"
            v-if="this.$route.params.geoId && this.$route.params.geoBrCode"
          >
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-1" type="button" v-else>
            <i class="fa fa-pencil-alt mr-1"></i>
            <span>
              <u>E</u>dit
            </span>
          </button>
          
          <button
            class="btn btn-sm btn-outline-primary mr-4"
            type="button"
            v-if="this.$route.params.geoId && this.$route.params.geoBrCode"
          >
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
          <button class="btn btn-sm btn-outline-secondary mr-4" type="button" v-else>
            <i class="fa fa-trash mr-1"></i>
            <span>
              <u>D</u>elete
            </span>
          </button>
        </li>
      </ul>
    </nav>

    <div class="alert alert-success" v-if="successAdd">Geo Added Successfully</div>

    <div class="alert alert-success" v-if="successEdit">Geo Edited Successfully</div>

    <form @submit.prevent="insertGeo">
      <div class="form-row justify-content-center pt-3">
        <fieldset class="border">
          <div class="col-md-12">
            <div class="form-row">
              <div class="col mt-3">
                <div class="form-row">
                  <label
                    class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Code:</label>
                  <div class="col my-1">
                    <input
                      class="form-control form-control-sm"
                      v-model="geographical.geoId"
                      name="geoId"
                      type="text"
                      :readonly="readOnly"
                    >
                  </div>
                </div>
              </div>
              <div class="col mt-3">
                <div class="form-row">
                  <label
                    class="col-sm-4 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Geographical:</label>
                  <div class="col my-1">
                    <select
                      class="custom-select custom-select-sm"
                      v-model="geographical.geoCollChartId"
                      name="geoCollChartId"
                      :disabled="selectDisabled"
                    >
                      <option disabled>(select one)</option>
                      <option
                        v-for="collchart in collcharts"
                        v-bind:value="collchart.collChartId"
                      >{{ collchart.collChartDesc }}</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
              <label
                class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
              >Description:</label>
              <div class="col my-1">
                <input
                  class="form-control form-control-sm"
                  v-model="geographical.geoDesc"
                  name="geoDesc"
                  type="text"
                  :readonly="readOnly"
                >
              </div>
            </div>
            <br>
          </div>
        </fieldset>
      </div>

      <div class="d-flex justify-content-center" style="margin-bottom: 20px; margin-top: 20px;">
        <button class="btn btn-secondary mr-1" type="submit" v-if="buttonDisabled">
          <i class="fa fa-save mr-1"></i>
          <span>
            <u>S</u>ave
          </span>
        </button>
        <button class="btn btn-success mr-1" type="submit" v-else :disabled="buttonDisabled">
          <i class="fa fa-save mr-1"></i>
          <span>
            <u>S</u>ave
          </span>
        </button>
        
        <button class="btn btn-secondary" type="button" v-if="buttonDisabled">
          <i class="fa fa-times-circle mr-1"></i>
          <span>
            Canc
            <u>e</u>l
          </span>
        </button>
        <button
          class="btn btn-outline-primary"
          type="button"
          v-else
          :disabled="buttonDisabled"
          @click="cancel"
        >
          <router-link to="/setup/account-group-geo" class="new" :disabled="buttonDisabled">
            <i class="fa fa-times-circle mr-1"></i>
            <span>
              Canc
              <u>e</u>l
            </span>
          </router-link>
        </button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      geographical: {
        geoId: "",
        geoDesc: "",
        geoBrCode: "",
        geoUpdUser: "",
        geoUpdDateTime: "",
        geoCollChartId: ""
      },

      edit: false,

      collcharts: [],

      selectDisabled: true,

      buttonDisabled: true,

      readOnly: true,

      successAdd: "",

      successEdit: ""
    };
  },

  mounted() {
    this.geoId = this.$route.params.geoId;
    this.geoBrCode = this.$route.params.geoBrCode;
    if (this.geoId > 0 && this.geoBrCode > 0) {
      this.fetchGeographical(this.geoId, this.geoBrCode);
    }
  },

  created() {
    this.fetchCollCharts();
  },

  methods: {
    fetchGeographical(geoId, geoBrCode) {
      fetch(`/api/geo/${geoId}/${geoBrCode}`)
        .then(res => res.json())
        .then(res => {
          this.geographical = res.data[0];
          console.log(this.geographical);
        })
        .catch(err => console.log(err));
    },

    fetchCollCharts() {
      fetch("/api/collCharts")
        .then(res => res.json())
        .then(res => {
          this.collcharts = res.data;
          console.log(this.collcharts);
        })
        .catch(err => console.log(err));
    },

    insertGeo() {
      if (this.edit === false) {
        fetch("/api/geo", {
          method: "post",
          body: JSON.stringify(this.geographical),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            res.json();
            this.geographical.geoId = "";
            this.geographical.geoDesc = "";
            this.geographical.geoBrCode = "";
            this.geographical.geoUpdUser = "";
            this.geographical.geoUpdDateTime = "";
            this.geographical.geoCollChartId = "";
            this.readOnly = true;
            this.successAdd = true;
            this.buttonDisabled = true;
            setTimeout(() => {
              this.successAdd = false;
            }, 2000),
              console.log("Geo Added");
          })
          .catch(err => console.log(err));
      } else {
        fetch("/api/geo", {
          method: "put",
          body: JSON.stringify(this.geographical),
          headers: { "content-type": "application/json" }
        })
          .then(res => {
            this.successEdit = true;
            this.readOnly = true;
            this.selectDisabled = true;
            this.buttonDisabled = true;
            setTimeout(() => {
              this.successEdit = false;
            }, 2000);
            this.fetchGeographical(
              this.$route.params.geoId,
              this.$route.params.geoBrCode
            );
            console.log("Geo Edited");
          })
          .catch(err => console.log(err));
      }
    },

    editGeo(geographical) {
      this.edit = true;
      this.selectDisabled = false;
      this.readOnly = false;
      this.buttonDisabled = false;
      this.geographical.geoId = geographical.geoId;
      this.geographical.geoDesc = geographical.geoDesc;
      this.geographical.geoBrCode = geographical.geoBrCode;
      this.geographical.geoUpdUser = geographical.geoUpdUser;
      this.geographical.geoUpdDateTime = geographical.geoUpdDateTime;
      this.geographical.geoCollChartId = geographical.geoCollChartId;
    },

    insertGeographical() {
      this.readOnly = false;
      this.buttonDisabled = false;
      this.selectDisabled = false;
      this.geographical.geoId = "";
      this.geographical.geoDesc = "";
      this.geographical.geoBrCode = "";
      this.geographical.geoUpdUser = "";
      this.geographical.geoUpdDateTime = "";
      this.geographical.geoCollChartId = "";
    },

    cancel() {
      this.readOnly = true;
      this.selectDisabled = true;
      this.buttonDisabled = true;
      this.geographical.geoId = "";
      this.geographical.geoDesc = "";
      this.geographical.geoBrCode = "";
      this.geographical.geoUpdUser = "";
      this.geographical.geoUpdDateTime = "";
      this.geographical.geoCollChartId = "";
    }
  }
};
</script>

<style>
.account-group-geo {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>
