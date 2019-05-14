<template>
  <div class="transfer-sl-accounts">
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
          <h3 class="mt-0 mb-4" style="text-align: left;">Transfer SL From/To Client</h3>
          <label class="form-check-label">This operation cannot be reversed, so be careful</label>
          <div class="form-row">
            <label
              class="col-md-5 col-form-label col-form-label-sm mt-1 text-sm-center text-truncate"
              for="prevProcessingDate"
            >FROM:</label>
            <div
              class="col-md-5 col-form-label col-form-label-sm mt-1 text-sm-center text-truncate"
            >
              <input
                type="text"
                class="form-control form-control-sm"
                v-model="transferslaccounts.trDocNo"
                name="trDocNo"
              >
            </div>
          </div>
          <div class="form-row mt-2">
            <label
              class="col-md-5 col-form-label col-form-label-sm mt-1 text-sm-center text-truncate"
              for="newProcessingDate"
            >TO:</label>
            <div
              class="col-md-5 col-form-label col-form-label-sm mt-1 text-sm-center text-truncate"
            >
              <input
                type="text"
                class="form-control form-control-sm"
                v-model="transferslaccounts.trDocNo"
                name="trDocNo"
              >
            </div>
          </div>
          <br>
          <div class="form-check form-check-sm">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Tag FROM ClientID AS CLOSED</label>
          </div>
          <div class="form-row mt-4 justify-content-center">
            <div class="col-auto">
              <button class="btn btn-outline-primary bg-white mr-1" @click="clickOk">
                <i class="fa fa-key mr-1"></i>
                <span>
                  <u>O</u>k
                </span>
              </button>
              <button class="btn btn-outline-primary bg-white" @click="clickCancel">
                <i class="fa fa-times-circle mr-1"></i>
                <span>
                  <u>C</u>ancel
                </span>
              </button>
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
      transferslaccounts: {
        trDocNo: ""
      },

      selectDisabled: true,

      readOnly: true
    };
  }
};
</script>
<style >
.transfer-sl-accounts {
  text-align: center;
  width: 100%;
  height: 100%;
  border: 1px solid #fff;
  padding-left: 15px;
  padding-right: 15px;
}
</style>