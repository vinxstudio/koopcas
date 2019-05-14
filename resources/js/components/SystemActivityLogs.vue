<template>
  <div class="activity-logs">
    <div class="mt-3">
      <ngb-tabset class="custom-tabs tab-content-bg-light" ng-reflect-justify="fill">
        <ul role="tablist" class="nav nav-tabs nav-fill">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#general" role="tab">
              <span>General</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#details" role="tab">
              <span>Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#advanced" role="tab">
              <span>Advanced</span>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="general">
            <div class="form-check form-check-sm">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">Show Totals Only</label>
            </div>
            <div class="form-row justify-content-between">
              <div class="col-sm-4">
                <div class="form-row">
                  <div class="col-sm-3 text-sm-right">
                    <p class="col-form-label col-form-label-sm mt-1">Cuf-off Dates</p>
                  </div>
                  <div class="col">
                    <div class="form-row">
                      <label
                        class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1"
                      >from</label>
                      <div class="col my-1">
                        <input class="form-control form-control-sm" name type="date">
                      </div>
                    </div>
                    <div class="form-row">
                      <label class="col-sm-1 text-sm-right col-form-label col-form-label-sm mt-1">to</label>
                      <div class="col my-1">
                        <input class="form-control form-control-sm" name type="date">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-auto">
                <div class="form-check form-check-sm">
                  <input checked class="form-check-input" name="naem" type="radio" value="option1">
                  <label class="form-check-label">View Only</label>
                </div>
                <div class="form-check form-check-sm">
                  <input checked class="form-check-input" name="naem" type="radio" value="option2">
                  <label class="form-check-label">Report</label>
                </div>
              </div>
            </div>
            <div class="form-row my-2">
              <label
                class="col-sm-3 col-form-label col-form-label-sm text-truncate text-sm-right"
              >Activity List:</label>
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
              >Activity Field:</label>
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
          </div>

          <div role="tabpanel" class="tab-pane" id="details">
            <div class="form-row my-3">
              <label
                class="col-sm-2 col-form-label col-form-label-sm text-truncate"
              >Transaction Type:</label>
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
            <hr class="mt-0 mb-1">
            <hr class="mt-0 mb-2">
            <div class="form-row my-3">
              <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">SL Class:</label>
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
            <div class="form-row my-3">
              <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">SL Type:</label>
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
            <div class="form-row my-3">
              <div class="col-sm-2">
                <label class="col-form-label col-form-label-sm">Client ID:</label>
                <button class="btn btn-sm btn-block btn-outline-primary">
                  <i class="fa fa-file mr-1"></i>
                  <span>Browse</span>
                </button>
              </div>
              <div class="col">
                <div class="form-row align-items-center">
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
          </div>

          <div role="tabpanel" class="tab-pane" id="advanced">
            <div class="form-row my-3">
              <label class="col-sm-2 col-form-label col-form-label-sm text-truncate">Username:</label>
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
          </div>
        </div>
      </ngb-tabset>
      <div class="form-row justify-content-center">
        <div class="col-sm-auto my-2">
          <button class="btn btn-dark-blue btn-block p-3">
            <i class="fa fa-key mr-1"></i>
            <span>OK</span>
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
  </div>
</template>