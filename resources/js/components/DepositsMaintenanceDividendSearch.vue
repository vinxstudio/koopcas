<template>
  <div class="maintenance-dividend-search">
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
                  <select
                    class="custom-select custom-select-sm"
                    name="transType"
                    v-model="maintenancedividend.transtype"
                  >
                    <option
                      v-for="transType in transTypes"
                      :value="transType.transTypeId"
                    >{{transType.transTypeDesc}}</option>
                  </select>
                <option value></option>
              </select>
            </div>
          </div>
          <br>
          <div class="form-row">
            <label
              class="col-md-5 col-form-label col-form-label-sm mt-1 mb-2 text-sm-right text-truncate"
            >Trans. Year:</label>
            <input type="date" class="col-md-4 form-control form-control-sm" name>
          </div>
          <div class="form-row">
            <label
              class="col-md-5 col-form-label col-form-label-sm mt-1 mb-2 text-sm-right text-truncate"
            >Control Number:</label>
            <input type="text" class="col-md-4 form-control form-control-sm" name>
          </div>
          <div class="form-row">
            <label
              class="col-md-5 col-form-label col-form-label-sm mt-1 mb-2 text-sm-right text-truncate"
            >Document Number:</label>
            <input type="text" class="col-md-4 form-control form-control-sm" name>
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
              <button class="btn btn-sm justify-content-center btn-outline-primary mr-1">
                <i class="fa fa-key mr-1"></i>
                <span>
                  <u>O</u>k
                </span>
              </button>
              <router-link
                to="/back-office/generaljournal"
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
  </div>
</template>

<script>
export default {
  data() {
    return {
      maintenancedividend: {
        transtype: ""
      },

      transTypes: []
    };
  },

  created() {
    this.fetchTransType();
  },

  methods: {
    fetchTransType() {
      fetch("/api/transTypes/6")
        .then(res => res.json())
        .then(res => {
          this.transTypes = res.data;
          console.log(this.transTypes);
        })
        .catch(err => console.log(err));
    }
  }
};
</script>


<style >
.general-journal-search {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}
</style>