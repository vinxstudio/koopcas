<template>
  <div class="transfers-from-branch">
    <div class="form-row justify-content-center">
      <fieldset class="border w-50">
        <div class="col-md-12">
          <h3>
            <strong>Uploading of Transferred Clients:</strong>
          </h3>
          <div class="form-row">
            <div class="col-sm-8">
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
                >Origin Branch:</label>
                <div class="col my-1">
                  <select class="custom-select custom-select-sm" id name>
                    <option value="1" ng-reflect-value="1">1</option>
                    <option value="2" ng-reflect-value="2">2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col bg-danger text-center">
              <strong>IMPORTANT: Be sure to backup the database before proceeding!</strong>
            </div>
          </div>
          <div class="form-row my-3">
            <label
              class="col-sm-2 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
            >Source Filename</label>
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
          <div class="form-row">
            <div class="col">
              <p>Transition Tables:</p>
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
          <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
            <ul role="tablist" class="nav nav-tabs nav-fill">
              <li class="nav-item">
                <a class="nav-link active" href="#slcodes" data-toggle="tab">
                  <span>SL Codes</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#geo-groups" data-toggle="tab">
                  <span>Geo Groups</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#employer-codes" data-toggle="tab">
                  <span>Employer Codes</span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="slcodes">
                <table class="table table-sm table-bordered custom-table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">SC</th>
                      <th scope="col">ST</th>
                      <th scope="col">Description</th>
                      <th scope="col">TSC</th>
                      <th scope="col">TST</th>
                      <th scope="col">TDescription</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>e</td>
                      <td>v</td>
                      <td>s</td>
                      <td>s</td>
                      <td>s</td>
                      <td>s</td>
                    </tr>
                    <tr>
                      <td>e</td>
                      <td>v</td>
                      <td>v</td>
                      <td>v</td>
                      <td>v</td>
                      <td>s</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="tab-pane" id="geo-groups">
                <table class="table table-sm table-bordered custom-table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Description</th>
                      <th scope="col">TID</th>
                      <th scope="col">TDescription</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>e</td>
                      <td>v</td>
                      <td>s</td>
                      <td>s</td>
                    </tr>
                    <tr>
                      <td>e</td>
                      <td>v</td>
                      <td>v</td>
                      <td>v</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="tab-pane" id="employer-codes">
                <table class="table table-sm table-bordered custom-table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">1</th>
                      <th scope="col">2</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>2</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </ngb-tabset>
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
