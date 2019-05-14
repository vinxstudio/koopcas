<template>
  <div class="transfers-to-branch">
    <div class="form-row justify-content-center">
      <fieldset class="border w-50">
        <div class="col-md-12 mt-3">
          <h3>
            <strong>Generate Transactions for Client Transfer:</strong>
          </h3>
          <div class="form-row">
            <div class="col">
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Date Transfered:</label>
                <div class="col my-1">
                  <input class="form-control form-control-sm" name type="date">
                </div>
              </div>
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Destination Branch:</label>
                <div class="col my-1">
                  <select class="custom-select custom-select-sm" id name>
                    <option value="1" ng-reflect-value="1">1</option>
                    <option value="2" ng-reflect-value="2">2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="form-row">
                <label
                  class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                >Department:</label>
                <div class="col my-1">
                  <select class="custom-select custom-select-sm" id name>
                    <option value="1" ng-reflect-value="1">1</option>
                    <option value="2" ng-reflect-value="2">2</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row my-3">
            <div class="col">
              <span>Balancing Entry Accounts:</span>
            </div>
          </div>
          <div class="form-row align-items-end">
            <label
              class="col-sm-3 col-form-label col-form-label-sm my-1 text-truncate"
            >If Receivables is bigger DEBIT:</label>
            <div class="col">
              <div class="form-row">
                <div class="col-sm-2">
                  <div class="form-row">
                    <div class="col-12 text-center">
                      <span>GL Account Code</span>
                    </div>
                    <div class="col my-1">
                      <input class="form-control form-control-sm" name type="text">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-row">
                    <div class="col-12 text-center">
                      <span>General Ledger Account Title</span>
                    </div>
                    <div class="col my-1">
                      <input
                        class="form-control form-control-sm bg-light-yellow border-0"
                        name
                        type="text"
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row align-items-end">
            <label
              class="col-sm-3 col-form-label col-form-label-sm my-1 text-truncate"
            >If Payable is bigger CREDIT:</label>
            <div class="col">
              <div class="form-row">
                <div class="col-sm-2">
                  <div class="form-row">
                    <div class="col-12 text-center d-block d-sm-none">
                      <span>GL Account Code</span>
                    </div>
                    <div class="col my-1">
                      <input class="form-control form-control-sm" name type="text">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="form-row">
                    <div class="col-12 text-center d-block d-sm-none">
                      <span>General Ledger Account Title</span>
                    </div>
                    <div class="col my-1">
                      <input
                        class="form-control form-control-sm bg-light-yellow border-0"
                        name
                        type="text"
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-row my-3">
            <label
              class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            >Output Filename</label>
            <div class="col my-1">
              <input class="form-control form-control-sm bg-light-yellow border-0" name type="text">
            </div>
            <span class="col-auto col-form-label col-form-label-sm">
              <button class="btn btn-outline-dark-blue btn-block">
                <i class="fa fa-file mr-1"></i>
                <span>Browse</span>
              </button>
            </span>
          </div>
          <div class="form-row justify-content-center">
            <div class="col-sm-auto my-2">
              <button class="btn btn-dark-blue btn-block p-3">
                <i class="fa fa-key mr-1"></i>
                <span>Generate</span>
              </button>
            </div>
            <div class="col-sm-auto my-2">
              <button class="btn btn-outline-dark-blue btn-block p-3">
                <i class="fa fa-ban mr-1"></i>
                <span>Cancel</span>
              </button>
            </div>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
</template>

<style>
.transfers-to-branch {
  width: 100%;
  padding-left: 15px;
  padding-right: 15px;
}

.bg-light-green {
  background-color: #20c997 !important;
}

.bg-light-blue {
  background-color: #6dcff6 !important;
}

.bg-light-pink {
  background-color: #ef80ff !important;
}

.bg-light-yellow {
  background-color: #fff9c4 !important;
}
</style>
