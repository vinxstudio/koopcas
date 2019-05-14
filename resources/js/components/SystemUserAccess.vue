<template>
  <div class="user-access">
    <div class="mt-3">
      <ngb-tabset class="custom-tabs tab-content-bg-light mt-3" ng-reflect-justify="fill">
        <ul role="tablist" class="nav nav-tabs nav-fill">
          <li class="nav-item">
            <a class="nav-link active" href="#general" data-toggle="tab">
              <span>General</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#transactions" data-toggle="tab">
              <span>Transactions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#mtm" data-toggle="tab">
              <span>POS/MTM</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#client" data-toggle="tab">
              <span>Client</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#loan" data-toggle="tab">
              <span>Loan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#deposits" data-toggle="tab">
              <span>Deposits</span>
            </a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="general">
            <div class="form-row">
              <div class="col-sm-5">
                <div class="form-check form-check-sm">
                  <input class="form-check-input" disabled type="checkbox">
                  <label class="form-check-label">Disable Access</label>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Last Name:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >First Name:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Middle Name:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Suffix:</label>
                  <div class="col-sm-6 my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row mt-3">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Username:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                    <button class="btn btn-dark-blue btn-block p-3 my-1" disabled>
                      <i class="fa fa-key mr-1"></i>
                      <span>Change Password</span>
                    </button>
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Max # of Logins:</label>
                  <div class="col-sm-6 my-1">
                    <input class="form-control form-control-sm" name type="number">
                  </div>
                </div>
              </div>
              <div class="col">
                <h4>Setup User Access</h4>
                <div class="form-row my-2">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm text-truncate text-sm-right"
                  >Current Assignment:</label>
                  <div class="col">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select class="custom-select custom-select-sm" id multiple name>
                          <option value="1" ng-reflect-value="1">1</option>
                          <option value="2" ng-reflect-value="2">2</option>
                        </select>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-angle-double-right"></i>
                      </div>
                      <div class="col">
                        <select
                          class="custom-select custom-select-sm bg-light-yellow border-0"
                          id
                          multiple
                          name
                        >
                          <option value="1" ng-reflect-value="1"></option>
                          <option value="2" ng-reflect-value="2"></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row my-2">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm text-truncate text-sm-right"
                  >Teller/Cashier Number:</label>
                  <div class="col">
                    <div class="form-row align-items-center">
                      <div class="col">
                        <select class="custom-select custom-select-sm" id name>
                          <option value="1" ng-reflect-value="1">1</option>
                          <option value="2" ng-reflect-value="2">2</option>
                        </select>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-angle-double-right"></i>
                      </div>
                      <div class="col">
                        <input class="form-control form-control-sm" name type="number">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Level:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="text">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Access Expiry Date:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="date">
                  </div>
                </div>
                <div class="form-row">
                  <label
                    class="col-sm-3 col-form-label col-form-label-sm mt-1 text-sm-right text-truncate"
                  >Password Expires in:</label>
                  <div class="col my-1">
                    <input class="form-control form-control-sm" name type="number">
                  </div>
                  <span class="col-auto col-form-label col-form-label-sm mt-1">days</span>
                </div>
              </div>
            </div>
            <div class="form-row justify-content-center">
              <div class="col-sm-auto my-2">
                <button class="btn btn-outline-dark-blue btn-block" disabled>
                  <span>Generate Access Token</span>
                </button>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="transactions">test2</div>

          <div class="tab-pane" id="mtm">test3</div>

          <div class="tab-pane" id="client">test4</div>

          <div class="tab-pane" id="loan">test5</div>

          <div class="tab-pane" id="deposits">test6</div>
        </div>
      </ngb-tabset>
    </div>
  </div>
</template>